<?php 
namespace app\api\logic;
use think\Model;
use think\Db;

/**
* 
*/
class CreditLogic extends Model
{
	
	function setCredit($uid,$type='sign',$num='')
	{
		if($type == 'choujiang'){
			db('user_credit_log')->insert([
		 		'uid'=>$uid,
		 		'do_type'=>$type,
		 		'add_time'=>time(),
		 		'credit'=>$num
		 ]);
		}else{
			db('user_credit_log')->insert([
		 		'uid'=>$uid,
		 		'do_type'=>$type,
		 		'add_time'=>time(),
		 		'credit'=>$this->getCreditVal($type)
		 ]);
		}
		 
		
	}
	function getCreditVal($type=''){
//我的积分：每天签到有2积分，打卡有1积分，成功完成1个课程10积分，问2答5，作业及格2分，80分优秀3分，做作业了1分

		$createVal = ['sign'=>2,'daka'=>1,'class'=>10,'dowork'=>1,'ask'=>2,'answer'=>5,'jige'=>2,'youxiu'=>3];
		 if ($type) {
		 	return $createVal[$type];
		 }else{
		 	return $createVal;
		 }
	}
}
 ?>