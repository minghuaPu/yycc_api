<?php 
namespace app\admin\controller;

class homeworkresult extends \app\admin\controller\Auth
{
	
	// 题目列表
	 public function index()
    {
    	$homework_result_list = db('homework_result')->order('id desc')->paginate(20);
       $hao= array( );
      foreach($homework_result_list as $key=>$value){
         
        if($value['hao_time']>60){
            $haotime=$value['hao_time']/60;
            if(is_int($haotime)){
                $hao[]=$haotime."分";     
            }else{
               $mo=$value['hao_time']%60;
               $hao[]=intval($haotime)."分".$mo."秒";
            }
        }else{
              $hao[]=$value['hao_time']."秒";
        }  

      } 
        $this->assign("hao",$hao);  
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
         $homeworkresult_list_one['result']=implode(',', unserialize($homeworkresult_list_one['result']));
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