<?php 
namespace app\api\controller;
use \think\Session;
/**
* 
*/
class News extends \think\Controller
{
	
	public function index()
	{
		# code...
		$list = db("headline")
				->alias('h')
				->field('h.id,h.title,h.summary,h.content,h.create_time,h.vip_id,h.heading_img')
				->order('create_time desc')
				->paginate(4);
		return json($list);

	}
}




 ?>