<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_plugin_list.proto

namespace GPBMetadata\Site;

class ApiPluginList
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Core\Plugin::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a82020a1a736974652f6170695f706c7567696e5f6c6973742e70726f74" .
            "6f12047369746522400a14417069506c7567696e4c697374526571756573" .
            "7412280a0975736167655479706518012001280e32152e636f72652e506c" .
            "7567696e557361676554797065223a0a15417069506c7567696e4c697374" .
            "526573706f6e736512210a046c69737418012003280b32132e636f72652e" .
            "506c7567696e50726f66696c6542580a13636f6d2e7a616c792e70726f74" .
            "6f2e736974655a2f6769746875622e636f6d2f6475636b636861742f6475" .
            "636b636861742d676174657761792f70726f746f2f73697465ca020f5a61" .
            "6c795c50726f746f5c53697465620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

