<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gw_socket_close.proto

namespace Zaly\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gateway.GwSocketCloseRequest</code>
 */
class GwSocketCloseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string socketIds = 1;</code>
     */
    private $socketIds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $socketIds
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\GwSocketClose::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string socketIds = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSocketIds()
    {
        return $this->socketIds;
    }

    /**
     * Generated from protobuf field <code>repeated string socketIds = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSocketIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->socketIds = $arr;

        return $this;
    }

}

