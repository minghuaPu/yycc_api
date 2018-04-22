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
		 ->field('t.id,t.cate_type,t.re,s.smalltalk_img,s.price,s.join_num,s.ke_type,v.real_name')
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
		 	$s['join_num']=$value['join_num'];
		 	if(empty($list[$value['id']])){
		 		$list[$value['id']] = $t;
		 	}
		 	// print_r($list);exit();
		 	$list[$value['id']]['s'][]=$s;


		 }

		 return json($list);
	}
	public function vip_list()
	{
		// code...
		$xuqiu_content = input('textarea');
		$page = input('current_page');
		$_p= input('page');
		if($xuqiu_content){
			$vip_lists = db('vip')
						->alias('v')
						->field('v.id,v.head_img,v.real_name,v.identity')
						->join('user u','u.id = v.user_id')
						->where("v.identity like '%$xuqiu_content%'")
						->order('v.listen_num desc')
						->paginate(8,false,['page'=>$page]);
			return json($vip_lists);
			// return json($xuqiu_content);
		}else if($_p){
			$vip_lists = db('vip')
						->alias('v')
						->field('v.id,v.head_img,v.real_name,v.identity,u.grade')
						->join('user u','u.id = v.user_id')
						->order('v.listen_num desc')
						->paginate(8,false,['page'=>$_p]);
			return json($vip_lists);

		}else{
			$vip_lists = db('vip')
						->alias('v')
						->field('v.id,v.head_img,v.real_name,v.identity,u.grade')
						->join('user u','u.id = v.user_id')
						->order('v.listen_num desc')
						->paginate(4);
			return json($vip_lists);
		}
		


	}
}




 ?>