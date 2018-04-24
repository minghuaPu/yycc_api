<?php
namespace app\api\logic;
use think\Model;
use think\Db;
/**
* 等级逻辑
*/
class GradeLogic extends Model
{
	//设置等级逻辑
	function setGrade($uid)
	{
		# code...
		// 0-40
		$credit = db('user_credit_log')
				  ->where("uid = '$uid'")
				  ->sum('credit');
				  // ->select();
		// print_r($credit);
		// exit();
		// $Grade =$this->getGrade($credit);
		// return $Grade;
//菜鸟：0----60积分；秀才：60---120分；英才：120---300分；优才：300--999分；通才：1000以上
		if( 0 < $credit && $credit < 60){
			$GradeVal ="菜鸟";
		}else if($credit < 120){
			$GradeVal ="有才";
		}else if($credit < 300){
			$GradeVal ="英才";
		}else if($credit < 600){
			$GradeVal ="优才";
		}else{
			$GradeVal ="全才";
		}
		// echo $GradeVal;
		// exit();
		$grade=['credit'=>$credit,'GradeVal'=>$GradeVal];
		return $grade;
	}


	// function getGrade($val=''){
	// 	$GradeVal = ['40'=>'菜鸟','80'=>'有才','120'=>'英才'];
	// 	if($val){
	// 		return $GradeVal[$val];
	// 	}else{
	// 		return $GradeVal;
	// 	}

	// }
}

?>