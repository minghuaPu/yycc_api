<?php 
namespace app\api\controller;
use \think\Session;

class Slidehdp extends \think\Controller
{
	public function index()
	{
		$page_cate= input('page_cate');
		$page_slide=db('mobilehdp')->where("cate = '$page_cate'")->select();
		return json($page_slide);
	}
}
 ?>