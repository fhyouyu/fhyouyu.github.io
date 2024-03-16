<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_passport_password_modifyPassword.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: api.passport.password.modifyPassword
 * error:
 *     error.passport.password.maxerror
 *
 * Generated from protobuf message <code>site.ApiPassportPasswordModifyPasswordRequest</code>
 */
class ApiPassportPasswordModifyPasswordRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string loginName = 1;</code>
     */
    private $loginName = '';
    /**
     * Generated from protobuf field <code>string password = 2;</code>
     */
    private $password = '';
    /**
     * Generated from protobuf field <code>string newPassword = 3;</code>
     */
    private $newPassword = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $loginName
     *     @type string $password
     *     @type string $newPassword
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Site\ApiPassportPasswordModifyPassword::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string loginName = 1;</code>
     * @return string
     */
    public function getLoginName()
    {
        return $this->loginName;
    }

    /**
     * Generated from protobuf field <code>string loginName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLoginName($var)
    {
        GPBUtil::checkString($var, True);
        $this->loginName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password = 2;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string newPassword = 3;</code>
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * Generated from protobuf field <code>string newPassword = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNewPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->newPassword = $var;

        return $this;
    }

}

