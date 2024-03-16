<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_friend_update.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>site.ApiFriendUpdateValue</code>
 */
class ApiFriendUpdateValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.site.ApiFriendUpdateType type = 1;</code>
     */
    private $type = 0;
    protected $fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type string $remark
     *     @type bool $isMute
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Site\ApiFriendUpdate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.site.ApiFriendUpdateType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.site.ApiFriendUpdateType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Site\ApiFriendUpdateType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string remark = 2;</code>
     * @return string
     */
    public function getRemark()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>string remark = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRemark($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isMute = 3;</code>
     * @return bool
     */
    public function getIsMute()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>bool isMute = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsMute($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFields()
    {
        return $this->whichOneof("fields");
    }

}

