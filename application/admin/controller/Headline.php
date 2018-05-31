<?php
namespace app\admin\controller;

class Headline extends \app\admin\controller\Auth
{
    public function index()
    {
        $real_name = input('real_name');
        $where = '';
             if($real_name){
                       $where = "real_name like '%$real_name%'";
             }
        $headline_list = db('headline')
                    ->alias('h')
                    ->join('vip v','v.id=h.vip_id')
                    ->field('v.real_name,h.*')
                    ->where($where)
                    ->order('id desc')
                    ->paginate(8,false,['query'=>['real_name'=>$real_name]]);

        $this->assign('real_name',$real_name);

    	$this->assign('headline_list',$headline_list);
        return $this->fetch();
        
    }

    public function delete()
    {
    	//删除headline
    	db('headline')->delete(input());

        //删除headline_read
        db('headline_read')->where("headline_id=".input('id'))->delete();
    	
        $this->success('删除成功','index');
    }

    public function add_edit_info()
    {
        if ($_POST) {
              $hdp_img = request()->file("heading_img");
                $heading_img =  '';
                if ($hdp_img) {
                   // 如果有上传图片
                   // 那么就保存
                   $pic_object  = $hdp_img->move("uploads");
                  // $pic_type = $pic_object->getExtension();//文件的后缀
                   $heading_img = "./uploads/".str_replace('\\', '/', $pic_object->getSaveName());
         
                }
            if ($_POST['id']>0) {
                // 修改
                if (empty($heading_img)) {
                    $heading_img = input('old_heading_img');
                }
                db('headline')->update([
                    "title"=>input('title'),
                    "heading_img"=>$heading_img,
                    "summary"=>input('summary'),
                    "content"=>input('content'),
                    "id"=>input('id')
                ]);
            }else{
              
                // 添加
                db("headline")->insert([
                    "title"=>input('title'),
                    "create_time"=>time(),
                    "content"=>input('content'),
                    "vip_id"=>1,
                    "heading_img"=>$heading_img,
                    "summary"=>input('summary')
                ]);
            }

            $this->success("操作成功",url("index"));
            
        }else{
            $id = input('id');
            $info = null;
            if ($id>0) {
               $info =  db('headline')->where("id=$id")->find();

            }
            $this->assign('info', $info); //赋值编辑时候的信息
            return $this->fetch();
        }
       
      
        
    }
}
