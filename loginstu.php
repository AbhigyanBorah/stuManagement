<?php

include "connect.php";

if(isset($_POST["submit"]))
{
	$roll=$_POST["roll"];
	$pin=$_POST["pin"];
    	
	$sql="select roll from students where roll=$roll AND pin=$pin AND status='1' ";
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