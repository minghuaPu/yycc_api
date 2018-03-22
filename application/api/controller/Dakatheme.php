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
					->where("uid =$uid")
					->order("id desc")
					->select();
					// print_r($theme_info);
		return json($theme_info);
	}


	//个人信息和打卡主题信息以及打卡多少次
	public function xiangqin()
	{
		$uid=input('uid');
		$id=input('id');
		$xinxi=db('daka_theme')
				->alias('dt')
				->field('u.user_name,u.head_img,dt.endTime,
					dt.starTime,dt.imgpath,dt.theme,dt.xiangqin,count(d.id) num')
				->join('user u','dt.uid = u.id')
				->join('daka d','dt.id = d.theme_id')
				->where("dt.uid ='$uid' and dt.id = '$id'")
				->find();
		// print_r($xinxi);
		return json($xinxi);
	}
}

 ?>