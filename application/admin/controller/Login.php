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
        $admin_n=db('admin')->field('login_name')->select();
        $admin_na=array();
        foreach($admin_n as $key=>$value){$admin_na[]=$value['login_name'];}        
    	  // 第一步：验证 马是否一样
        $captcha = new Captcha();
       // check:校验验证码是否一样，返回boolean。成功后则会删除之前验证码
        if (!$captcha->check(input("captcha_code"))) {
            // error错误提示函数
            $this->error("验证码输入不正确");
        }else if(in_array(input('user_name'), $admin_na)){
              $a=input('user_name');
              $where=array("login_name"=>$a);
              $admin_gp=db('admin')->field('pwd,group_id')->where($where)->find();
              //print_r($admin_p['pwd']);exit;
              if($admin_gp['pwd']==input('user_pwd')){
                  Session::set("login_name",$a);
                  Session::set("group_id",$admin_gp['group_id']);
                  $this->success("登录成功","index/index");               
              }else{
                $this->error("管理员密码不正确");
              }

        }else{
          $this->error("管理员账号不正确");
        }

    }

    public function logout()
    {
        Session::delete("login_name");
        if(Session::get("super")){
            Session::delete("super");
        }
        
        	  $this->success("退出成功","index");	
    }

    
}
