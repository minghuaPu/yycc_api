<?php
namespace app\admin\controller;

class Userjidi extends \app\admin\controller\Auth {
	// 学生列表
	public function index() {
		$apply_list = model("Userjidi")->getApplyList();
		$this->assign("apply_list", $apply_list);
		$this->assign("pay_status", user_kaitong_status());
		
		return $this->fetch();
	}

	// 添加学生
	public function add_student() {
		return $this->fetch();
	}

	// 保存学生
	public function save_student() {
		db("user_jidi")
		->data([
			'uid'=>(int)input('uid'),
			'xm'=>input('xm'),
			'add_time'=>time(input('add_time')),
			'is_pay'=>(int)input('is_pay'),
			'money'=>input('money'),
			'school'=>input('school'),
			'grade'=>input('grade'),
			'out_trade_no'=>input('out_trade_no')
			])
		->insert();
		$this->success("添加成功","index", '', 1);
	}

	// 修改信息
	public function edit_stu() {
		input('sel_id');
		$stu_list = Db('user_jidi')->where('id='.input('sel_id'))->find();
		$this->assign("stu_list", $stu_list);
		return $this->fetch();
	}

	// 删除信息
	public function del_stu() {
		db("user_jidi")->where('id='.input('sel_id'))->delete();
		$this->success("删除成功","index", '', 1);
	}

	// 保存编辑信息
	public function save_edit() {
		db("user_jidi")->where('id='.input('id'))->update([
			'uid'=>(int)input('uid'),
			'xm'=>input('xm'),
			'add_time'=>time(input('add_time')),
			'is_pay'=>(int)input('is_pay'),
			'money'=>input('money'),
			'school'=>input('school'),
			'grade'=>input('grade'),
			'out_trade_no'=>input('out_trade_no')
			]);
		$this->success("更新成功","index", '', 1);
	}

	// 订单管理
	public function orderManager() {
		$orders = model('Userjidi')->orderManager();
		$this->assign('pay_status', user_kaitong_status());
		$this->assign('order_type', orders_type());
		$this->assign('orders', $orders);
		// print_r($orders);
		return $this->fetch();
	}

}