<?php 
namespace app\api\controller;
use app\api\logic\CreditLogic;

/**
* 
*/
class Choujiang extends \think\Controller
{
	
	public function index()
	{
		$num = input('jifen');
		$uid = input('uid');
		$type = input('type');
		$creditLogic = new CreditLogic();
        $creditLogic->setCredit($uid,$type,$num);
	}
}

 ?>