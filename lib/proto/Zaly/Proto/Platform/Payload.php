<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/common.proto

namespace Zaly\Proto\Platform;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.Payload</code>
 */
class Payload extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.platform.PayloadType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>string token = 2;</code>
     */
    private $token = '';
    /**
     * Generated from protobuf field <code>string title = 3;</code>
     */
    private $title = '';
    /**
     * Generated from protobuf field <code>string subTitle = 4;</code>
     */
    private $subTitle = '';
    /**
     * Generated from protobuf field <code>string body = 5;</code>
     */
    private $body = '';
    /**
     * Generated from protobuf field <code>int32 badge = 6;</code>
     */
    private $badge = 0;
    /**
     * Generated from protobuf field <code>string sound = 7;</code>
     */
    private $sound = '';
    /**
     * Generated from protobuf field <code>string pushGoto = 8;</code>
     */
    private $pushGoto = '';
    /**
     * Generated from protobuf field <code>string picUrl = 9;</code>
     */
    private $picUrl = '';
    /**
     * Generated from protobuf field <code>map<string, string> extra = 10;</code>
     */
    private $extra;

    public function __construct() {
        \GPBMetadata\Platform\Common::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.platform.PayloadType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.platform.PayloadType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Platform\PayloadType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token = 2;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 3;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string subTitle = 4;</code>
     * @return string
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Generated from protobuf field <code>string subTitle = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSubTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->subTitle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string body = 5;</code>
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Generated from protobuf field <code>string body = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkString($var, True);
        $this->body = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 badge = 6;</code>
     * @return int
     */
    public function getBadge()
    {
        return $this->badge;
    }

    /**
     * Generated from protobuf field <code>int32 badge = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setBadge($var)
    {
        GPBUtil::checkInt32($var);
        $this->badge = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sound = 7;</code>
     * @return string
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * Generated from protobuf field <code>string sound = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSound($var)
    {
        GPBUtil::checkString($var, True);
        $this->sound = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string pushGoto = 8;</code>
     * @return string
     */
    public function getPushGoto()
    {
        return $this->pushGoto;
    }

    /**
     * Generated from protobuf field <code>string pushGoto = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setPushGoto($var)
    {
        GPBUtil::checkString($var, True);
        $this->pushGoto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string picUrl = 9;</code>
     * @return string
     */
    public function getPicUrl()
    {
        return $this->picUrl;
    }

    /**
     * Generated from protobuf field <code>string picUrl = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setPicUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->picUrl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> extra = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Generated from protobuf field <code>map<string, string> extra = 10;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setExtra($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->extra = $arr;

        return $this;
    }

}

