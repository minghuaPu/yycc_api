<?php
namespace app\admin\controller;

class Userjidi extends \app\admin\controller\Auth {
	// *********************** 报名管理模块 *******************************

	// 学生列表
	public function index() {
		// 获取学生列表
		$stu_list = model("Userjidi")->getStuList();
		$this->assign("stu_list", $stu_list);
		// 回填查询信息
		$this->assign("uname", input('uname'));
		$this->assign("school_name", input('school_name'));
		// 返回开通状态列表
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

	// *********************** 订单管理模块 *******************************

	// 订单管理
	public function orderManager() {
		$orders = model('Userjidi')->orderManager();
		$this->assign('orders', $orders);
		// 返回开通状态数组
		$this->assign('pay_status', user_kaitong_status());
		// 返回订单类型数组
		$this->assign('orders_type', orders_type());
		// 数据回显
		$this->assign('uname', input('uname'));
		$this->assign('order_type', input('order_type'));
		return $this->fetch();
	}

	// 导出订单列表
	public function exportExcel() {
		require(ROOT_PATH)."/extend/PHPExcel/PHPExcel.php";
		require(ROOT_PATH)."/extend/PHPExcel/PHPExcel/Worksheet/ColumnDimension.php";
		$excelObj = new \PHPExcel();
		$sheetObj = $excelObj->getActiveSheet();
		$sheetObj->getRowDimension(1)->setRowHeight(30);
		$sheetObj->setTitle("订单列表");
		$sheetObj->getColumnDimension('A')->setWidth(16); 
		$sheetObj->getColumnDimension('B')->setWidth(25); 
		$sheetObj->getColumnDimension('C')->setWidth(16); 
		$sheetObj->getColumnDimension('D')->setWidth(16); 
		$sheetObj->getColumnDimension('E')->setWidth(16); 
		$sheetObj->mergeCells('A1:E1')->setCellValue('A1', '订单列表');
		$sheetObj->getDefaultStyle()->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER)->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$sheetObj->getStyle('A1:E1')->getFont()->setName("微软雅黑")->setSize(18)->setBold(true);
		$sheetObj->getStyle('A2:E2')->getFont()->setName("微软雅黑")->setSize(12)->setBold(true);
		// 设置标题
		$sheetObj->setCellValue('A2', '用户名')->setCellValue('B2', '订单编号')->setCellValue('C2', '订单日期')->setCellValue('D2', '订单类型')->setCellValue('E2', '支付状态');
		// 获取数据
		$orders = model('Userjidi')->orderList();
		// print_r($orders);
		$arr = user_kaitong_status();
		$type = orders_type();
		// 遍历并向excel文件中写入数据
		foreach ($orders as $key => $order) {
			$sheetObj->setCellValue('A'.($key + 3), $order['user_name'])->setCellValue('B'.($key + 3), ' '.$order['out_trade_no'].' ')->setCellValue('C'.($key + 3), date("Y-m-d", $order['add_time']))->setCellValue('D'.($key + 3), $type[$order['order_type']])->setCellValue('E'.($key + 3), $arr[$order['is_pay']]);
		}
		$objWriter = \PHPExcel_IOFactory::createWriter($excelObj, 'Excel2007');
		$this->exportToBrowser("Excel2007", "订单列表.xlsx");
		$objWriter->save('php://output');
	}

	// 向浏览器输出excel文件
	public function exportToBrowser($file_type, $file_name) {
		// 清除缓冲区
		ob_end_clean();
		// 判断Office版本
		if ($file_type == "Excel5") {
			header('Content-Type: application/vnd.ms-excel');
		} else {
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		}
		header('Content-Disposition: attachment;filename="'.$file_name.'"');
		// 禁止缓存
		header('Cache-Control: max-age=0');
	}

}