<?php
namespace app\admin\controller;

class Dakatheme extends \app\admin\controller\Auth
{
    public function index()
    {   
        $dakaTheme_list = db('daka_theme')->paginate(8);
        // print_r($dakaTheme_list['starTime']);
        // foreach ($dakaTheme_list as $key => $value) {
        //     # code...
            // $value['starTime']=date('Y-m-d h:s:i',$dakaTheme_list[$key]['starTime']);
        //     $value['endTime']=date('Y-m-d h:s:i',$dakaTheme_list[$key]['endTime']);
        //     // print_r($dakaTheme_list[$key]['starTime']= $value['starTime']);
        //     // echo $value['starTime'];
        // }
        // exit();

        $this->assign('dakaTheme_list', $dakaTheme_list);
        return $this->fetch();
        
    }

    public function edit()
    {
        $dakaTheme= db('daka_theme')->find(input('id'));
        $this->assign('dakaTheme', $dakaTheme);
        return $this->fetch();
    }
    public function add()
    {
        return $this->fetch();
    }
    // public function delete()
    // {
    //    db("vip")->delete(input());
    //    $this->success('删除成功','index');
    // }

    public function update()
    {
        if(!empty($_FILES['imgpath']['tmp_name'])){
            $imgpath = saveAndgetSrc(ROOT_PATH."public/static/api/img/",'imgpath');
            $imgpath = '/static/api/img/'.$imgpath;
        }else{
            $imgpath = input('img');
        }

       db("daka_theme")->where("id =".input('id'))->update([
        "theme"=>input('theme'),
        "imgpath"=>$imgpath,
        "xiangqin"=>input('xiangqin'),
        "starTime" => strtotime(input('starTime')),
        "endTime" => strtotime(input('endTime'))
       ]);
       $this->success('更新成功','index');
    }    

    public function save()
    {
        // $starTime = strtotime(input('starTime'));

        db('daka_theme')->insert([
            "theme"=>input('theme'),
            "xiangqin"=>input('xiangqin'),
            "starTime" => strtotime(input('starTime')),
            "endTime" => strtotime(input('endTime'))
        ]);
        $this->success('添加成功', 'index');
    }
}
