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
			->field('r.tc_title,r.now_time,r.s_time,r.e_time,r.homework_add_id,r.id')
			->paginate();

			return json($h_list);
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
		$total_timu_num = count($h_r_arr);  //2  50
		$result = [];
		foreach ($h_r_arr  as $key => $value) {
			if ($value['work_name'] != '') {
				 ++$jindu;
				 if ($value['work_name'] == $value['tc_danxuan']) {
				 	$result[$key] = 1;
				 }else{
				 	$result[$key] = 2;
				 }
			}else{
				$result[$key] = '';
			}
		}
 
		//1  是对还是错，有没有做
		//2  是对还是错，有没有做

		$progress = $jindu/$total_timu_num*100;

		db('homework_result')->insert(
			[	
				'u_id'=>input('uid'),
				'hw_id'=>input('hw_id'),
				'time'=>time(),
				'result'=>serialize($result) ,
				'progress'=>$progress,
			]
		);


	}
	
	 
}

	
?>