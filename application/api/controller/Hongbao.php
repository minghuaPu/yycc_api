<?php
namespace app\api\controller;

class Hongbao extends \think\Controller
{
	public function index()
	{
		$uid = input('uid');
		$people_day = input('people_day');
		$has_data= db("hongbao")->where("uid = $uid and FROM_UNIXTIME(a_time,'%Y-%m-%d') = CURDATE()") ->find();
		if(empty($has_data)){
			db("hongbao") -> insert([
				"uid"=>$uid,
				"a_time"=>time(),
				"h_total"=>$people_day,
				"h_money" =>rand(0,9)
			]);
			return json([
				"status"=>1,
				"msg"=>"领取成功"
			]);
		}else{
			return json([
				"status"=>-1,
				"msg"=>"领取过了"
			]);
		}

		


	}
	public function hasRecord()
	{

		//模糊查询    where("uid = $uid and h_money like '2%'")
		//排序    order()
		//find()   只有一条数据  select() 多条数据
		//sql  CURDATE()当前日期  FROM_UNIXTIME() 时间戳转为正常时间
		$uid=input('uid');
		if ($uid<=0) {
			return 0;
		}
		$info = db("hongbao")
				->where("uid = $uid and FROM_UNIXTIME(a_time,'%Y-%m-%d') = CURDATE()")
				->find();

		 $h_total = db("hongbao") ->where("uid = $uid")->order("id desc")-> find();
		 if($h_total) {
		 	$h_total_o=$h_total['h_total'];
		 }else{
		 	$h_total_o=0;
		 }
		 if($h_total_o < 7){
		 	if($info){
				return json([

					"status"=>-1,
					"msg"=>"领取过了"
				]);
			}else{
				return json([
					"h_total"=>$h_total_o,
					"status"=>1,
					"msg"=>"待领取"
				]);
			}
		 }
		
		// print_r($info);
		// return $people_day;

	}
}


?>