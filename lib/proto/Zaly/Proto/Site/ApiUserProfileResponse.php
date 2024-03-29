<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_user_profile.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>site.ApiUserProfileResponse</code>
 */
class ApiUserProfileResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.core.AllUserProfile profile = 1;</code>
     */
    private $profile = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zaly\Proto\Core\AllUserProfile $profile
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Site\ApiUserProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.core.AllUserProfile profile = 1;</code>
     * @return \Zaly\Proto\Core\AllUserProfile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Generated from protobuf field <code>.core.AllUserProfile profile = 1;</code>
     * @param \Zaly\Proto\Core\AllUserProfile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Zaly\Proto\Core\AllUserProfile::class);
        $this->profile = $var;

        return $this;
    }

}

