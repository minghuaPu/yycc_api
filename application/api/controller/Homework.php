<?php
namespace app\api\controller;
use \think\Session;

class Homework extends \think\Controller
{
	function index()
	{
	}

	
	//homework_add 保存
	function save()
	{	
		$tc_content1 = input('tc_content1');
		$tc_content2 = input('tc_content2');
		$tc_danxuan = input('tc_danxuan');
		$tc_duoxuan = input('tc_duoxuan');
		$tc_panduan = input('tc_panduan');
		$tc_tiankong = input('tc_tiankong');
		$tc_id = 1;

		 db('homework')->insert([
		 	'tc_id'=>$tc_id,
		 	'tc_content1'=>$tc_content1,
		 	'tc_content2'=>$tc_content2,
		 	'tc_danxuan'=>$tc_danxuan,
		 	'tc_duoxuan'=>$tc_duoxuan,
		 	'tc_panduan'=>$tc_panduan,
		 	'tc_tiankong'=>$tc_tiankong,
		 ]);


		return json([
				"status"=>1,
				"msg"=>"保存成功"
			]);
	}

	//homework_addedit 跳转
	function addedit()
	{
		$id = input('id');
		$info_list = db('homework')
						->where("id = $id")
						->find();
		return json($info_list);
	}

	//homework_addedit 更改
	function addedit_update(){

		$tc_content1 = input('tc_content1');
		$tc_content2 = input('tc_content2');
		$tc_danxuan = input('tc_danxuan');
		$tc_duoxuan = input('tc_duoxuan');
		$tc_panduan = input('tc_panduan');
		$tc_tiankong = input('tc_tiankong');
		$tc_id = 1;

		 db('homework')->where('id='.input('id'))->update([
		 	'tc_id'=>$tc_id,
		 	'tc_content1'=>$tc_content1,
		 	'tc_content2'=>$tc_content2,
		 	'tc_danxuan'=>$tc_danxuan,
		 	'tc_duoxuan'=>$tc_duoxuan,
		 	'tc_panduan'=>$tc_panduan,
		 	'tc_tiankong'=>$tc_tiankong,
		 ]);
	}


	//homework_rel 保存
	function rel_save()
	{
		$tc_title = input('tc_title');
		$now_time = input('now_time');
		$s_time = input('s_time');
		$e_time = input('e_time');
		$homework_add_id = input('homework_add_id');
		$tc_id = 1;

		 db('homework_rel')->insert([
		 	'tc_id'=>$tc_id,
		 	'tc_title'=>$tc_title,
		 	'now_time'=>$now_time,
		 	's_time'=>$s_time,
		 	'e_time'=>$e_time,
		 	'homework_add_id'=>$homework_add_id,
		 ]);

		return json([
				"status"=>1,
				"msg"=>"颁布成功"
			]);
	}

	//发布的内容信息返回
	function hw_rel_find()
	{
		$tc_id=1;
		$info_list = db("homework")
						->where("tc_id = $tc_id")
						->order('id desc')
						->select();
		$new_a = [];

		foreach ($info_list as $key => $value) {
			$sc['id'] = $value['id'];
			$sc['tc_content1'] = strip_tags($value['tc_content1']) ;//php过滤html标签

			//判断new_a.id的值是空吗？
			if (empty($new_a[$value['id']])) {
					$new_a[$value['id']] = $sc;
				} 
		}

		return json($new_a);
	}

	//homework_tcinfo
	function tcinfo_index()
	{
		$tc_id = 1;
		
		$list = db("homework_rel")
			->where("tc_id = $tc_id")
			->select();
		//explode(',', $str, 2)
		foreach ($list as $key => $value) {

			$s = substr($value['homework_add_id'],1);
			$s1 = rtrim($s,"]");
			
		    $s2 = explode(',', $s1,1);
			foreach ($s2 as $key => $v) {
				print_r($v);
				}
			}	
			exit();
		return json($list);
	}

	// function tcin_list(){
	// 	$homework_add_id =input('homework_add_id');

	// 	$list=db('homework')
	// 		->where("id = $homework_add_id")
	// 		->find();

	// }
}

	
?>