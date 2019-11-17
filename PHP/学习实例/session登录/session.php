<?php 
session_start();
if(empty($_POST))
{
	echo "Can't login";
	//header("Location:session.html");
	echo "<a href='login.html'>get back</a>";
}else{
	$name=$_POST["name"];
	$pwd=$_POST["pwd"];
	if($name == "admin" && $pwd == "admin")
	{
		$_SESSION["name"] = "admin";
		header("Location:session2.php");
	}
	else{
		echo "Can't login<br/>";
		echo "<a href='login.html'>get back</a>";
	}
}

 ?>