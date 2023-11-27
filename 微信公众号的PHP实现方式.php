<?php

$echostr = $_GET["echostr"];
if ($echostr != null)
{
    echo $echostr;
}

$openid = $_GET["openid"];
if ($openid != null)
{
    $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
    $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
    $fromUsername = $postObj->FromUserName;
    $toUsername = $postObj->ToUserName;
    $createTime = $postObj->CreateTime;
    $msgType = $postObj->MsgType;
    $content = trim($postObj->Content);
    $msgId = $postObj->MsgId;
    $time = time();
    
    if ($content == "0")
    {
        $textTpl = "<xml>
        <ToUserName><![CDATA[%s]]></ToUserName>
        <FromUserName><![CDATA[%s]]></FromUserName>
        <CreateTime>%s</CreateTime>
        <MsgType><![CDATA[%s]]></MsgType>
        <Content><![CDATA[%s]]></Content>
        </xml>"; 
        
        $url='https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx5b43daa27935b759&secret=d5e69fd2570a836e50552923e2db2bcc';
        $oCurl = curl_init();
        if(stripos($url,"https://")!==FALSE){
            curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($oCurl, CURLOPT_SSLVERSION, 1);
        }
        curl_setopt($oCurl, CURLOPT_URL, $url);
        curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1 );
        $sContent = curl_exec($oCurl);
        $aStatus = curl_getinfo($oCurl);
        curl_close($oCurl);
        $json = json_decode($sContent,true);
        $token = $json['access_token'];
        
        $file = fopen("token.txt","w");
        fwrite($file,$token);
        fclose($file);
        
        $resultStr = sprintf($textTpl,$fromUsername,$toUsername,$time,$msgType,$token);
        echo $resultStr;
    }
    elseif ($content == "1" || $content == "2" || $content == "3" || $content == "4")
    {
        $textTpl = "<xml>
        <ToUserName><![CDATA[%s]]></ToUserName>
        <FromUserName><![CDATA[%s]]></FromUserName>
        <CreateTime>%s</CreateTime>
        <MsgType><![CDATA[%s]]></MsgType>
        <Content><![CDATA[%s]]></Content>
        </xml>"; 
        
        $tokenfile = fopen("token.txt","r");
        $token = fread($tokenfile,filesize("token.txt"));
        fclose($tokenfile);
        
        $up = "https://api.weixin.qq.com/cgi-bin/media/upload?access_token=".$token."&type=image";
        $file = "/www/wwwroot/www.xiaomi.com/xiaomi/uoogou.jpg";
        if ($content == "2")
        {
            $file = "/www/wwwroot/www.xiaomi.com/xiaomi/gionee.jpg";
        }
        elseif($content == "3")
        {
            $file = "/www/wwwroot/www.xiaomi.com/xiaomi/uoogou_yolov3_spp.jpg";
        }
        elseif($content == "4")
        {
            $file = "/www/wwwroot/www.xiaomi.com/xiaomi/gionee_yolov5x.jpg";
        }
        $ch = curl_init();
        if (class_exists('\CURLFile')) {
            curl_setopt($ch, CURLOPT_SAFE_UPLOAD, true);
            $file = array('media' => new \CURLFile($file));//>=5.5
        } else {
            if (defined('CURLOPT_SAFE_UPLOAD')) {
                curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
            }
            $file = array('media' => '@' . realpath($file));//<=5.5
        }
        curl_setopt($ch, CURLOPT_URL, $up);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $file);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "TEST");
        $result = curl_exec($ch);
        curl_close($ch);
        $image = json_decode($result, true);
        $mediaid = $image["media_id"];
        
        $file1 = fopen("mediaid.txt","w");
        fwrite($file1,$mediaid);
        fclose($file1);
        
        $resultStr = sprintf($textTpl,$fromUsername,$toUsername,$time,$msgType,$mediaid);
        echo $resultStr;
    }
    
    elseif ($content == "9")
    {
        $textTpl = "<xml>
        <ToUserName><![CDATA[%s]]></ToUserName>
        <FromUserName><![CDATA[%s]]></FromUserName>
        <CreateTime>%s</CreateTime>
        <MsgType><![CDATA[image]]></MsgType>
          <Image>
            <MediaId><![CDATA[%s]]></MediaId>
          </Image>
        </xml>"; 
        
        $file = fopen("mediaid.txt","r");
        $mediaid = fread($file,filesize("mediaid.txt"));
        fclose($file);
        
        $resultStr = sprintf($textTpl,$fromUsername,$toUsername,$time,$mediaid);
        echo $resultStr;
    }
    elseif ($content == "T")
    {
        $textTpl = "<xml>
        <ToUserName><![CDATA[%s]]></ToUserName>
        <FromUserName><![CDATA[%s]]></FromUserName>
        <CreateTime>%s</CreateTime>
        <MsgType><![CDATA[%s]]></MsgType>
        <Content><![CDATA[%s]]></Content>
        </xml>"; 
        
        $contentStr = "uoogou : ".date("H:i:s",filemtime("/www/wwwroot/www.xiaomi.com/xiaomi/uoogou.jpg"))." | gionee : ".date("H:i:s",filemtime("/www/wwwroot/www.xiaomi.com/xiaomi/gionee.jpg"));
        $resultStr = sprintf($textTpl,$fromUsername,$toUsername,$time,$msgType,$contentStr);
        echo $resultStr;
    }
    else 
    {
        $textTpl = "<xml>
        <ToUserName><![CDATA[%s]]></ToUserName>
        <FromUserName><![CDATA[%s]]></FromUserName>
        <CreateTime>%s</CreateTime>
        <MsgType><![CDATA[%s]]></MsgType>
        <Content><![CDATA[%s]]></Content>
        </xml>"; 
        
        $contentStr = $content."?";
        $resultStr = sprintf($textTpl,$fromUsername,$toUsername,$time,$msgType,$contentStr);
        echo $resultStr;
    }
}

?>