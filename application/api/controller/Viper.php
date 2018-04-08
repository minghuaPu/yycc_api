<?php 
namespace app\api\controller;

/**
* 
*/
class Viper extends \think\Controller
{
	
	public function index()
	{
		$cateId= input('cateId');


		$vip_list = db("vip")->alias('v')
                    ->order('v.id DESC')
                    ->field('v.id,v.price,v.real_name,v.identity,v.status,v.introduce,v.listen_num,v.answer_num,v.head_img,vc.cate_name,v.is_real,v.become_time')
                    ->where("vip_cate_id = $cateId")
                    ->join('vip_cate vc','vc.id = v.vip_cate_id')
                    ->limit(4)
                    ->select();
        return json($vip_list);
	}
	public function getVipCate()
	{
		$vip_list=db('vip_cate') -> select();
		return json($vip_list);
	}
}

 ?>