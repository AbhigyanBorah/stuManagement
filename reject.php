<?php


include "pendingDetails.php";

$con = mysqli_connect("localhost", "root", "" ,"new1") or die("Can't Connect To Database");
echo $id;

mysqli_query($con,"UPDATE STUDENTS SET status = 'r' where roll = '$id' ");

