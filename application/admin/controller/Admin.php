<?php
namespace app\admin\controller;

class Admin extends \app\admin\controller\Auth
{
    public function index()
    {
        $admin_list=db('admin')->paginate(10);
        // print_r($admin_list);exit;
        //$admin_list['po']=array();
        foreach($admin_list as $key=>$value){
        	// print_r($value['power']);exit;
        	if($value['group_id']=="2"){
        		$quanxian[]="普通管理员";
        	}else{
        		$quanxian[]="超级管理员";
        	}
        }
        //print_r($quanxian);exit;
        $this->assign("quanxian",$quanxian); 
        $this->assign("admin_list",$admin_list);  
        return $this->fetch();
    }
    public function add(){
    	 return $this->fetch();
    }
    public function save()
    {
    	// $file = request()->file('picture');  
     //    if(isset($file)){  
     //           // 获取表单上传文件 例如上传了001.jpg  
     //           // 移动到框架应用根目录/public/uploads/ 目录下  
     //           $info = $file->move(ROOT_PATH . 'public/uploads/admin');  
     //           //       var_dump($info) ;die;  
  
     //          if($info){  
     //            // 成功上传后 获取上传信息  
     //              $a=$info->getSaveName();  
     //              $imgp= str_replace("\\","/",$a);  
     //              $imgpath='__PUBLIC__/uploads/admin/'.$imgp;  
     //              $picture= $imgpath;  
     //           }else{  
     //              // 上传失败获取错误信息  
     //              echo $file->getError();  
     //           }
     //     }
                 


        db('admin')->insert([
            "login_name"=>input('login_name'),
            "pwd"=>input('pwd'),
            "name" => input('name'),
            "e_mail" => input('e_mail'),
            "sex"=>input('sex'),
            "group_id"=>input('group_id'),
            
            "register_time" => date('Y-m-d H:i:s',time())
        ]);
        $this->success('添加成功', 'index');
    }
        public function edit(){
        	$a_one=db('admin')->where('id='.input('id'))->find();
            $this->assign('a_one',$a_one);
        	return $this->fetch();
        }
        public function update(){
            db('admin')->where('id='.input('id'))->update([
                "login_name"=>input('login_name'),
                "pwd"=>input('pwd'),
                "name" => input('name'),
                "e_mail" => input('e_mail'),
                "sex"=>input('sex'),
                "group_id"=>input('group_id')
        ]);
        $this->success('添加成功', 'index');
        }
        public function del(){
             db('admin')->delete(input());
             $this->success('删除成功', 'index');
        }

}
