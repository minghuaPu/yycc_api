<?php 
namespace app\api\controller;

/**
* 
*/
class Daka extends \think\Controller
{
	public function index()
	{
		$uid=input('uid');
		$_input=input('input');
		$textarea3=input('textarea3');
		$info =db('daka')
				->where("dakaTime = 'unix_timestamp(now())'")
				->find();
		if(empty($info)){
			 db('daka')->insert([
					"uid"=>$uid,
					"input"=>$_input,
					"textarea3"=>$textarea3,
					"dakaTime"=>time()
				]);
			return json([
				"status"=>1,
				"msg"=>"打卡成功"
			]);
		}else{
			return json([
				"status"=>-1,
				"msg"=>"打卡失败"
			]);
		}
		
	}

	public function hasData()
	{
		# code...
		$uid=input('uid');
		return json(db('daka')->where("uid =$uid")->order("id desc")->select());
	}
	public function allData()
	{
		$allData=db('daka')->order("id desc")->select();



		
		return json(
			["allData"=>$allData
		]);
		

	}
	public function toplist()
	{
		$allid=db('daka')->group("uid")->count("uid");
		$toplist =db('daka')->field('uid,count(id) c')->group("uid")->select();
		
		return json([
			"allid"=>$allid,
			"toplist"=>$toplist]);
		// SELECT uid ,count(id)FROM `fd_daka` group by uid;
	}
	public function has()
	{
		$uid=input('uid');
		$_count=db('daka') ->where("uid ='$uid'")->count();
		$daka_info= db('daka') ->where("uid ='$uid'")->select();
		return json([
			"daka_count"=>$_count,
			"daka_info"=>$daka_info
		]);
	}
}

 ?>