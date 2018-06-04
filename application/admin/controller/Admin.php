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

             $groupname=db('admin_group')->where("id=".$value['group_id'])->field('group_name')->find();
             $quanxian[]=$groupname;
             
        }//print_r($quanxian);exit();
        //print_r($quanxian);exit;
        $this->assign("quanxian",$quanxian); 
        $this->assign("admin_list",$admin_list);  
        return $this->fetch();
    }
    public function add(){
         $quan=db('admin_group')->field('id,group_name')->select();
         $this->assign("quan",$quan);
    	 return $this->fetch();
    }
    public function save()
    {
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
            $quan=db('admin_group')->field('id,group_name')->select();
            $this->assign("quan",$quan);
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
        $this->success('更新成功', 'index');
        }
        public function del(){
             db('admin')->delete(input());
             $this->success('删除成功', 'index');
        }

}
