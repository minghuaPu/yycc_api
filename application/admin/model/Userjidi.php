<?php
namespace app\admin\model;

class Userjidi extends \think\Model {
	public function getApplyList(){
		if (!empty(input('uname')) || !empty(input('school_name'))) {
			if (!empty(input('uname')) && empty(input('school_name'))) {
				$uname_str = "'%".input('uname')."%'";
				$apply_list = db('user_jidi')->where("xm like $uname_str")->paginate(8);
			} else if (!empty(input('school_name')) && empty(input('uname'))) {
				$school_str = "'%".input('school_name')."%'";
				$apply_list = db('user_jidi')->where("school like $school_str")->paginate(8);
			} else {
				$uname_str = "'%".input('uname')."%'";
				$school_str = "'%".input('school_name')."%'";
				$apply_list = db('user_jidi')->where("xm like $uname_str and school like $school_str")->paginate(8);
			}
		} else {
			$apply_list = db('user_jidi')->paginate(8);
		}
		return $apply_list;
	}

	public function orderManager() {
		$orders = db('order')->alias('o')->join('user u', 'o.id=u.id')->field('o.out_trade_no, o.add_time, o.order_type, o.is_pay, u.user_name')->select();
		return $orders;
	}

}