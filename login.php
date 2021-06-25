<?php

session_start();

include "connect.php";

if(isset($_POST["submit"]))
{
	$userid=$_POST["username"];
	$upass=$_POST["password"];
	
	$sql="select password from admin where username='$userid' AND password = '$upass' ";
	$result=mysqli_query($link,$sql);
	$n=mysqli_num_rows($result);
	if($n==1)
	{
		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $userid;

		header("location:home.php");

        
	}
	else
	{
		$row=mysqli_fetch_array($result);
		if($row[0]==$upass)
		{
			$_SESSION["username"]=$userid;
			header("location:home.php");
		}
		else
		{
			
			header("location:index.php?log=1");
			
		}
	}
}
else
{
	header("location:index.php?");
}
?>
	