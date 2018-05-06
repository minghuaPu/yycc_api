<?php
namespace app\admin\controller;
use \think\Session;
class Auth extends \think\Controller
{
     function __construct()
     {
        if (!Session::get('admin')) {
            $this->error('请先登录',"login/index");
        }
        // echo request()->controller();
        // echo request()->action();	
        parent::__construct();
     }
    
}
