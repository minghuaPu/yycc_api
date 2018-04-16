<?php 
namespace app\api\controller;
use \think\Session;
/**
* 
*/
class type extends \think\Controller
{
	
	function index()
	{
		 $type_id = db("type")
		 ->alias('t')
		 ->field('t.id,t.cate_type,t.re,s.smalltalk_img,s.price,s.join_num,s.ke_type,v.real_name,s.title')
		 ->join('smalltalk s','s.ke_type = t.id','left')
		 ->join('vip v','v.id = s.vip_id')

		 ->select();
		
		 $list = [];
		 foreach ($type_id as $key => $value) {
		 	$t['id']=$value['id'];
		 	$t['cate_type']=$value['cate_type'];
		 	$t['re']=$value['cate_type'];

		 	$s['ke_type']=$value['ke_type'];
		 	$s['real_name']=$value['real_name'];
		 	$s['smalltalk_img']=$value['smalltalk_img'];
		 	$s['price']=$value['price'];
		 	$s['title']=$value['title'];
		 	$s['join_num']=$value['join_num'];
		 	if(empty($list[$value['id']])){
		 		$list[$value['id']] = $t;
		 	}
		 	// print_r($list);exit();
		 	$list[$value['id']]['s'][]=$s;


		 }

		 return json($list);
	}
}




 ?>