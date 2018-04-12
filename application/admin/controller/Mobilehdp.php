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
    
    public function edit()
    {
       $info = db('mobilehdp')->where("id=".input('id'))->find();

       $this->assign("info",$info);

        return $this->fetch();
    }

    public function update()
    {
        $cate = input('cate');

        $hdp_img = request()->file("slider_img");
        $pic_path =  input('slider_img_old');
        if ($hdp_img) {
           // 如果有上传图片
           // 那么就保存
           $pic_object  = $hdp_img->move("uploads");
           $pic_path = "/uploads/".$pic_object->getSaveName();
        }
        db('mobilehdp')->update([
            "id" => input('id'),
            "cate" => $cate,
            "pic_path" => $pic_path,
        ]);
        $this->success("幻灯片更新成功",url("index"));
    }

    public function delete()
    {
      db('mobilehdp')->where("id=".input('id'))->delete();
        $this->success("删除成功",url("index"));
       
    }
}

 