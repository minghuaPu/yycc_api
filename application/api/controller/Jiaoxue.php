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
					->order('jx_xq.addtime desc')
					->paginate(5,false,['page'=>$page]);
		return json($xuqiu_lists);
	}
	
}


?>