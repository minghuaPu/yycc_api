<?php
namespace app\api\controller;
use \think\captcha\Captcha;
use \JSSDK_PHP\jssdk; 
class Weixin extends \think\Controller
{
    public function index()
    {
        $jssdk_ob = new jssdk("wx0665fb4e5cb01453", "92260d5c2656a8ff98bb1fe906fcc6c7");
        $signPackage = $jssdk_ob->GetSignPackage();
        echo json_encode($signPackage);
    }
    public function pay()
    { session_start();
        $uid = input('id');
        $t = input('t');
        if ($uid>0) {
             $_SESSION['out_trade_no'] = '';
             $_SESSION['jidi'] = '';
        }
         $money = 1;//一元
         $body = '一元成才';
        if ($t=='jidi') {
             $_SESSION['jidi'] = true;

        } 
        if ($_SESSION['jidi']) {
            $money = 800;
            $body = '基地报名';
        }
         $params = [
            'body' => $body,
            'out_trade_no' => !empty($_SESSION['out_trade_no'])?$_SESSION['out_trade_no']: mt_rand().time(),
            'total_fee' => $money*100,
        ];
 
        if ($uid>0) {
            if ( $_SESSION['jidi']) {
                db('user_jidi')->where("uid=$uid")->update(['is_pay'=>1,'out_trade_no'=>$params['out_trade_no']]);
                $order_type = 2;
            }else{
                db('user')->where("id=$uid")->update(['is_pay'=>1,'out_trade_no'=>$params['out_trade_no']]);
                $order_type = 1;

            }
              db('order')->insert(
                [
                    'is_pay'=>1,
                    'uid'=>$uid,
                    'add_time'=>time(),
                    'order_type'=>  $order_type,
                    'out_trade_no'=>$params['out_trade_no']
                ]
                );
            $_SESSION['out_trade_no'] = $params['out_trade_no'];
            header('location:http://www.aoyuankj.com/fenda/public/api/weixin/pay/');exit();
        }
        $jsApiParameters = \wxpay\JsapiPay::getPayParams($params);

          
        // print_r($result);
        echo   $html =  "
      
    <script type='text/javascript'>

    
    //调用微信JS api 支付
    function jsApiCall()
    {
        WeixinJSBridge.invoke(
            'getBrandWCPayRequest',$jsApiParameters,
            function(res){ 

                 if(res.err_msg == \"get_brand_wcpay_request:ok\") {
                    location.href='http://yycc.aoyuankj.com/#/uhome'
                 }else{
                    alert(res.err_code+res.err_desc+res.err_msg);
                      location.href='http://yycc.aoyuankj.com/#/uhome'
                 }
            }
        );
    }



    function callpay()
    {
        if (typeof WeixinJSBridge == \"undefined\"){
            if( document.addEventListener ){
                document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
            }else if (document.attachEvent){
                document.attachEvent('WeixinJSBridgeReady', jsApiCall);
                document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
            }
        }else{
            jsApiCall();
        }
    }
    
    callpay();

    </script>
";

     //    include_once ROOT_PATH."/extend/WEIXIN_PAY/weixinPay.php"; // 微信扫码支付demo 中的文件         
     //     $code = '\\weixinPay'; // \alipay
     //    $weixin = new $code();
    	// echo $weixin->getJSAPI(
    	// 	[
    	// 		'order_sn'=>time().rand(1000,9999),
    	// 		'order_amount'=>1
    	// 	]
    	// );
    }
    public function pay_code()
    {
    	   $notify = new \wxpay\Notify();
        $notify->Handle();

    }
}
