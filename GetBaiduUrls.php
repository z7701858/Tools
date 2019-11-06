<?php 
/*
?wd=
*/

//$wd=$_GET['wd'];
$wd='a';


$url ="https://www.baidu.com/s?wd=$wd"; 
echo getHttps($url);

function getHttps($url){ 
		$header = array (
        "Host:www.baidu.com",
        //"Content-Type:application/x-www-form-urlencoded",//post
        "Connection: keep-alive",
        'Referer:http://www.baidu.com',
        'User-Agent: Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; BIDUBrowser 2.6)'
		);   
   		//初始化
        $ch = curl_init();
        //设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header );
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        
        $output = curl_exec($ch); //执行并获取HTML文档内容
        $str = htmlspecialchars($output);//转换为源代码形式
        //释放curl句柄
        curl_close($ch);
    //return  $str ;
    return  $output;
	}
	
?>