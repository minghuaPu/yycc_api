<?php
namespace app\admin\model;

class Homeworkresult extends \think\Model{
 
	public function addhomeworkresult()
	{
       		db('homework_result')->insert([
			'u_id'=>input('u_id'),
			'hw_id'=>input('hw_id'),
			'time'=>input('time'),
			'reply'=>input('reply'),
			'result'=>input('result'),
			'progress'=>input('progress'),
			'hao_time'=>input('hao_time'),
			'correct'=>input('correct'),
			's_homework'=>input('s_homework')
			]);
    }

    public function updatehomeworkresult()
	{
       		db('homework_result')->where('id='.input('id'))->update([
			'u_id'=>input('u_id'),
			'hw_id'=>input('hw_id'),
			'time'=>input('time'),
			'reply'=>input('reply'),
			'result'=>input('result'),
			'progress'=>input('progress'),
			'hao_time'=>input('hao_time'),
			'correct'=>input('correct'),
			's_homework'=>input('s_homework')
			]);

    }

    public function detailhomeworkresult()
	{
       		return db('homework_result')->where('id='.input('id'))->find();

    }

}

?>