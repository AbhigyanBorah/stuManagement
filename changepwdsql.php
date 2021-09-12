<?php

session_start();


$con = mysqli_connect("localhost", "root", "" ,"new") or die("Can't Connect To Database");

if(isset($_POST["submit"]))
{
	$userid=$_POST["username"];
	$upass=$_POST["password"];
    $npass=$_POST["newpassword"];
	
	$result=mysqli_query($con,"select password from admin where username='$userid' AND password = '$upass' ");
    $row=mysqli_fetch_array($result);

    if($_POST["password"] == $row["password"] ) {

        mysqli_query($con,"UPDATE admin set password= '$npass' WHERE username='$userid '");

        header("location:index.php");
    }
    else
    {
        
        header("location:changepwd.php?log=1");
        
    }
}









// // $result = mysqli_query($con,"SELECT *from student WHERE name='" . $id . "'");
// // $row=mysqli_fetch_array($result);
// if($_POST["currentPassword"] == $row["password"] && $_POST["newPassword"] == $row["confirmPassword"] ) {
// mysqli_query($con,"UPDATE student set password='" . $_POST["newPassword"] . "' WHERE name='" . $id . "'");
// $message = "Password Changed Sucessfully";
// } else{
//  $message = "Password is not correct";
// }
// }
// 




?>