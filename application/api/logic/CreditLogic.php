<?php
namespace app\api\logic;
use think\Model;
use think\Db;

/**
* 积分逻辑
*/
class CreditLogic extends Model
{
 	/**
 	 * 添加积分逻辑
 	 * @param int $uid  用户ID
 	 * @param string $type 什么操作
 	 *
 	 *  我的积分，
	 *  每天签到有10积分，
	 *  打卡有20积分，
	 *  成功完成1个课程100积 分，
 	 */
	function setCredit($uid,$type='sign')
	{
		 db('user_credit_log')->insert([
		 		'uid'=>$uid,
		 		'do_type'=>$type,
		 		'add_time'=>time(),
		 		'credit'=>$this->getCreditVal($type)
		 ]);
	}

	/**
	 * 获取积分值
	 * @param  string $type 积分获取类型
	 * @return minxin       如果有传类型就返回单个值，没有就是所有的积分
	 */
	function getCreditVal($type='')
	{
		 $createVal = ['sign'=>10,'daka'=>20,'class'=>100];

		 if ($type) {
		 	return $createVal[$type];
		 }else{
		 	return $createVal;
		 }

	}
}

?>