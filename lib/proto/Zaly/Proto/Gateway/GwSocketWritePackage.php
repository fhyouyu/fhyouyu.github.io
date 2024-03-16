<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gw_socket_write.proto

namespace Zaly\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gateway.GwSocketWritePackage</code>
 */
class GwSocketWritePackage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string socketIds = 1;</code>
     */
    private $socketIds;
    /**
     * Generated from protobuf field <code>bytes content = 2;</code>
     */
    private $content = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $socketIds
     *     @type string $content
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\GwSocketWrite::initOnce();
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

    /**
     * Generated from protobuf field <code>bytes content = 2;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Generated from protobuf field <code>bytes content = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->content = $var;

        return $this;
    }

}

