<?php
namespace app\admin\controller;
/**
 * 手机端幻灯片
 */
class Mobilehdp extends \think\Controller
{
    public function index()
    {
       $list =  db('mobilehdp')->paginate();
       $slideCate =  getSlideCate();
       // render
       $this->assign("list",$list);
       $this->assign("slideCate",$slideCate);
        return $this->fetch();
    }

    public function add()
    {
        return $this->fetch();
    }

    public function save()
    {
        $cate = input('cate');

        $hdp_img = request()->file("slider_img");
        $pic_path =  '';
        if ($hdp_img) {
           // 如果有上传图片
           // 那么就保存
           $pic_object  = $hdp_img->move("uploads");
           $pic_path = "/uploads/".$pic_object->getSaveName();
        }
        db('mobilehdp')->insert([
            "cate" => $cate,
            "pic_path" => $pic_path,
        ]);
        $this->success("幻灯片添加成功",url("index"));
    }
    

}

 