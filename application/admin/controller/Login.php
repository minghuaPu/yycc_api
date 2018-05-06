<?php
namespace app\admin\controller;

use \think\captcha\Captcha;
use \think\Session;
class Login extends \think\Controller
{
     function index()
     {
       return $this->fetch();
     }

      // 生成验证码
    public function setcapche()
    {
        ob_clean();
         $captcha = new Captcha();
        // 没有混淆线
        $captcha->useCurve = false;

        $captcha->useNoise = false;

        $captcha->length = 3;

        // 生成
        return $captcha->entry();
    }

    public function go()
    {
    	  // 第一步：验证 马是否一样
        $captcha = new Captcha();
        // check:校验验证码是否一样，返回boolean。成功后则会删除之前验证码
        if (!$captcha->check(input("captcha_code"))) {
            // error错误提示函数
            $this->error("验证码输入不正确");
        }else if(input('user_name') != 'admin' || input('user_pwd') != '9517jsnjsn'){
        	  $this->error("管理员信息不正确");
        }else{
        	Session::set("admin",1);
        	  $this->success("登录成功","index/index");

        }

    }

    public function logout()
    {
        Session::delete("admin");
        	  $this->success("退出成功","index");

    	
    }

    
}
