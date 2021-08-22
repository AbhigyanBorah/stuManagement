<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/my.css">
<link rel="stylesheet" type="text/css" href="css/sticky.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<title>Home</title>

<style>
body{
    font-family: 'Montserrat', sans-serif;
}
.inp{
  padding:8px;border:none;border-bottom:1px solid #ccc;
}
</style>


<?php
	include "connect.php";
	$id=$_GET["id"];
	$str="Select * from personal where roll='$id'";
	$result=mysqli_query($link,$str);
	$row=mysqli_fetch_array($result);
    $roll=$row["roll"];
	$reg=$row["regno"];
	$name=$row["name"];
	$brd=$row["board"];

    $str1="Select bname from boards where bid='$brd'";
    $result1=mysqli_query($link,$str1);
	$row2=mysqli_fetch_array($result1);
    $board=$row2[0];

    if(isset($_GET["sem"])){
     $sem=$_GET["sem"];  

  $str2="Select * from subjects where bid='$brd' and semester='$sem'";
   $result2=mysqli_query($link,$str2);
   $row3=mysqli_fetch_array($result2); 

   $str3="Select * from academic where bid='$brd' and semester='$sem' and roll='$roll'";
   $result3=mysqli_query($link,$str3);
   $row4=mysqli_fetch_array($result3); 
   
    }

   

 ?>   
</head>


<body>
<div id="navbar" style="z-index:999;">
<button class="my-btn"><a href="home.php"><i class="fa fa-home my-xlarge"></i></a></button>
</div>


<div class="my-content my-white my-card" style="max-width:1000px; opacity:0.95;">
	<form class="my-container" method="get" action="update_academic.php" id="form1" onsubmit="return validation();">
    	<h1 style="font-family: 'Montserrat', sans-serif; text-align:center; color: #0f2453"><b> Update Academic Details</b></h1>
        <hr style="width:60%; margin: 0 auto;  border-style: inset; border-width: .5px;" class="my-animate-zoom">
        <br>
        
        <div class="my-center">
                    <p>
                    <h2> <?php echo $name ?></h2>
                    
                    </p>
                    <p>
                       <h5> Roll No. <b> <?php echo $roll ?></b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Registration No. <b> <?php echo $reg ?></b></h5>
                    </p><br>
                    
                    <p>
                    <h5>Board: <b> <?php echo $board ?></b><h5>
                    </p>
                    <p>
                    <select class="my-select my-center" name="sem" id="sem" style="width:300px;margin-top:2%;margin-left:2%;">
                                               <?php if(isset($_GET["sem"])){
                                                    echo '<option disabled selected>'.$sem.'</option>';
                                                }
                                                else {
                                                echo '<option value="" disabled selected>Select Semester</option>';
                                                } ?> 
                                                  <?php
                                                    $rec=mysqli_query($link,"Select semester from subjects where bid='$brd'");
                                                    while($r=mysqli_fetch_array($rec))
                                                    {
                                                      echo '<option style="color:black;">'.$r[0].'</option>';	
                                                    }
                                                  ?>
                    </select>
                    <input type="text" hidden name="id" <?php echo 'value="'.$id.'"';?>></input>
                    </p>
                    <p>
                    <button type="submit" name="submit" class="my-btn" style="color:white; background: linear-gradient(to left, #03553a, #03558a); width:200px;" id="proceed">Proceed &nbsp;&nbsp; <i class="fa fa-angle-double-right my-large"></i></button>
                    </p>   
   </form>
   <br>
   <?php if(isset($_GET["sem"])){
      echo '<div class="my-container" id="show" >';
   }
   else {
   echo '<div class="my-container" id="show" hidden >';
  } ?>
  
   <form method="post" action="update_marks.php" id="form2" class="my-content" onsubmit="return validation();">
  <center>
   <hr style="width:98%; margin: 0 auto;  border-style:solid; border-width: .3px;">
        <br>
        <p>
          <label>Marks obtained in <?php echo $row3[2]  ?> : </label>  
          <input class="inp" type="int" name="sub1" <?php echo 'value="'.$row4[3].'"'; ?> required></p>
       <p>
        <label for="sub2">Marks obtained in <?php echo $row3[3]  ?> : </label>
        <input class="inp" type="int"name="sub2" <?php echo 'value="'.$row4[4].'"'; ?> required></p>
        <p>
        <label for="sub3">Marks obtained in <?php echo $row3[4]  ?> : </label>
        <input class="inp" type="int"name="sub3" <?php echo 'value="'.$row4[5].'"'; ?> required></p>
        <p>
        <label for="sub4">Marks obtained in <?php echo $row3[5]  ?> : </label>
        <input class="inp" type="int"name="sub4" <?php echo 'value="'.$row4[6].'"'; ?> required></p>
        <p>
        <label for="sub5">Marks obtained in <?php echo $row3[6]  ?> : </label>
        <input class="inp" type="int"name="sub5" <?php echo 'value="'.$row4[7].'"'; ?> required></p>
        <p>
          <br>
          <p>
        <label for="sub5">CGPA Obtained : </label>
        <input class="inp" type="int"name="cgpa" placeholder="Enter the Mark secured"required></p>
        <p>
        <p>
        <label for="sub5">Status : </label>
        
        <input class="my-radio" type="radio"name="status" value="Passed" required><label for="sub5">Passed </label>&nbsp;
        <input class="my-radio" type="radio"name="status" value="Failed"><label for="sub5">Failed </label> </p>
        <p>

        <input class="inp" type="int"name="roll" hidden <?php echo' value="'.$roll.'"';?> required></p>
        <input class="inp" type="int"name="sem" hidden <?php echo' value="'.$sem.'"';?> required></p>
        <input class="inp" type="int"name="bid" hidden <?php echo' value="'.$brd.'"';?> required></p>

        <button type="submit" name="submit" class="my-btn my-right" style="color:white; background: linear-gradient(to left, #03553a, #03558a); width:200px;">Upload &nbsp;&nbsp; <i class="fa fa-angle-double-top my-large"></i></button>
        </p>
  </center>
   </form>
  </div>
</div>



<script>
    window.onscroll = function() {myFunction()};
    
    var header = document.getElementById("navbar");
    var sticky = header.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
    </script>




</body>
</html>
