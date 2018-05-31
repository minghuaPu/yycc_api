<?php
namespace app\admin\controller;
use \think\Session;
class Auth extends \think\Controller
{
     function __construct()
     {
        if (!Session::get('login_name')) {
            $this->error('请先登录',"login/index");
        }else{
             // 1/获取用户组 2
        	 $group_id=Session::get('group_id');
            //  print_r($group_id);exit();

             // 2/权限组表查找2对应的access   
        	 $where=array("id"=>$group_id);
        	 $quanxian=db('admin_group')->field('acess')->where($where)->find();
             
            // print_r($quanxian);exit();   

             if($quanxian['acess']!==""){ 
                // 3/获取当前控制器/当前行为
                $request= \think\Request::instance();
                $controller_name=$request->controller();
                $action=$request->action();
                // print_r(strtolower($controller_name));exit(); 

                // 4/遍历这个组所有权限
                // 判断当前c和a是不是存在acsss中
                // 全部遍历完
                // 存在就放行
                // ，不存在就提示没权限
                $quan=json_decode($quanxian['acess'],true);
                 // print_r($quan);exit();
                $is_acess = false;
                foreach($quan as $key=>$value){
                 //print_r($value['c']);exit();
                   if(strtolower($controller_name)==$value['c']&& ($action==$value['a']||$value['a']=='all'))
                    {
                        $is_acess = true;
                    }
                }

                if ($is_acess) {
                    
                     parent::__construct();
                    
                }else{
                    $this->error("您没有此操作权限","index/index",'',1);

                }
                    


             }else{

                parent::__construct();
             }

        	}
        	 
     }

    
}
