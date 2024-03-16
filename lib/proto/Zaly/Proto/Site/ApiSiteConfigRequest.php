<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_site_config.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: api.site.config
 *
 * Generated from protobuf message <code>site.ApiSiteConfigRequest</code>
 */
class ApiSiteConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * appClient only.
     *
     * Generated from protobuf field <code>string random = 1;</code>
     */
    private $random = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $random
     *           appClient only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Site\ApiSiteConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * appClient only.
     *
     * Generated from protobuf field <code>string random = 1;</code>
     * @return string
     */
    public function getRandom()
    {
        return $this->random;
    }

    /**
     * appClient only.
     *
     * Generated from protobuf field <code>string random = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRandom($var)
    {
        GPBUtil::checkString($var, True);
        $this->random = $var;

        return $this;
    }

}

