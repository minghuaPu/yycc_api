<?php
namespace app\admin\controller;

class Admingroup extends \app\admin\controller\Auth
{
    public function index()
    {
        $gruop_list=db('admin_group')->paginate(10);
        $this->assign("group_list",$gruop_list);  
        return $this->fetch();
    }
     public function add(){
     	 return $this->fetch();
     }
    public function save()
    {             
        db('admin_group')->insert([
            "group_name"=>input('group_name'),
            "acess"=>input('acess'),
            "super" => input('super')
        ]);
        $this->success('添加成功', 'index',"",1);
    }
        public function edit(){
        	$a_one=db('admin_group')->where('id='.input('id'))->find();            
            $bb=json_decode($a_one['acess'],true);
            //print_r( $bb);exit;
            if($bb!=null){       
               foreach($bb as $value){
                    $c[]=$value['c'];
                    $a[]=$value['a'];
                  }
             $this->assign('c',$c);
             $this->assign('a',$a);
             $this->assign('bb',$bb);   
              }else{$bb=null;$this->assign('bb',$bb);}

            //print_r($c);exit;   

            $this->assign('a_one',$a_one);
        	return $this->fetch();
        }
        public function update(){
            db('admin_group')->where('id='.input('id'))->update([
            "group_name"=>input('group_name'),
            "acess"=>input('acess'),
            "super" => input('super')
        ]);
        $this->success('修改成功', 'index',"",1);
        }
        public function del(){
             db('admin_group')->delete(input());
             $this->success('删除成功', 'index',"",1);
        }

}
