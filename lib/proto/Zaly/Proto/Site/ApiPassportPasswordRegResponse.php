<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_passport_password_reg.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>site.ApiPassportPasswordRegResponse</code>
 */
class ApiPassportPasswordRegResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string preSessionId = 1;</code>
     */
    private $preSessionId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $preSessionId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Site\ApiPassportPasswordReg::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string preSessionId = 1;</code>
     * @return string
     */
    public function getPreSessionId()
    {
        return $this->preSessionId;
    }

    /**
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

}

