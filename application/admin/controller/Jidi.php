<?php
namespace app\admin\controller;

/**
 * Created by PhpStorm.
 * User: graphic
 * Date: 2018/5/15
 * Time: 14:38
 */

Class Jidi extends \app\admin\controller\Auth {

    public function index(){	
        $jidi_data = db('user_jidi')->order('id desc')->paginate();

        $this->assign('jidi_data',$jidi_data);
        return $this->fetch();
        
    }

}