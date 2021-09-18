<?php


include "pendingDetails.php";

$con = mysqli_connect("localhost", "root", "" ,"new1") or die("Can't Connect To Database");

$str1=mysqli_query($con,"select * from students where roll = '$id' ");
$result1=mysqli_query($link,$str1);
	$row1=mysqli_fetch_array($result1);
    $brd=$row1["board"];
    echo $brd;
$result=mysqli_query($con,"UPDATE STUDENTS SET status = '1' where roll = '$id' ");
if($result1)
		{
			if($brd==1){
                header("location:dustudent.php?ok=approved&id=$roll");
                }
                elseif($brd==2){
                    header("location:astu2students.php?ok=approved&id=$roll");
                }
                elseif($brd==3){
                    header("location:astu3students.php?ok=approved&id=$roll");
                }
            }		
		else
		{
			echo mysqli_error($link);	
		}


// if(isset($_POST["submit"]))
// {
	
	
// 	mysqli_query($con,"select password from admin where username='$userid' AND password = '$upass' ");
    

//     if($_POST["password"] == $row["password"] ) {

//         mysqli_query($con,"UPDATE admin set password= '$npass' WHERE username='$userid '");

//         header("location:index.php");
//     }
//     else
//     {
        
//         header("location:changepwd.php?log=1");
        
//     }
// }



?>
