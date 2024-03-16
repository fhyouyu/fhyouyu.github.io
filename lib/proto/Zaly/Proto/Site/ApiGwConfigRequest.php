<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_gw_config.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>site.ApiGwConfigRequest</code>
 */
class ApiGwConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.core.GatewayType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>string host = 2;</code>
     */
    private $host = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type string $host
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Site\ApiGwConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.core.GatewayType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.core.GatewayType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Core\GatewayType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string host = 2;</code>
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Generated from protobuf field <code>string host = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

}

