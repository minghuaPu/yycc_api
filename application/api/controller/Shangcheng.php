<?php
namespace app\api\controller;
use \think\Session;
// use \think\captcha\Captcha;

class Shangcheng extends \think\Controller
{
    //shangcheng 分享项目列表
	public function index()
	{
		$info=db('shangcheng_shangpin')
            ->alias('sp')
            ->join('user u','sp.user_id = u.id')
            ->field('u.user_name,u.head_img,sp.shangpin_name,sp.shangpin_info,sp.id')
            ->select();
        return json($info);

    }


    public function add_save()
    {
        $name = null;
        if(isset($_FILES['file'])){
            $name = saveAndgetSrc(ROOT_PATH."public/static/api/img/",'file');
        }
        // print_r($name);
        db('shangcheng_shangpin')->insert([
            'user_id'=>input('info'),
            'shangpin_name'=>input('shangpin_name'),
            'website'=>input('website'),
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

    public function pj_info(){
        $id = input('id');
        $info = db('shangcheng_shangpin')
            ->where("id = $id")
            ->find();
            return json($info);
    }
	
}


?>