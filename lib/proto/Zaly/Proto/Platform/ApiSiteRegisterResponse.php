<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/api_site_register.proto

namespace Zaly\Proto\Platform;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.ApiSiteRegisterResponse</code>
 */
class ApiSiteRegisterResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * return to site 
     *
     * Generated from protobuf field <code>string preSessionId = 1;</code>
     */
    private $preSessionId = '';
    /**
     * Generated from protobuf field <code>string loginName = 2;</code>
     */
    private $loginName = '';

    public function __construct() {
        \GPBMetadata\Platform\ApiSiteRegister::initOnce();
        parent::__construct();
    }

    /**
     * return to site 
     *
     * Generated from protobuf field <code>string preSessionId = 1;</code>
     * @return string
     */
    public function getPreSessionId()
    {
        return $this->preSessionId;
    }

    /**
     * return to site 
     *
     * Generated from protobuf field <code>string preSessionId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPreSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->preSessionId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string loginName = 2;</code>
     * @return string
     */
    public function getLoginName()
    {
        return $this->loginName;
    }

    /**
     * Generated from protobuf field <code>string loginName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLoginName($var)
    {
        GPBUtil::checkString($var, True);
        $this->loginName = $var;

        return $this;
    }

}

