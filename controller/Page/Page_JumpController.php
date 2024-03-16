<?php
/**
 * Created by PhpStorm.
 * User: zhangjun
 * Date: 01/09/2018
 * Time: 4:09 PM
 */

class Page_JumpController extends  HttpBaseController
{
    public function doIndex()
    {
//        parent::doIndex(); // TODO: Change the autogenerated stub
        $this->index();
    }

    public function index()
    {
        header('Access-Control-Allow-Origin: *');
        $jumpUrl = isset($_GET["jumpUrl"]) ? $_GET["jumpUrl"] : "";
        $siteName = $this->ctx->Site_Config->getConfigValue(SiteConfig::SITE_NAME);
        echo $this->display("jump_index", ["siteName" => $siteName, "jumpUrl" => $jumpUrl]);
        return;
    }

}