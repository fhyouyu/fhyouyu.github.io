<?php
/**
 * Created by PhpStorm.
 * User: childeYin<尹少爷>
 * Date: 01/08/2018
 * Time: 4:36 PM
 */


class  Api_Friend_ApplyController extends BaseController
{
    private $classNameForRequest = '\Zaly\Proto\Site\ApiFriendApplyRequest';
    private $classNameForResponse = '\Zaly\Proto\Site\ApiFriendApplyResponse';

    public function rpcRequestClassName()
    {
        return $this->classNameForRequest;
    }

    /**
     * @param \Zaly\Proto\Site\ApiFriendApplyRequest $request
     * @param \Google\Protobuf\Internal\Message $transportData
     */
    public function rpc(\Google\Protobuf\Internal\Message $request, \Google\Protobuf\Internal\Message $transportData)
    {
        ///处理request，
        $tag = __CLASS__ . '-' . __FUNCTION__;
        try {
            $toUserId = $request->getToUserId();

            if (empty($toUserId)) {
                $errorCode = $this->zalyError->errorFriendApply;
                $errorInfo = $this->zalyError->getErrorInfo($errorCode);
                $this->setRpcError($errorCode, $errorInfo);
                throw new Exception("no user id");
            }

            if ($toUserId == $this->userId) {
                $this->setRpcError("error.alert", "can't add yourself as a friend");
            }

            $greetings = $request->getGreetings();

            //check site allow addfriend

            $this->checkSiteAddFriendConfig($this->userId);

            //check is friend before is friend,with exception
            $this->checkIsFriend($toUserId);

            //save data
            $this->addApplyData($toUserId, $greetings);

            $this->setRpcError($this->defaultErrorCode, "");
            $this->rpcReturn($transportData->getAction(), new $this->classNameForResponse());

            $this->finish_request();

            //代发消息 && push
            $this->ctx->Message_Client->proxyNewFriendApplyMessage($toUserId, $this->userId, $toUserId);
        } catch (Exception $ex) {
            $this->ctx->Wpf_Logger->error($tag, "error_msg=" . $ex->getMessage());
            $this->setRpcError("error.alert", $ex->getMessage());
            $this->rpcReturn($transportData->getAction(), new $this->classNameForResponse());
        }
    }

    private function checkSiteAddFriendConfig($userId)
    {
        $enableAddFriend = $this->ctx->Site_Config->getConfigValue(SiteConfig::SITE_ENABLE_ADD_FRIEND);

        if (empty($enableAddFriend)) {

            $isManager = $this->ctx->Site_Config->isManager($userId);
            if (!$isManager) {
                throw new Exception("site disable add friend");
            }

        }
    }

    private function checkIsFriend($toUserId)
    {
        $isFriend = $this->ctx->SiteUserFriendTable->isFriend($this->userId, $toUserId);
        if ($isFriend) {
            $errorCode = $this->zalyError->errorFriendApplyFriendExists;
            $errorInfo = $this->zalyError->getErrorInfo($errorCode);
            $this->setRpcError($errorCode, $errorInfo);
            throw new Exception($errorInfo);
        }
    }

    /**
     * @param $toUserId
     * @param $greetings
     * @return bool
     * @throws Exception
     */
    private function addApplyData($toUserId, $greetings)
    {
        if (empty($greetings)) {
            $greetings = "";
        } else {
            $greetings = trim($greetings);
        }

        try {
            $data = [
                "userId" => $this->userId,
                "friendId" => $toUserId,
                "greetings" => $greetings,
                "applyTime" => ZalyHelper::getMsectime(),
            ];
            $this->ctx->SiteFriendApplyTable->insertApplyData($data);
        } catch (Exception $ex) {
            $where = [
                "userId" => $this->userId,
                "friendId" => $toUserId,
            ];
            $data = [
                "applyTime" => ZalyHelper::getMsectime(),
            ];

            if (isset($greetings)) {
                $data['greetings'] = $greetings;
            }
            $this->ctx->SiteFriendApplyTable->updateApplyData($where, $data);
        }
    }
}

