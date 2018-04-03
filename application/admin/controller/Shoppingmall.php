<?php
namespace app\admin\controller;
/**
 * 一元商城
 */
class Shoppingmall extends \think\Controller
{   //列表
    public function index()
    {
      $shoppingmall_list = db('shangcheng')->paginate();

      $this->assign("shoppingmall_list",$shoppingmall_list); 
        return $this->fetch();
    }

    public function add()
    {
        return $this->fetch();
    }
    public function save()
    {
       $crea_name = input('crea_name');

        $crea_img1 = request()->file("crea_img1");
        $crea_img2 = request()->file("crea_img2");
        $img1_path =  '';
        $img2_path =  '';
        if ($crea_img1) {
           // 如果有上传图片
           // 那么就保存
           $img1_object  = $crea_img1->move("uploads/xiaotupian");
           $img1_path = "/uploads/xiaotupian/".$img1_object->getSaveName();
        }
        if ($crea_img2) {
           // 如果有上传图片
           // 那么就保存
           $img2_object  = $crea_img2->move("uploads/xiaotupian");
           $img2_path = "/uploads/xiaotupian/".$img2_object->getSaveName();
        }

        db('shangcheng')->insert([
            "crea_name" => $crea_name,
            "crea_img1" => $img1_path,
            "crea_img2" => $img2_path,
        ]);
        $this->success("类别添加成功",url("index"));
    }

}

 