<?php
namespace app\admin\model;

class Homework extends \think\Model{
 
	public function add_timu()
	{
       		db('homework')->insert([
			'tc_id'=>input('tc_id'),
			'work_name'=>input('work_name'),
			'work_require'=>input('work_require'),
			'tc_content1'=>input('tc_content1'),
			'tc_content2'=>input('tc_content2'),
			'tc_danxuan'=>input('tc_danxuan'),
			'tc_duoxuan'=>input('tc_duoxuan'),
			'tc_panduan'=>input('tc_panduan'),
			'tc_tiankong'=>input('tc_tiankong')
			]);
    }

    public function update_timu()
	{
       		db('homework')->where('id='.input('id'))->update([
			'tc_id'=>input('tc_id'),
			'work_name'=>input('work_name'),
			'work_require'=>input('work_require'),
			'tc_content1'=>input('tc_content1'),
			'tc_content2'=>input('tc_content2'),
			'tc_danxuan'=>input('tc_danxuan'),
			'tc_duoxuan'=>input('tc_duoxuan'),
			'tc_panduan'=>input('tc_panduan'),
			'tc_tiankong'=>input('tc_tiankong')
			]);

    }
}

?>