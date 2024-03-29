<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_group_members.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>site.ApiGroupMembersUserProfile</code>
 */
class ApiGroupMembersUserProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.core.PublicUserProfile profile = 1;</code>
     */
    private $profile = null;
    /**
     * Generated from protobuf field <code>.core.GroupMemberType type = 2;</code>
     */
    private $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zaly\Proto\Core\PublicUserProfile $profile
     *     @type int $type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Site\ApiGroupMembers::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.core.PublicUserProfile profile = 1;</code>
     * @return \Zaly\Proto\Core\PublicUserProfile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Generated from protobuf field <code>.core.PublicUserProfile profile = 1;</code>
     * @param \Zaly\Proto\Core\PublicUserProfile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Zaly\Proto\Core\PublicUserProfile::class);
        $this->profile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.core.GroupMemberType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.core.GroupMemberType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Core\GroupMemberType::class);
        $this->type = $var;

        return $this;
    }

}

