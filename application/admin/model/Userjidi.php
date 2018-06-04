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

        // 判断查询条件是否为空
        // 查询条件不为空（只要有一个查询条件不为空），有条件查询
		if (!empty($uname) || !empty($school_name)) {
			// 根据姓名查询
			if (!empty($uname) && empty($school_name)) {
				// 给查询参数赋值
				$searchParam['query']['xm'] = ['like', '%'.$uname.'%'];
				// 给分页参数赋值
				$pageParam['query']['uname'] = $uname;
				$stu_list = db('user_jidi')->where($searchParam['query'])->paginate(10, false, $pageParam);
			} else if (!empty($school_name) && empty($uname)) {
			    // 根据学校名查询
				$searchParam['query']['school'] = ['like', '%'.$school_name.'%'];
				$pageParam['query']['school_name'] = $school_name;
				$stu_list = db('user_jidi')->where($searchParam['query'])->paginate(10, false, $pageParam);
			} else {
				// 根据姓名和学校名查询
				// 给查询参数赋值
				$searchParam['query']['xm'] = ['like', '%'.$uname.'%'];
				$searchParam['query']['school'] = ['like', '%'.$school_name.'%'];
				// 给分页参数赋值
				$pageParam['query']['uname'] = $uname;
				$pageParam['query']['school_name'] = $school_name;
				$stu_list = db('user_jidi')->where($searchParam['query'])->paginate(10, false, $pageParam);
			}
		} else {
			// 查询条件为空，无条件查询
			$stu_list = db('user_jidi')->paginate(10);
		}

		// 返回查询列表
		return $stu_list;
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

		// 判断查询条件是否为空
		// 查询条件不为空（只要有一个查询条件不为空），有条件查询
		if (!empty($uname) || !empty($order_type)) {
			// 根据姓名查询
			if (!empty($uname) && empty($order_type)) {
				// 根据用户名查询
				$searchParam['query']['user_name'] = ['like', '%'.$uname.'%'];
				$pageParam['query']['uname'] = $uname;
				$orders = db('order')->alias('o')->join('user u', 'o.id=u.id')->field('o.out_trade_no, o.add_time, o.order_type, o.is_pay, u.user_name')->where($searchParam['query'])->paginate(10, false, $pageParam);
			} else if (!empty($order_type) && empty($uname)) {
				// 根据订单类型查询
				$searchParam['query']['order_type'] = ['like', '%'.$order_type.'%'];
				$pageParam['query']['order_type'] = $order_type;
				$orders = db('order')->alias('o')->join('user u', 'o.id=u.id')->field('o.out_trade_no, o.add_time, o.order_type, o.is_pay, u.user_name')->where($searchParam['query'])->paginate(10, false, $pageParam);
			} else {
				// 根据用户名和订单类型查询
				$searchParam['query']['user_name'] = ['like', '%'.$uname.'%'];
				$searchParam['query']['order_type'] = ['like', '%'.$order_type.'%'];
				$pageParam['query']['user_name'] = $uname;
				$pageParam['query']['order_type'] = $order_type;
				$orders = db('order')->alias('o')->join('user u', 'o.id=u.id')->field('o.out_trade_no, o.add_time, o.order_type, o.is_pay, u.user_name')->where($searchParam['query'])->paginate(10, false, $pageParam);
			}
		} else {
		    // 查询条件为空，无条件查询
			$orders = Db::field('o.out_trade_no, o.add_time, o.order_type, o.is_pay, u.user_name')->table('fd_user u, fd_order o')->where('o.id=u.id')->paginate(10);
		}

		// 返回查询列表
		return $orders;
	}

	// 获取所有用户
	public function orderList() {
		return Db::field('o.out_trade_no, o.add_time, o.order_type, o.is_pay, u.user_name')->table('fd_user u, fd_order o')->where('o.id=u.id')->select();
	}
}