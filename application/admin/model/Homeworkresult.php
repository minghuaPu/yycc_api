<?php
namespace app\admin\model;

class Homeworkresult extends \think\Model{
 
	public function addhomeworkresult()
	{
       		db('homework_result')->insert([
			'u_id'=>input('u_id'),
			'hw_id'=>input('hw_id'),
			'time'=>input('time'),
			'reply'=>input('reply'),
			'result'=>input('result'),
			'progress'=>input('progress'),
			'hao_time'=>input('hao_time'),
			'correct'=>input('correct'),
			's_homework'=>input('s_homework')
			]);
    }

    public function updatehomeworkresult()
	{
       		db('homework_result')->where('id='.input('id'))->update([
			'u_id'=>input('u_id'),
			'hw_id'=>input('hw_id'),
			'time'=>input('time'),
			'reply'=>input('reply'),
			'result'=>input('result'),
			'progress'=>input('progress'),
			'hao_time'=>input('hao_time'),
			'correct'=>input('correct'),
			's_homework'=>input('s_homework')
			]);

    }

    public function detailhomeworkresult()
	{
       		return db('homework_result')->where('id='.input('id'))->find();

    }
    public function getHomeworkResult(){
    	//查询班级信息
        $bj=db('banji')->select();
        //按班级编号查询
        if(input('bj_id')){
            //print_r(input('bj_id'));exit();
            $banji=input('bj_id');
            $pageParam = ['query'=>[]];
            $pageParam['query']['bj_id']=$banji;
           // $homework_result_list = db('homework_result')->where('u_id','in', $uid)->order('id desc')->paginate(20);
            $homework_result_list = db('homework_result')
					->alias('v')
					->join('homework_rel vc','vc.id=v.hw_id')
					->field('v.*')
					->order('v.id desc')
					->where("vc.banji=$banji")
					->paginate(10,false,$pageParam);
        }//无条件查询
        else{
    	    $homework_result_list= db('homework_result')
					->alias('v')
					->join('homework_rel vc','vc.id=v.hw_id')
					->field('v.*')
					->order('v.id desc')
					->paginate(10,false);
        }
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
        $hrl['bj']=$bj;
        $hrl['hrl']=$homework_result_list;
        $hrl['hao']=$hao;
		return $hrl ;

    }

}

?>