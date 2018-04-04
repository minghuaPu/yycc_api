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
		$xinxi=db('daka_theme')
				->alias('dt')
				->field('dt.endTime,dt.starTime,dt.imgpath,dt.theme,dt.xiangqin,count(d.id) num,u.user_name,u.head_img')
				
				->join('daka d','dt.id = d.theme_id')
				->join('user u','d.uid = u.id','left')
				->where("dt.id = '$id' and d.uid = '$uid'")
				->find();

		$sTime= date('Y-m-d H:i:s',$xinxi['starTime']);
		$eTime= date('Y-m-d H:i:s',$xinxi['endTime']);
		// $_Y=  date('Y',$xinxi['endTime'])- date('Y',$xinxi['starTime']);
		// $_m= date('m',$xinxi['endTime'])- date('m',$xinxi['starTime']);
		// $_d= date('d',$xinxi['endTime'])- date('d',$xinxi['starTime']);
		// $_H= date('H',$xinxi['endTime'])- date('H',$xinxi['starTime']);
		// $_i= date('i',$xinxi['endTime'])- date('i',$xinxi['starTime']);
		// $_s= date('s',$xinxi['endTime'])- date('s',$xinxi['starTime']);
		// $_Y1= date('Y',$xinxi['endTime'])- date('Y',time());
		// $_m1= date('m',$xinxi['endTime'])- date('m',time());
		// $_d1= date('d',$xinxi['endTime'])- date('d',time());
		// $_H1= date('H',$xinxi['endTime'])- date('H',time());
		// $_i1= date('i',$xinxi['endTime'])- date('i',time());
		// $_s1= date('s',$xinxi['endTime'])- date('s',time());
		// exit();
		// print_r($xinxi);
		// exit();
		return json($xinxi);
	}
}

 ?>