<?php
namespace app\api\controller;
use \think\Session;

class Jidi extends \think\Controller
{
	public function info()
	{
		 $info = db('user_jidi')->where(['uid'=>input('uid')])->find();
		 return json($info);
	}
	function doSave()
	{
		$jidi = json_decode(input('jidi'),true);
		if ($jidi['id']>0) {
			db('user_jidi')->update($jidi);	
		}else{
			db('user_jidi')->insert([
			 	'xm'=>$jidi['xm'],
	        	'school'=>$jidi['school'],
	        	'grade'=>$jidi['grade'],
	        	'uid'=>input('uid'),
	        	'add_time'=>time(),
			 ]);
		}
		 
	}
	
}


?>