<?php
namespace app\api\controller;
use \think\Session;

class Promote extends \think\Controller
{
	function index()
	{
		 
			$list = db("smalltalk")
				->order('id desc')
				->paginate(3);
		 
		return json($list);
	}
	 
	
}


?>