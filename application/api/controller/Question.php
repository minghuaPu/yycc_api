<?php 
namespace app\api\controller;

/**
* 
*/
class Question extends \think\Controller
{
	
	public function index()
	{
		// SELECT * FROM `fd_question` WHERE theme_id ='2' ORDER BY RAND() LIMIT 1
		$theme_id=input('id');
		$allqestion = db('question')
					 ->where("theme_id ='$theme_id'")
					 ->order("rand()")
					 ->limit(1)
					 ->select();
		return json($allqestion);
	}
	public function answer(){
		$question_id=input('question_id');
		$where="";
		if($question_id){
			$where="question_id = '$question_id'";
		}
		$answer = db('question_answer')
				->where($where)
				->select();
		return json($answer);
	}
}
 ?>