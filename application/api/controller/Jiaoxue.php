<?php
namespace app\api\controller;

class Jiaoxue extends \think\Controller
{
	public function index()
	{
		# code...
		db('jiaoxue_xuqiu')->insert([
			'money'=>input('number'),
			'xuqiu_content'=>input('xuqiu_content'),
			'uid'=>input('uid'),
			'has_time'=>input('textarea'),
			'addtime'=>time()	
		]);
		return json([
			'status'=>1,
			'msg'=>'发布成功'
		]);
	}


	public function xuqiu()
	{
		# code...
		$page = input('page');
		$xuqiu_lists = db('jiaoxue_xuqiu')
					->alias('jx_xq')
					->field('jx_xq.*,u.user_name,u.head_img')
					->join('user u','u.id = jx_xq.uid')
					// ->where('jx_xq.status = 1')
					->order('jx_xq.money desc')
					->paginate(5,false,['page'=>$page]);
		return json($xuqiu_lists);
	}
	public function teach()
	{
		$has_jiao = db('jiaoxue_xuqiu')->where('id = '.input('xq_id'))->find();
		// print_r($has_jiao);
		// echo($has_jiao['teacher_id']);

		// exit();
		if(empty($has_jiao['teacher_id'])){
			db('jiaoxue_xuqiu')->where('id = '.input('xq_id'))->update([
				'status'=>2,
				'teacher_id'=>input('teach_id')
			]);
			return json([
				'status'=>1,
				'msg'=>'开始教学'
			]);
		}else{
			return json([
				'status'=>2,
				'msg'=>'手速慢了，已有被教！'
			]);
		}
	}
	
}


?>