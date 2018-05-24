<?php 
namespace app\admin\controller;

class homeworkresult extends \app\admin\controller\Auth
{
	
	// 题目列表
	 public function index()
    {
    	$homework_result_list = db('homework_result')->paginate(5);
    	$this->assign("homework_result_list",$homework_result_list); 
        return $this->fetch();
    }
    // 进入题目添加
     public function add()
    {
         return $this->fetch();
    }
    // 题目添加操作
     public function save()
    {
        model('Homeworkresult')->addhomeworkresult();
        $this->success('添加成功', 'index');
    }
    // 进入题目更改
     public function edit()
    {
        $id=input('id');
         $homeworkresult_list_one=db('homework_result')->where("id=$id")->find();
         $this->assign("homeworkresult_list_one",$homeworkresult_list_one);
         return $this->fetch();
    }
     // 题目更改操作
     public function update()
    { 
       model('Homeworkresult')->updatehomeworkresult();
       $this->success('更新成功','index');
    }
    // 题目删除操作
     public function del()
    {
       //$id=input('id');
       db("homework_result")->delete(input());
       $this->success('删除成功','index');

    }
     public function detail()
    {
         $homeworkresult_list_one=model('Homeworkresult')->detailhomeworkresult();

         $homeworkresult_list_one['result'] =  implode(',',unserialize($homeworkresult_list_one['result']) ) ;

         $username=db('user')->where("id=".$homeworkresult_list_one['u_id'])->field('user_name')->select();
         $title=db('homework_rel')->where("id=".$homeworkresult_list_one['hw_id'])->field('tc_title')->select();
         
         $this->assign("username",$username);
         $this->assign("title",$title);
         $this->assign("homeworkresult_list_one",$homeworkresult_list_one);
         return $this->fetch();
    }
}

?>