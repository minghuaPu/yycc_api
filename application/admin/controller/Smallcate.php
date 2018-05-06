<?php
namespace app\admin\controller;

class Smallcate extends \app\admin\controller\Auth
{
    public function index()
    {
     
        $smallcate_list = db('smalltalk_cate')
                    ->order('id desc')
                    ->paginate(8);


    	$this->assign('smallcate_list',$smallcate_list);
        return $this->fetch();
    }

    public function delete()
    {
    	//删除smallcate
    	db('smalltalk_cate')->delete(input());
 
    	
        $this->success('删除成功','index');
    }

    public function add_edit_info()
    {
        if ($_POST) {
              
            if ($_POST['id']>0) {
                
                db('smalltalk_cate')->update([
                    "cate_name"=>input('cate_name'),
                    "status"=>input('status'),
                    "id"=>input('id')
                ]);
            }else{
              
                // 添加
                db("smalltalk_cate")->insert([
                    "cate_name"=>input('cate_name'),
                    "status"=>input('status'),
                ]);
            }

            $this->success("操作成功",url("index"));
            
        }else{
            $id = input('id');
            $info = null;
            $is_add = true;
            if ($id>0) {
               $info =  db('smalltalk_cate')->where("id=$id")->find();
               $is_add = false;

            }
            $this->assign('is_add', $is_add); 

            $this->assign('info', $info); //赋值编辑时候的信息
            return $this->fetch();
        }
       
      
        
    }
}
