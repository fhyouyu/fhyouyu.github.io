<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/duckchat_session_profile.proto

namespace GPBMetadata\Plugin;

class DuckchatSessionProfile
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Core\User::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aea010a25706c7567696e2f6475636b636861745f73657373696f6e5f70" .
            "726f66696c652e70726f746f1206706c7567696e223b0a1d4475636b4368" .
            "617453657373696f6e50726f66696c6552657175657374121a0a12656e63" .
            "72797074656453657373696f6e496418012001280922470a1e4475636b43" .
            "68617453657373696f6e50726f66696c65526573706f6e736512250a0770" .
            "726f66696c6518012001280b32142e636f72652e416c6c5573657250726f" .
            "66696c65422b0a15636f6d2e7a616c792e70726f746f2e706c7567696eca" .
            "02115a616c795c50726f746f5c506c7567696e620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

