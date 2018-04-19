<?php 
namespace app\api\controller;
use app\api\logic\CreditLogic;
/**
* 
*/
class Daka extends \think\Controller
{
	//保存打卡信息
	public function index()
	{
		// $question_id=input('question_id');

		$uid=input('uid');
		$_input=input('input');
		$textarea3=input('textarea3');
		$theme_id=input('theme_id');
		$_user=db('user')->where("id = $uid")->find();
		$income_money = $_user['total_income'] +0.01;
		$profit_money = $_user['total_profit']+0.01;
		$info =db('daka')
				->where("dakaTime = 'unix_timestamp(now())'")
				->find();
		if(empty($info)){
			 db('daka')->insert([
					"uid"=>$uid,
					"input"=>$_input,
					"textarea3"=>$textarea3,
					"dakaTime"=>time(),
					"theme_id"=>$theme_id
					// "question_id"=>$question_id
				]);
			 
			 db('user')->where("id = '$uid'")->update([
			 	
			 	"total_income"=>$income_money,
			 	"total_profit"=>$profit_money
			 ]);


			$todaylogic = db('user_credit_log')->where("uid ='$uid' and do_type = 'daka'")->order('add_time desc')->find();
            if(empty($todaylogic)){
                $creditLogic = new CreditLogic();
                $creditLogic->setCredit($uid,$type='daka');
            }else{
                if(date('Y-m-d',$todaylogic['add_time']) != date('Y-m-d',time())) {
                    $creditLogic = new CreditLogic();
                    $creditLogic->setCredit($uid,$type='daka');
                }
                
            }
			return json([
				"status"=>1,
				"msg"=>"打卡成功"
			]);
		}else{
			return json([
				"status"=>-1,
				"msg"=>"打卡失败"
			]);
		}
		
	}


	//个人所有打卡记录  我的打卡(rili)
	public function hasData()
	{
		# code...
		$uid=input('uid');
		$hasdata=db('daka')
				->where("uid =$uid")
				->order("id desc")
				->select();
		return json($hasdata);
	}



	//5条该主题的记录
	public function allData()
	{

		$theme_id= input('theme_id');
		$where="";
		$p= (input('p')-1)*5;
		if($theme_id){
			$where=" theme_id = $theme_id";
		}
		$allData=db('daka')
				 ->alias('d')
				 ->where($where)
				 ->field('d.id,us.user_name,d.dakaTime,d.textarea3,us.head_img')
				 ->join('user us','us.id = d.uid')
				 ->order("d.id desc")
				 ->limit("$p,5")
				 ->select();

				 // print_r($allData);

		return json($allData);
	}



	//该主题排行榜     缺主题id
	public function toplist()
	{

		 /****************tp5中使用原生语句*******************/
        //query 用于查询 其他的用execute

		 
		// $sql = 'select *,(@rowNum :=@rowNum+1) as rowNo FROM `fd_daka`,(select (@rowNum :=0)) b ORDER BY fd_daka.dakaTime desc';
		// $dbnum = db('daka')->query($sql);
		// print_r($dbnum);
		// exit();
		$theme_id = input('theme_id');
		$allid=db('daka')
				->where("theme_id = $theme_id ")
				->group("uid")
				->count("uid");
		$toplist =db('daka')
				  ->alias('d')
				  ->field('d.uid,count(d.id) c,u.user_name uname,u.head_img')
				  ->join('user u','u.id = d.uid','left')
				  ->where("d.theme_id = '$theme_id'")
				  ->group("d.uid")
				  ->order('c desc')
				  ->select();
		// print_r(json([
		// 	"allid"=>$allid,
		// 	"toplist"=>$toplist]));
		$theme =db('daka_theme')->where("id = '$theme_id'")->field('theme')->find();
		return json([
			"allid"=>$allid,
			"toplist"=>$toplist,
			"theme"=>$theme
		]);
		// SELECT uid ,count(id)FROM `fd_daka` group by uid;
	}


	//该用户打卡有多少条记录
	public function has()
	{
		$uid=input('uid');
		$theme_id = input('theme_id');
		// $_count=db('daka')
		// 		->where("uid ='$uid'")
		// 		->count();
		$daka_info= db('daka')
					->alias('d')
					->field('u.user_name uname,u.head_img,count(d.uid) num')
					->join('user u','u.id = d.uid','left')
					->where("d.uid ='$uid' and d.theme_id ='$theme_id'")
					->order('num desc')

					->select();
		return json($daka_info);
	}


	public function themelist()
	{
		$id=input('id');
		// SELECT  uid FROM `fd_daka`  where theme_id =1 group by uid;
		$themelist=db("daka")
					->field('uid')
					->where("theme_id = '$id'")
					->group('uid')
					->count();
		return json($themelist);
	}
}

 ?>