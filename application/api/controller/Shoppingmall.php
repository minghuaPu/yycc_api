<?php
namespace app\api\controller;

class Shoppingmall extends \think\Controller
{
	public function index()
	{
		
		$shangpin_crea = db("shangcheng")
			->alias('sc')
			->field('sc.id,sc.crea_name,sc.crea_img1,sc.crea_img2,p.id pid, p.cread_id, p.chanpin_name, p.summary, p.chanpin_info') 
			->join('chanpin p','sc.id =p.cread_id','left')
			->select();

			$new_a = [];
			foreach ($shangpin_crea as $key => $value) {
				$sc['id'] = $value['id'];
				$sc['crea_name'] = $value['crea_name'];
				$sc['crea_img1'] = $value['crea_img1'];
				$sc['crea_img1'] = $value['crea_img1'];
				$sc['crea_img2'] = $value['crea_img2'];

				$cp['pid'] = $value['pid'];
				$cp['summary'] = $value['summary'];
				$cp['chanpin_name'] = $value['chanpin_name'];
				if (empty($new_a[$value['id']])) {
					$new_a[$value['id']] = $sc;
				} 
				$new_a[$value['id']]['cp'][] = $cp;
				
			}
			
		return json($new_a);
	}

	public function read()
	{
		$cread_id =input("cread_id");	
		$chapin_info = db("chanpin")
			->where("cread_id='$cread_id'")
			->select();
		
		return json($chapin_info);
	}
	public function chanpin_read()
	{
		$chanpin_id =input("chanpin_id");	
		$chapin_info = db("chanpin")
			->where("id='$chanpin_id'")
			->find();
		
		return json($chapin_info);
	}
}


?>