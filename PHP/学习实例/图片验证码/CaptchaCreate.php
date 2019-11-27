<?php 
header("Content-type: image/jpeg");
session_start();
$img = imagecreatefromjpeg(dirname(__FILE__)."/yanzhengma.jpeg");//从已有图片加载

$captcha=rand(0,9999);//生成验证码
$_SESSION['captchacode']=$captcha;//写入session

$black = imagecolorallocate($img, 0, 0, 0);//设置黑色字体
imagestring($img, 5, 150, 50, "$captcha", $black);//绘制验证码

imagejpeg($img);//输出
imagedestroy($img);//销毁
 ?>