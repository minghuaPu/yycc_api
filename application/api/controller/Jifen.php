<?php
namespace app\api\controller;
use \think\Session;

class Jifen extends \think\Controller
{
	public function index()
	{
		$jifen_list = db('user_credit_log')->alias('cl')
			->join('user u','cl.uid=u.id','left')
			->field("SUM(cl.credit) s_creid,cl.uid,u.user_name,u.head_img,u.school")
		 	->order('s_creid desc')
		 	->where('u.id>0')
		 	->group('uid')
		 	->limit(20)
		 	->select();
		return json($jifen_list);
	}
	 
	
}


?>