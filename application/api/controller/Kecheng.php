<?php
namespace app\api\controller;
use \think\Session;

class Kecheng extends \think\Controller
{
	function index()
	{
		//小讲表
		/*$vip_id = Session::get('vip_id')?Session::get('vip_id'):'';
		$where = '';*/
		$where = "";
		$cateId = input("cateId");
		if ($cateId>0) {
			$where = "smalltalk_cate_id=$cateId";
		}
		$list = db("smalltalk")
			->alias('s')
			->where($where)
			->field('s.id,s.title,s.smalltalk_img,s.join_num,s.create_time,v.real_name,v.identity,v.head_img,sc.cate_name')
			->join('vip v','s.vip_id = v.id')
			->join('smalltalk_cate sc','s.smalltalk_cate_id = sc.id')
			->order('s.id desc')
			->paginate(4);
		//print_r($list);
		return json($list);
	}
	 
	public function getKeCate()
	{
	 	$cate_list = db('smalltalk_cate')->limit(4)->select();

		return json($cate_list);
	 	
	} 
}


?>