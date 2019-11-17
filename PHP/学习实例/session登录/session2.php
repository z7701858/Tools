<?php 
session_start();
if($_SESSION["name"]=="admin"){
	echo "login success";
}else{
	echo "no login<br/>";
	echo "<a href='./login.html'>get back</a>";
}

 ?>