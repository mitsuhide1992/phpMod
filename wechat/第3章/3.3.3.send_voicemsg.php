<?php
/**
  * wechat php test
  */

//define your token
define("TOKEN", "api");
$wechatObj = new wechatCallbackapiTest();
$wechatObj->valid();

class wechatCallbackapiTest
{
  	public function valid(){     
        if(isset($_GET['mydebug'])){ //处理测试用数据 
          	$result = isset($_GET['t'])?$_GET['mydebug']:'';
            echo $result;
		}else{  //处理 微信客户端提交的数据值
          	if($this->checkSignature()){
               $echoStr = $_GET["echostr"];
               echo $echoStr;
               $this->responseMsg(); 
			   exit;
			}
		}
    }
 	
    public function responseMsg()
    {
	  $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];//获取微信服务器提交过来的数据
      $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);//将获取的处理处理
      
      $fromUsername = $postObj->FromUserName;  //用户的openid ，不是唯一的，相同的用户关注不同的公众号后，获取的openid是不同的
      $toUsername = $postObj->ToUserName; //发送方微信号（来自用户 故为openid）
   
      $MsgType = $postObj->MsgType; //消息的类型为"voice"，微信会根据用户发送不同消息自动识别返回给BAE不同值(text, image, event, voice, video,location)
      $MediaId = $postObj->MediaId; //语音消息id;
      
      
      $time = time(); //回复图片消息的时间戳    
      //回复文本消息
	  $textTpl = "<xml>
			<ToUserName><![CDATA[%s]]></ToUserName>
  			<FromUserName><![CDATA[%s]]></FromUserName>
			<CreateTime>%s</CreateTime>
			<MsgType><![CDATA[%s]]></MsgType>
			<Content><![CDATA[%s]]></Content>
		</xml>";  
      $contentStr = "MediaId:".$MediaId; //回复给微信用户的内容
      $msgType = "text"; //回复文本的类型
	  $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);//经过sprintf处理过后，*/
      
      
         
		//语音消息能够发送与接受
      /*$voiceTpl = "<xml>
						<ToUserName><![CDATA[%s]]></ToUserName>
						<FromUserName><![CDATA[%s]]></FromUserName>
						<CreateTime>%s</CreateTime>
						<MsgType><![CDATA[%s]]></MsgType>
						<Voice><MediaId><![CDATA[%s]]></MediaId></Voice>
		</xml>";
         $msgType = "voice"; //语音消息
		 $resultStr = sprintf($voiceTpl, $fromUsername, $toUsername, $time, $msgType, $MediaId);//经过sprintf处理过后，*/
        echo $resultStr;
	   exit;
    }
		
	private function checkSignature()
	{
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];	
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
		sort($tmpArr);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
}

?>