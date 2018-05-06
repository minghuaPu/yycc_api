<?php
namespace app\admin\controller;

class Index extends \app\admin\controller\Auth
{
    public function index()
    {
       return $this->fetch();
    }
}
