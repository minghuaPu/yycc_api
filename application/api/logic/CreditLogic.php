<?php 
namespace app\api\logic;
use think\Model;
use think\Db;

/**
* 
*/
class CreditLogic extends Model
{
	
	function setCredit($uid,$type='sign')
	{
		 db('user_credit_log')->insert([
		 		'uid'=>$uid,
		 		'do_type'=>$type,
		 		'add_time'=>time(),
		 		'credit'=>$this->getCreditVal($type)
		 ]);
		
	}
	function getCreditVal($type=''){
		$createVal = ['sign'=>10,'daka'=>20,'class'=>100];

		 if ($type) {
		 	return $createVal[$type];
		 }else{
		 	return $createVal;
		 }
	}
}
 ?>