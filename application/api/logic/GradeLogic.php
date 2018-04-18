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
		if($credit <= 40){
			$GradeVal ="菜鸟";
		}else if($credit <= 80){
			$GradeVal ="有才";
		}else if($credit <= 120){
			$GradeVal ="英才";
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