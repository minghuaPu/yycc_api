<?php
namespace app\api\controller;
use \think\Session;

class Promote extends \think\Controller
{
	function index()
	{
		 //多表连接
			$list = db("smalltalk")
				->alias('s')
				->join('vip v','v.id = s.vip_id')
				->join('vip_cate vc','v.vip_cate_id = vc.id')
				->order('s.id desc')
				->paginate(3);
		 		
		return json($list);
	}
	 // public function vip()
	 // {
	 // 	$info=db('vip')
	 // 	->alias('v')
	 // 	->join('vip_cate vc','v.vip_cate_id = vc.id')
	 // 	->select();
	 // 	return json($info);

	 // }
	
}


?>