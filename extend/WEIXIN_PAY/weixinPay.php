<?php
 
/**
 * 支付 逻辑定义
 * Class 
 * @package Home\Payment
 */

class weixinPay 
{    
    public $tableName = 'plugin'; // 插件表        
    public $alipay_config = array();// 支付宝支付配置参数
    
    /**
     * 析构流函数
     */
    public function  __construct() {   
                
        require_once("lib/WxPay.Api.php"); // 微信扫码支付demo 中的文件         
        require_once("example/WxPay.NativePay.php");
        require_once("example/WxPay.JsApiPay.php");

        
        // 配置反序列化        
        WxPayConfig::$appid = 'wx0665fb4e5cb01453'; // * APPID：绑定支付的APPID（必须配置，开户邮件中可查看）
        WxPayConfig::$mchid = '1502049251'; // * MCHID：商户号（必须配置，开户邮件中可查看）
        WxPayConfig::$smchid =  ''; // * SMCHID：服务商商户号（必须配置，开户邮件中可查看）
        WxPayConfig::$key = 'eGjIxh9JjWMzubcXLoyAXomI1wB1redy'; // KEY：商户支付密钥，参考开户邮件设置（必须配置，登录商户平台自行设置）
        WxPayConfig::$appsecret = '92260d5c2656a8ff98bb1fe906fcc6c7'; // 公众帐号secert（仅JSAPI支付的时候需要配置)，                                      
    }    
    /**
     * 生成支付代码
     * @param   array   $order      订单信息
     * @param   array   $config_value    支付方式信息
     */
    function get_code($order, $config_value)
    {       
            $notify_url = 'https://www.menghuotgt.com/index.php/Mobile/Payment/notifyUrl/pay_code/weixin'; // 接收微信支付异步通知回调地址，通知url必须为直接可访问的url，不能携带参数。
            //$notify_url = C('site_url').U('Home/Payment/notifyUrl',array('pay_code'=>'weixin')); // 接收微信支付异步通知回调地址，通知url必须为直接可访问的url，不能携带参数。
            //$notify_url = C('site_url')."/index.php?m=Home&c=Payment&a=notifyUrl&pay_code=weixin";
             
            $body = $config_value['body'];
            !$body && $body = "商品" ;
             
            $input = new WxPayUnifiedOrder();
            $input->SetBody($body); // 商品描述
            $input->SetAttach("weixin"); // 附加数据，在查询API和支付通知中原样返回，该字段主要用于商户携带订单的自定义数据
            $input->SetOut_trade_no($order['order_sn'].time()); // 商户系统内部的订单号,32个字符内、可包含字母, 其他说明见商户订单号
            $input->SetTotal_fee($order['order_amount']*100); // 订单总金额，单位为分，详见支付金额
            $input->SetNotify_url($notify_url); // 接收微信支付异步通知回调地址，通知url必须为直接可访问的url，不能携带参数。
            $input->SetTrade_type("NATIVE"); // 交易类型   取值如下：JSAPI，NATIVE，APP，详细说明见参数规定    NATIVE--原生扫码支付
            $input->SetProduct_id("123456789"); // 商品ID trade_type=NATIVE，此参数必传。此id为二维码中包含的商品ID，商户自行定义。
            $notify = new NativePay();
            $result = $notify->GetPayUrl($input); // 获取生成二维码的地址
            $url2 = $result["code_url"];
            if(empty($url2))
                return  '没有获取到支付地址, 请检查支付配置'.  print_r($result,true);
            return '<img alt="模式二扫码支付" src="/index.php?m=Home&c=Index&a=qr_code&data='.urlencode($url2).'" style="width:110px;height:110px;"/>';        
    }    
    /**
     * 服务器点对点响应操作给支付接口方调用
     * 
     */
    function response()
    {                        
        require_once("example/notify.php");  
        $notify = new PayNotifyCallBack();
        $notify->Handle(false);       
    }
    
    /**
     * 页面跳转响应操作给支付接口方调用
     */
    function respond2()
    {
        // 微信扫码支付这里没有页面返回
    }

    function getJSAPI($order){
    

        $isweix = 0;
         // if(strpos($_SERVER['HTTP_USER_AGENT'], 'mini') == false){
              
         //     $openId = $_SESSION['openid'];
            
         //   }else{ 

          
           // }
        //①、获取用户openid
        $tools = new JsApiPay();
        $openId = $tools->GetOpenid();
     
        //②、统一下单
        $input = new WxPayUnifiedOrder();
        $input->SetBody("支付订单：".$order['order_sn']);
        $input->SetAttach("weixin");
        $input->SetOut_trade_no($order['order_sn']);
        $input->SetTotal_fee($order['order_amount']*100);
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag("wx_pay");
        $input->SetNotify_url('https://www.aoyuankj.com/fenda/public/api/weixin/pay_code');
        $input->SetTrade_type("JSAPI");
        $input->SetOpenid($openId);
        $order2 = WxPayApi::unifiedOrder($input);
       
      
        $jsApiParameters = $tools->GetJsApiParameters($order2);
       $ycs = json_decode($jsApiParameters,true);

      // print_r($ycs);
      $params =  '?appid='.WxPayConfig::$appid.'&timestamp='.$ycs['timeStamp'].'&nonceStr='.$ycs['nonceStr']. 
             '&'.$ycs['pkg'].'&signType='.$ycs['signType']. 
             '&paySign='.$ycs['paySign'].'&orderId='.$order['order_sn'].time().'&pType=0&prepay_id='.str_replace('prepay_id', '&prepay_id', $ycs['package']);

             // echo $_SERVER['HTTP_USER_AGENT'];
        $html =  "
      
	<script type='text/javascript'>

    
	//调用微信JS api 支付
	function jsApiCall()
	{
		WeixinJSBridge.invoke(
			'getBrandWCPayRequest',$jsApiParameters,
			function(res){ 

				 if(res.err_msg == \"get_brand_wcpay_request:ok\") {
				    // location.href='$go_url';
				 }else{
				 	alert(res.err_code+res.err_desc+res.err_msg);
				    // location.href='$back_url';
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
    if( $isweix>0){
         wx.miniProgram.navigateTo({
            url: '/pages/login/login'+'$params'
        })
    }else{
    callpay();

    }
	</script>
";
        
    return $html;

    }
    // 微信提现批量转账
    function transfer($data){
    header("Content-type: text/html; charset=utf-8");
exit("请联系官网客服购买高级版支持此功能");
    }
    
    /**
     * 将一个数组转换为 XML 结构的字符串
     * @param array $arr 要转换的数组
     * @param int $level 节点层级, 1 为 Root.
     * @return string XML 结构的字符串
     */
    function array2xml($arr, $level = 1) {
    	$s = $level == 1 ? "<xml>" : '';
    	foreach($arr as $tagname => $value) {
    		if (is_numeric($tagname)) {
    			$tagname = $value['TagName'];
    			unset($value['TagName']);
    		}
    		if(!is_array($value)) {
    			$s .= "<{$tagname}>".(!is_numeric($value) ? '<![CDATA[' : '').$value.(!is_numeric($value) ? ']]>' : '')."</{$tagname}>";
    		} else {
    			$s .= "<{$tagname}>" . $this->array2xml($value, $level + 1)."</{$tagname}>";
    		}
    	}
    	$s = preg_replace("/([\x01-\x08\x0b-\x0c\x0e-\x1f])+/", ' ', $s);
    	return $level == 1 ? $s."</xml>" : $s;
    }
    
    function http_post($url, $param, $wxchat) {
    	$oCurl = curl_init();
    	if (stripos($url, "https://") !== FALSE) {
    		curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE);
    		curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, FALSE);
    	}
    	if (is_string($param)) {
    		$strPOST = $param;
    	} else {
    		$aPOST = array();
    		foreach ($param as $key => $val) {
    			$aPOST[] = $key . "=" . urlencode($val);
    		}
    		$strPOST = join("&", $aPOST);
    	}
    	curl_setopt($oCurl, CURLOPT_URL, $url);
    	curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1);
    	curl_setopt($oCurl, CURLOPT_POST, true);
    	curl_setopt($oCurl, CURLOPT_POSTFIELDS, $strPOST);
    	if($wxchat){
    		curl_setopt($oCurl,CURLOPT_SSLCERT,dirname(THINK_PATH).$wxchat['api_cert']);
    		curl_setopt($oCurl,CURLOPT_SSLKEY,dirname(THINK_PATH).$wxchat['api_key']);
    		curl_setopt($oCurl,CURLOPT_CAINFO,dirname(THINK_PATH).$wxchat['api_ca']);
    	}
    	$sContent = curl_exec($oCurl);
    	$aStatus = curl_getinfo($oCurl);
    	curl_close($oCurl);
    	if (intval($aStatus["http_code"]) == 200) {
    		return $sContent;
    	} else {
    		return false;
    	}
    }
    
     // 微信订单退款原路退回
    public function payment_refund($data){
        WxPayConfig::$appid = 'wxb2ec49658f641e8d';
        WxPayConfig::$appsecret = '19cfa460296d1d65886b59f0e106d946';
      
         $input = new WxPayRefund();
         $input->SetOut_trade_no($data['out_trade_no']);
         $input->SetOut_refund_no($data['out_trade_no']);
         $input->SetTotal_fee($data['total_fee']*100);
         $input->SetRefund_fee($data['refund_fee']*100);
         $input->SetOp_user_id($data['user_id']);

        return WxPayApi::refund($input);
        
    }

}