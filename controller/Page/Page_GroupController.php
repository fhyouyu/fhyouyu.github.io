<?php
/**
 * Created by PhpStorm.
 * User: childeYin<尹少爷>
 * Date: 21/07/2018
 * Time: 4:36 PM
 */

class Page_GroupController extends HttpBaseController
{
    public function doIndex()
    {
        parent::doIndex(); // TODO: Change the autogenerated stub
    }

    public function index()
    {
        echo $this->display("group_groupCreate");
        return;
    }

}