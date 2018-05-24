<?php
namespace app\admin\model;

class Homeworkrel extends \think\Model{
 
	public function addhomeworkrel()
	{
       		db('homework_rel')->insert([
			'homework_add_id'=>input('homework_add_id'),
			'tc_id'=>input('tc_id'),
			'tc_title'=>input('tc_title'),
			'now_time'=>input('now_time'),
			's_time'=>input('s_time'),
			'e_time'=>input('e_time'),
			'banji'=>input('banji')
			]);
    }

    public function updatehomeworkrel()
	{
       		db('homework_rel')->where('id='.input('id'))->update([
			'homework_add_id'=>input('homework_add_id'),
			'tc_id'=>input('tc_id'),
			'tc_title'=>input('tc_title'),
			'now_time'=>input('now_time'),
			's_time'=>input('s_time'),
			'e_time'=>input('e_time'),
			'banji'=>input('banji')
			]);

    }
    public function detailhomeworkrel()
	{
       		return db('homework_rel')->where('id='.input('id'))->find();

    }
    

}

?>