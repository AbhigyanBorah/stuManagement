<?php

include "connect.php";

if(isset($_POST["submit"]))
{
	$roll=$_POST["roll"];
    	
	$sql="select roll from students where roll=$roll";
	$result=mysqli_query($link,$sql);
	$n=mysqli_num_rows($result);
	if($n==1){
        header("location:studentHome.php?roll=$roll");
    }
    elseif($n==0){
        header("location:stulogin.php?log=1");
    }
	
}
else
{
	header("location:index.php?");
}
?>