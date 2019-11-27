<?php
session_start();
isset($_SESSION['captchacode'])?:die("Captchacode has not been Created ! PLZ input the captchacode!");//验证session是否生成,防止在未生成时直接跳步骤以及重放攻击

$captchacode=$_POST['captchacode'];

if(isset($captchacode) && $captchacode!=null){//判断验证码输入正确与否
	//session_start();

	if($captchacode==$_SESSION['captchacode'])
	{
		echo 'Right captchacode!';
	}
	else
	{
		echo "Wrong captchacode</br>";
		echo 'Your captchacode:'.$captchacode."</br>";
		echo 'The right captchacode:'.$_SESSION['captchacode']."</br>";
	}
}
else
{
	echo "Null captchacode is not allowed!";
}

unset($_SESSION['captchacode']);//销毁相应session

echo '<p><a href="./login.html">Get back to login</a>';
 ?>