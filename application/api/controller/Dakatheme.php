<?php 
namespace app\api\controller;

/**
* 
*/
class Dakatheme extends \think\Controller
{
	public function index()
	{
		$uid=input('uid');
		return json(db('daka_theme')->where("uid =$uid")->order("id desc")->select());
	}
	public function xiangqin()
	{
		$uid=input('uid');
		$id=input('id');
		return json(db('daka_theme')->where("uid ='$uid' and id = '$id'")->find());
	}
}

 ?>