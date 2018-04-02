<?php 
namespace app\admin\controller;

class Smalltalk extends \think\Controller
{
	
	// 列表
	 public function index()
    {
    	// 查询列表
    	$smalltalk_list = model('smalltalk')->getList();

    	$this->assign("smalltalk_list",$smalltalk_list); 
        return $this->fetch();
    }

	// 详情
    public function details()
    {

        $stc_list = model('smalltalk')->getDetails();
        
        $this->assign('stc_list',$stc_list);
        $this->assign('id',input('id'));
        return $this->fetch();
    }

    // 删除 
    public function delete()
    {

        db("smalltalk")->where("id=".input('id'))->delete();

        $this->success("删除成功","index");

    }

    public function add()
    {

        $vip = db('vip')->select();
        $this->assign('vip',$vip);

        $cate_menu = db('smalltalk_cate')->select();
        $this->assign('cate_menu',$cate_menu);

        return $this->fetch();
         
    }
    public function edit_content()
    {

        $id = input('id');

        $smalltalk_content = db('smalltalk_content')->find($id);
        $this->assign('smalltalk_content',$smalltalk_content);
        $this->assign('id',$id);

        return $this->fetch();
         
    }

    public function save()
    {
          $hdp_img = request()->file("smalltalk_img");
        $smalltalk_img =  '';
        if ($hdp_img) {
           // 如果有上传图片
           // 那么就保存
           $pic_object  = $hdp_img->move("uploads");
          // $pic_type = $pic_object->getExtension();//文件的后缀
           $smalltalk_img = "./uploads/".str_replace('\\', '/', $pic_object->getSaveName());

           $image = \think\Image::open(ROOT_PATH.'/public'.$smalltalk_img);

        // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png
        $image->thumb(220,130,\think\Image::THUMB_CENTER)->save($smalltalk_img."220_130.jpg");
        $image->thumb(140,140,\think\Image::THUMB_CENTER)->save($smalltalk_img."140_140.jpg");
           // 指定尺寸的，不需要入口的
           // 2312323.jpg
           // 2312323.jpg220*130.jpg
        }


        db("smalltalk")->insert([
            "title"=>input("title"),
            "join_num"=>input("join_num"),
            "vip_id"=>input("vip_id"),
            "summary"=>input("summary"),
            "create_time"=>time(),
            "smalltalk_cate_id"=>input("smalltalk_cate_id"),
            "smalltalk_img"=>$smalltalk_img,
        ]);

        $this->success("添加成功",url('index'));
    }

    public function add_content()
    {
        $this->assign('id',input('smalltalk_id'));
        return $this->fetch();
         
    }

    public function save_content()
    {
         db("smalltalk_content")->insert([
            "title"=>input("title"),
            "smalltalk_id"=>input("smalltalk_id"),
            "ke_content"=>input("ke_content"),
            
        ]);
        $this->success("添加成功",url('smalltalk/details',['id'=>input("smalltalk_id")]));
    }
    public function update_content()
    {
         db("smalltalk_content")->update([
            "title"=>input("title"),
            "ke_content"=>input("ke_content"),
            "id"=>input("smalltalk_id"),
            
        ]);
        $this->success("修改成功",url('smalltalk/details',['id'=>input("smalltalk_id")]));
    }

    // 显示目录对应的章节
    public function talk_audio()
    {
        $id = input('id');
        $this->assign('id', $id);

        // 这个目录有哪些小节
        // 默认：20
        $audio_list = db('smalltalk_audio')->where("smalltalk_content_id=$id")->paginate();

        $this->assign('audio_list', $audio_list);
        
        return $this->fetch();
    }

    // 添加/修改目录对应的章节
    public function add_edit_audio()
    {
        if ($_POST) {
            
            if ($_POST['xiaojie_id']>0) {
                // 修改
                db('smalltalk_audio')->update([
                    "audio_name"=>input('audio_name'),
                    "smalltalk_content_id"=>input('mulu_id'),
                    "id"=>input('xiaojie_id')
                ]);
            }else{
                // 添加
                db("smalltalk_audio")->insert([
                    "audio_name"=>input('audio_name'),
                    "smalltalk_content_id"=>input('mulu_id')
                ]);
            }

            $this->success("操作成功",url("talk_audio",["id"=>input('mulu_id')]));
            
        }else{
            $id = input('id');
            $info = [];
            if ($id>0) {
               $info =  db('smalltalk_audio')->where("id=$id")->find();

            }
            $this->assign('id', $id); //添加行为
            $this->assign('info', $info); //赋值编辑时候的信息
            $this->assign('mulu_id', input('mulu_id'));
            return $this->fetch();
        }
       
      
        
    }

}

?>