<?php 
namespace app\admin\controller;

class homeworkresult extends \app\admin\controller\Auth
{
	
	// // 题目列表
	  public function index()
     {  
        $all=model('Homeworkresult')->getHomeworkResult();
        $this->assign("hao",$all['hao']);  
        $this->assign("homework_result_list",$all['hrl']);
        $this->assign("page",input('page'));
        $this->assign("bj",$all['bj']);
        $this->assign('bj_id', input('bj_id'));
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
        // print_r(input('bj_id'));exit();
         $homeworkresult_list_one=db('homework_result')->where("id=$id")->find();
         if(is_array($homeworkresult_list_one['result'])){
             $homeworkresult_list_one['result']=implode(',', unserialize($homeworkresult_list_one['result']));
         }else{
            $homeworkresult_list_one['result']=$homeworkresult_list_one['result'];
         }
         $this->assign("homeworkresult_list_one",$homeworkresult_list_one);
         $this->assign('page',input('page'));
         $this->assign("bj_id",input('bj_id'));
         return $this->fetch();
    }
     // 题目更改操作
     public function update()
    { 
       model('Homeworkresult')->updatehomeworkresult();
       $this->success('更新成功',url('index',['bj_id'=>input('bj_id')]).'?page='.input('page'));
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
        $homeworkresult_list_one['result']=implode(',', unserialize($homeworkresult_list_one['result']));
       
        if ($homeworkresult_list_one['s_homework']) {
               $homeworkresult_list_one['s_homework']=implode(',',json_decode($homeworkresult_list_one['s_homework'],true));
        }
         $username=db('user')->where("id=".$homeworkresult_list_one['u_id'])->field('user_name')->select();
         $title=db('homework_rel')->where("id=".$homeworkresult_list_one['hw_id'])->field('tc_title')->select();
         
         $this->assign("username",$username);
         $this->assign("title",$title);
         $this->assign("homeworkresult_list_one",$homeworkresult_list_one);
         return $this->fetch();
    }
}

?>