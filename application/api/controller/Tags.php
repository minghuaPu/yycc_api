<?php 
namespace app\api\controller;

/**
* 
*/
class Tags extends \think\Controller
{
	public function index()
	{
		# code...
		$vid = input('vid');
		$tags_list = db('tutor_details_tags')
					->alias('t')
					->field('t.*,u.user_name')
					->join('user u','u.id = t.uid')
					->where("t.vid = '$vid'")
					->select();
		return json($tags_list);
	}


	public function haszan()
	{
		$uid = input('uid');
		$tagsid = input('tagsid');
		$haszan = db('tutor_details_like')->where("tagid = '$tagsid' and uid = '$uid'")->find();
		return json($haszan);

	}
	public function zan()
	{
		$tagid = input('tagid');
		$uid = input('uid');
		$haszan = db('tutor_details_like')->where("tagid = '$tagid' and uid = '$uid'")->find();
		if(empty($haszan)){
			db('tutor_details_like')->insert([
				'tagid'=> $tagid,
				'uid'=> $uid
			]);
			return json([
				'status'=>1,
				'msg'=>'点赞'
			]);
		}else{
			return json([
				'status'=>2,
				'msg'=>'赞过了'
			]);
		}
		// return $tagid;
	}
	public function addzan()
	{
		$id = input('id');
		$zan = input('zan');
		db('tutor_details_tags')
		->where("id = '$id'")->
		update([
			'zan'=>$zan
		]);
	}
	public function tagdelete()
	{
		$id = input('id');
		db('tutor_details_tags')->where("id = '$id'")->delete();
		return json([
				'status'=>1,
				'msg'=>'删除成功'
			]);
	}
	
}
 ?>