<?php
use think\Request;
function is_active($cur_ctr,$str)
{
    if (strstr($cur_ctr,lcfirst(Request::instance()->controller()))){
        return $str;
    }

}


/**
 * 获取课程分类树
 * @param  array $cate_list 所有数组
 * @return array            分类的树状数组 
 */
function getCateTree($cate_list)
{
	$tree_list = [];
	$level_2_parent_id ; //标记二级分类的父类ID

	foreach ($cate_list as $key => $value) {
		if ($value['level'] == 1) {
			$tree_list[$value['id']] = $value;

		}else if ($value['level'] == 2) {
			$level_2_parent_id[$value['id']] = $value['parent_id'];

			$tree_list[$value['parent_id']]['child_menu'][$value['id']] = $value;

		}else if ($value['level'] == 3) {

			$tree_list[$level_2_parent_id[$value['parent_id']]]['child_menu'][$value['parent_id']]['child_menu'][] = $value;
		}
	}

	return $tree_list;
}	


function getSlideCate()
{
	$cate_a = [
			"shop"=>'商城首页',
		  "promote"=>'提升首页',
		  "job"=>'招聘首页',
		  "kka"=>'打卡首页',
		  "home"=>'总首页',
		];
	return  $cate_a;
}

function getFileType($str){
 
	// image/jpeg
	// image/png
	// video/mp4

	list($file_type,$file_ext) = explode('/', $str);

	return $file_ext;

}
?>