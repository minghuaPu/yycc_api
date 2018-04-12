<?php
namespace app\api\controller;
use \think\captcha\Captcha;
use \JSSDK_PHP\jssdk;

class Weixin extends \think\Controller
{
    public function index()
    {
        $jssdk_ob = new jssdk("wx0665fb4e5cb01453", "866858930e168acad16efa4cc123db65");
        $signPackage = $jssdk_ob->GetSignPackage();
        echo json_encode($signPackage);
    }
}
