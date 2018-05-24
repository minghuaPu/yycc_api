<?php 
namespace app\admin\controller;

class homeworkrel extends \app\admin\controller\Auth
{
	
	// 题目列表
	 public function index()
    {
    	$homework_rel_list = db('homework_rel')->paginate(5);
    	$this->assign("homework_rel_list",$homework_rel_list); 
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
        model('homeworkrel')->addhomeworkrel();
        $this->success('添加成功', 'index');
    }
    // 进入题目更改
     public function edit()
    {
         $id=input('id');
         $homeworkrel_list_one=db('homework_rel')->where("id=$id")->find();
         $this->assign("homeworkrel_list_one",$homeworkrel_list_one);
         return $this->fetch();
    }
     // 题目更改操作
     public function update()
    { 
       model('homeworkrel')->updatehomeworkrel();
       $this->success('更新成功','index');
    }
    // 题目删除操作
     public function del()
    {
        //$id=input('id');
        db("homework_rel")->delete(input());
       $this->success('删除成功','index');

    }
    public function detail()
    {
        $homeworkrel_list_one=model('homeworkrel')->detailhomeworkrel();
        $banji=db('banji')->where("id=".$homeworkrel_list_one['banji'])->find();
        $homework=db('homework')->where("id in (".$homeworkrel_list_one['homework_add_id'].")")->field('tc_content1')->select();
        //print_r($homework);
        $this->assign("homeworkrel_list_one",$homeworkrel_list_one);
        $this->assign("banji", $banji);
        $this->assign("homework", $homework);
        return $this->fetch();
    }

}

?>