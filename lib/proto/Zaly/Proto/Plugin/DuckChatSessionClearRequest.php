<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/duckchat_session_clear.proto

namespace Zaly\Proto\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: duckchat.session.clear
 *
 * Generated from protobuf message <code>plugin.DuckChatSessionClearRequest</code>
 */
class DuckChatSessionClearRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string userId = 1;</code>
     */
    private $userId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $userId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Plugin\DuckchatSessionClear::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string userId = 1;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Generated from protobuf field <code>string userId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->userId = $var;

        return $this;
    }

}

