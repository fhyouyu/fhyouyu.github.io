<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_site_login.proto

namespace GPBMetadata\Site;

class ApiSiteLogin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Core\User::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac0020a19736974652f6170695f736974655f6c6f67696e2e70726f746f" .
            "12047369746522690a13417069536974654c6f67696e5265717565737412" .
            "140a0c70726553657373696f6e496418012001280912150a0d6465766963" .
            "655075626b50656d18022001280912110a096c6f67696e4e616d65180320" .
            "01280912120a0a6973526567697374657218042001280822500a14417069" .
            "536974654c6f67696e526573706f6e736512110a0973657373696f6e4964" .
            "18012001280912250a0770726f66696c6518022001280b32142e636f7265" .
            "2e416c6c5573657250726f66696c6542580a13636f6d2e7a616c792e7072" .
            "6f746f2e736974655a2f6769746875622e636f6d2f6475636b636861742f" .
            "6475636b636861742d676174657761792f70726f746f2f73697465ca020f" .
            "5a616c795c50726f746f5c53697465620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

