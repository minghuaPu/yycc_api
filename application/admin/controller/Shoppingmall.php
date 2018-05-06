<?php
namespace app\admin\controller;
/**
 * 一元商城
 */
class Shoppingmall extends \app\admin\controller\Auth
{   //列表
    public function index()
    {

      $shoppingmall_list = db('shangcheng')->paginate(6);

      $this->assign("shoppingmall_list",$shoppingmall_list); 
        return $this->fetch();

    }

    //跳添加页面
    public function add()
    {
        return $this->fetch();
    }

    //删除
    public function delete()
    {

        db("shangcheng")->where("id=".input('id'))->delete();

        $this->success("删除成功","index");

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



    public function update()
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

        db('shangcheng')->update([
            "crea_name" => $crea_name,
            "crea_img1" => $img1_path,
            "crea_img2" => $img2_path,
        ]);
        $this->success("类别修改成功",url("index"));

    }

     public function edit()
     {

        $id = input("id");
        $shoppingmall_list = db('shangcheng')
            ->where("id='$id'")
            ->find();
        $this->assign("shoppingmall_list",$shoppingmall_list);
        return $this->fetch();

    }

    // 跳转产品信息
    public function details()
    {

        $cread_id = input('id');
        $chanpin_list = db("shangcheng_chanpin")
              ->where("cread_id = '$cread_id'")
              ->paginate();
        $this->assign('cread_id',$cread_id);//给变量$cread_id到details页面
        $this->assign('chanpin_list',$chanpin_list);
        return $this->fetch();

    }

    //跳转产品添加
    public function add_content()
    {

       $this->assign('cread_id',input('cread_id'));
        return $this->fetch();
    }

    public function edit_content()
    {

        $id = input("id");
        $chanpin_info = db('shangcheng_chanpin')
            ->where("id='$id'")
            ->find();
        $this->assign("chanpin_info",$chanpin_info);
        return $this->fetch();

    }

    //产品保存
    public function save_content()
    {

       $cread_id = input('cread_id');
       $chanpin_name = input('chanpin_name');
       $summary = input('summary');
       $chanpin_money = input('chanpin_money');
       $chanpin_info = input('chanpin_info');

        db('shangcheng_chanpin')->insert([
            "cread_id" => $cread_id,
            "chanpin_name" => $chanpin_name,
            "summary" => $summary,
            "chanpin_money" => $chanpin_money,
            "chanpin_info" => $chanpin_info,
        ]);
        $this->success("产品添加成功",url('Shoppingmall/details',['id'=>$cread_id]));

    }

    //产品更改
    public function update_content()
    {

        db('shangcheng_chanpin')->update([
            "cread_id" => input('cread_id'),
            "chanpin_name" => input('chanpin_name'),
            "summary" => input('summary'),
            "chanpin_money" => input('chanpin_money'),
            "chanpin_info" =>input('chanpin_info'),
        ]);
        $this->success("产品修改成功",url('Shoppingmall/details',['id'=>$cread_id]));

    }

    //删除
    public function delete_content()
    {

        db("shangcheng_chanpin")->where("id=".input('id'))->delete();

        $this->success("删除成功",url("Shoppingmall/details",["id"=>input('cread_id')]));

    }

}

 