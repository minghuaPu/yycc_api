<?php
namespace app\admin\model;
use think\Db;

class Userjidi extends \think\Model {
	// *********************** 报名管理模块 *******************************

	// 报名管理（学生列表）
	public function getStuList(){
		// 获取条件查询
		$uname = input('uname');
		$school_name = input('school_name');
		// 查询参数与分页参数
		$searchParam = ['query' => []];
		$pageParam = ['query' => []];

		// 根据姓名查询
		if ($uname) {
			$searchParam['query']['xm'] = ['like', '%'.$uname.'%'];
			$pageParam['query']['uname'] = $uname;
		}

		// 根据学校名查询
		if ($school_name) {
			$searchParam['query']['school'] = ['like', '%'.$school_name.'%'];
			$pageParam['query']['school_name'] = $school_name;
		}

		// 执行查询并返回查询列表
		return db('user_jidi')->where($searchParam['query'])->paginate(10, false, $pageParam);
	}

	// *********************** 订单管理模块 *******************************

	// 订单管理
	public function orderManager() {
		// 获取条件查询
		$uname = input('uname');
		$order_type = input('order_type');
		// 查询参数与分页参数
		$searchParam = ['query' => []];
		$pageParam = ['query' => []];

		// 根据用户名查询
		if ($uname) {
			$searchParam['query']['user_name'] = ['like', '%'.$uname.'%'];
			$pageParam['query']['uname'] = $uname;
		}

		// 根据订单类型查询
		if ($order_type) {
			$searchParam['query']['order_type'] = ['like', '%'.$order_type.'%'];
			$pageParam['query']['order_type'] = $order_type;
		}

		// 执行查询并返回查询列表
		return db('order')->alias('o')->join('user u', 'o.id=u.id')->field('o.out_trade_no, o.add_time, o.order_type, o.is_pay, u.user_name')->where($searchParam['query'])->paginate(10, false, $pageParam);
	}

	// 获取所有用户
	public function orderList() {
		return Db::field('o.out_trade_no, o.add_time, o.order_type, o.is_pay, u.user_name')->table('fd_user u, fd_order o')->where('o.id=u.id')->select();
	}
}