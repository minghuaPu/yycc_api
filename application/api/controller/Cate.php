<?php 
namespace app\api\controller;
use \think\Session;
/**
* 
*/
class Cate extends \think\Controller
{
	
	function index()
	{
		 $type_id = db("smalltalk_cate")
		 ->alias('sc')
		 ->field('sc.id,s.smalltalk_cate_id,s.title,s.join_num,s.ke_type,
		 	s.smalltalk_img,v.real_name,s.price')
		 ->join('smalltalk s','s.smalltalk_cate_id = sc.id','left')
		 ->join('vip v','v.id = s.vip_id')
		 // ->paginate(3)
		 ->select();
		
		 $list = [];
		 // $_id = '1';
		 foreach ($type_id as $key => $value) {
		 	$t['id']=$value['id'];
		 	

		 	$s['smalltalk_cate_id']=$value['smalltalk_cate_id'];
		 	$s['title']=$value['title'];
		 	$s['join_num']=$value['join_num'];
		 	$s['ke_type']=$value['ke_type'];
		 	$s['smalltalk_img']=$value['smalltalk_img'];
		 	$s['price']=$value['price'];
		 	$s['real_name']=$value['real_name'];

		 	if(empty($list[$value['id']])){
		 		$list[$value['id']] = $t;
		 	}
		 	// print_r($list);exit();
		 	$list[$value['id']]['s'][]=$s;


		 }
		 // print_r($list);exit();
		 return json($list);
	}
}




 ?>