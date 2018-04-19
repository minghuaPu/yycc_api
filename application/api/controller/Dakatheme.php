<?php 
namespace app\api\controller;

/**
* 
*/
class Dakatheme extends \think\Controller
{
	//个人参与所有主题信息
	public function index()
	{
		$uid=input('uid');
		$theme_info=db('daka_theme')
					// ->alias('dt')
					// ->join('daka d','d.theme_id = dt.id','left')
					// ->where("d.uid = $uid")
					// ->where("uid =$uid")
					// ->order("id desc")
					->select();
					// print_r($theme_info);
		return json($theme_info);
	}


	//个人信息和打卡主题信息以及打卡多少次
	public function xiangqin()
	{
		$uid=input('uid');
		$id=input('id');
		if(!empty($id)){
			$xinxi=db('daka_theme')
				->alias('dt')
				->field('dt.endTime,dt.starTime,dt.imgpath,dt.theme,dt.xiangqin,count(d.id) num')
				
				->join('daka d','dt.id = d.theme_id')
				->join('user u','d.uid = u.id','left')
				->where("dt.id = '$id' and d.uid = '$uid'")
				->order('d.dakaTime desc')
				->find();
		}else{
			$xinxi=db('user')->where("id = $uid")->find();
		}
		$has_daka_info = db('daka')->field('dakaTime')->order('id desc')->where("uid=$uid")->find();
		

		return json(['lists'=>$xinxi,'has_daka_info'=>$has_daka_info]);
	}
}

 ?>