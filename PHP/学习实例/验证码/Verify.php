<?php 
if(isset($_POST['captchacode']) && $_POST['captchacode']!=null){//判断验证码输入正确与否
	session_start();

	if($_POST['captchacode']==$_SESSION['captchacode'])
	{
		echo 'Right captchacode!';
	}
	else
	{
		echo "Wrong captchacode</br>";
		echo 'Your captchacode:'.$_POST['captchacode']."</br>";
		echo 'The right captchacode:'.$_SESSION['captchacode']."</br>";
	}
}
else
{
	echo "Null captchacode is not allowed!";
}

echo '<p><a href="./login.html">Get back to login</a>';
 ?>