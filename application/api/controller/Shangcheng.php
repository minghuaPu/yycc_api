<?php
namespace app\api\controller;
use \think\Session;
// use \think\captcha\Captcha;

class Shangcheng extends \think\Controller
{
	public function index()
	{
		
		if(isset($_FILES['file'])){
			$name = saveAndgetSrc(ROOT_PATH."public/static/api/img/",'file');
		}
		// print_r($name);
        db('shangcheng_shangpin')->insert([
        	'user_id'=>input('info'),
        	'shangpin_name'=>input('shangpin_name'),
        	'money'=>input('money'),
        	'shangpin_info'=>input('shangpin_content'),
        	'shangpin_img'=>$name
        ]);
        return json([
        	'status'=>1,
        	'msg'=>'发布成功'
        ]);



		// if(isset($_FILES['file'])){
  //               $name = saveAndgetSrc(ROOT_PATH."public/static/api/img/",'file');
  //               $info['head_img'] = $name;
  //           }
    }
	
}


?>