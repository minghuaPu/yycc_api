<?php
namespace app\api\controller;
use \think\Session;

class Homeworkstudent extends \think\Controller
{
	function index()
	{
		$uid = input('uid');

		$h_list = db('user')->alias('u')
			->join('homework_rel r','u.banji_id=r.banji')
			->join('homework_result res','res.hw_id=r.id','left')
			
			->field('r.tc_title,r.now_time,r.s_time,r.e_time,r.homework_add_id,r.id,res.progress')
			->select();
			return json($h_list);
	}

	public function dex_getlist(){
		$u_id =input("u_id");
		$hw_id = input('hw_id');

		$info =db('homework_result')->where("u_id =$u_id and hw_id =$hw_id ")->find();
		return json($info);
	}

	public function getList()
	{
		 $info = db('homework_rel')->field('homework_add_id')->where("id=".input('hw_id'))->find();
		 $timu_list = db('homework')->where('id in ('.$info['homework_add_id'].')')->select();
		 return json($timu_list);
	}

	public function doResult()
	{
		$h_r_list = input('homework_list');

		$h_r_arr = json_decode($h_r_list,true);

		$jindu = 0;
		$correct = 0;
		$total_timu_num = count($h_r_arr);  //2  50
		$result = [];
		$s_homework=[];
		foreach($h_r_arr as $key => $value) {

			$s_homework[$key] = $value['work_name'];
			if ($value['work_name'] != '' && $value['work_name']!='<div style="display:none" class="@@@"></div>') {
				 ++$jindu;

				 if($value['work_require']== 1){
				 	if($value['work_name'] == $value['tc_danxuan']){		//判断单选				 
				 		$result[$key] = 1;
				 		++$correct;
				 	}else{
				 		$result[$key] = 2;
				 	}	
				
				}else if($value['work_require']== 2){
					if(array_diff(json_decode($value['tc_duoxuan']),$value['work_name'])==null&&array_diff($value['work_name'],json_decode($value['tc_duoxuan']))==null){ 
						$result[$key] = 1;
						++$correct;
					}else{
						$result[$key] = 2;
					}
				}else if($value['work_require']== 3){
					if($value['work_name'] == $value['tc_panduan']){		//判断判断
				 		$result[$key] = 1;
				 		++$correct;
				 	}else{
				 		$result[$key] = 2;
				 	}
				
				}else if($value['work_require']== 4){
					if($value['kkjkj']==$value['work_name']){		//判断填空
				 		$result[$key] = 1;
				 		++$correct;
					}else{
						$result[$key] = 2;
					}

				}else if($value['work_require']== 5){
					if(strstr($value['work_name'],'class="@@@"')){		//判断解答				 	
				 		$result[$key] = 3;	
				 	}
				}
			}else{
				$result[$key] = '';
			}
		} 
		 	
		//1  是对还是错，有没有做
		//2  是对还是错，有没有做
		$progress = $jindu/$total_timu_num*100;
		$progress_2 = $correct/$total_timu_num*100;

		$info_id = db('homework_result')->insertGetId(
			[	
				'u_id'=>input('uid'),
				'hw_id'=>input('hw_id'),				
				'time'=>time(),
				'hao_time'=> time()-input('hao_time')/1000,
				'result'=>serialize($result) ,
				'progress'=>$progress,
				'correct'=>$progress_2,
				's_homework'=>json_encode($s_homework),
			]
		);
		return json($info_id);

	}

	public function doedit()
	{
		$h_r_list = input('homework_list');

		$h_r_arr = json_decode($h_r_list,true);

		print_r($h_r_list);
	}

	public function info_lists()
	{

		$lists = db('homework_result')
			->where("id = ".input('hw_id'))
			->find();
			$lists['result'] = json_encode(unserialize($lists['result'])) ;
		return json($lists);
	}
	
	 
}

	
?>