<?php 
namespace app\admin\controller;

class Homework extends \app\admin\controller\Auth
{
	
	// 题目列表
	 public function index()
    {
    	$homework_list = db('homework')->paginate(5);
    	$this->assign("homework_list",$homework_list); 
        return $this->fetch();
    }
    // 进入题目添加
     public function add_timu()
    {
         return $this->fetch();
    }
    // 题目添加操作
     public function save_timu()
    {
        model('homework')->add_timu();
        $this->success('添加成功', 'index');
    }
    // 进入题目更改
     public function edit_timu()
    {
        $id=input('id');
         $homework_list_one=db('homework')->where("id=$id")->find();
         $this->assign("homework_list_one",$homework_list_one);
         return $this->fetch();
    }
     // 题目更改操作
     public function update_timu()
    { 
       model('homework')->update_timu();
       $this->success('更新成功','index');
    }
    // 题目删除操作
     public function del_timu()
    {
        //$id=input('id');
        db("homework")->delete(input());
       $this->success('删除成功','index');

    }
    public function detail()
    {
        $id=input('id');
         $homework_list_one=db('homework')->where("id=$id")->find();
         $this->assign("homework_list_one",$homework_list_one);
         return $this->fetch();
    }

}

?>