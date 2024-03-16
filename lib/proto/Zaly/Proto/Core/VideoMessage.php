<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/message.proto

namespace Zaly\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>core.VideoMessage</code>
 */
class VideoMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string url = 1;</code>
     */
    private $url = '';
    /**
     *second
     *
     * Generated from protobuf field <code>int32 time = 2;</code>
     */
    private $time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url
     *     @type int $time
     *          second
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     *second
     *
     * Generated from protobuf field <code>int32 time = 2;</code>
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     *second
     *
     * Generated from protobuf field <code>int32 time = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->time = $var;

        return $this;
    }

}

