<?php

include "session.php"
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/my.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<title>Add Marks</title>
<style>
body{
    font-family: 'Montserrat', sans-serif;
}
.inp{
  padding:8px;border:none;border-bottom:1px solid #ccc;
}
header {
      position: sticky;
      top: 0;
      z-index: 999;
    }

    .nav:hover {
      color: red;
      cursor: pointer;
    }
</style>
<script type="text/javascript">
    function handleBackward() {
      window.history.back();
    }

    function handleForward() {
      window.history.forward();
    }
  </script>
<?php
	include "connect.php";
	$id=$_GET["id"];
	$str="Select * from students where roll='$id'";
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

    
  

   

 ?>   
</head>
<body>
<header>
<div class="my-container my-card-4" style="height: 150px; max-width:1600px; background: linear-gradient(to left, #03553a, #03558a);  border-radius: 0 0 50% 50%/0 0 100% 100%; margin:-17px auto 0;">
         <div class="my-container my-xxlarge" style="text-align: center; color: rgb(233, 232, 232);margin-top:5px;">
         <h2>JEC MCA STUDENT MANAGEMENT </h2>
        
        <div class="my-container">
        <a class="my-padding" onclick="handleBackward()"><i class="fa fa-angle-double-left my-xxlarge nav"></i></a>
        <a href="home.php" class="my-padding"><i class="fa fa-home my-xxlarge nav"></i></a>
        <a  class="my-padding" onclick="handleForward()"><i class="fa fa-angle-double-right my-xxlarge nav"></i></a>
      </div>
      </div>
      </div>
</header>


<div class="my-content my-white my-card" style="max-width:1000px; opacity:0.95;margin-top:5%;">
	<form class="my-container" method="post" action="addmarks.php" id="form1">
    	<h1 style="font-family: 'Montserrat', sans-serif; text-align:center; color: #0f2453;margin-top: 80px;"><b> Add Academic Details</b></h1>
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
                                                    $rec=mysqli_query($link,"Select distinct semester from subjects where bid='$brd'");
                                                    while($r=mysqli_fetch_array($rec))
                                                    {
                                                      echo '<option style="color:black;">'.$r[0].'</option>';	
                                                    }
                                                  ?>
                    </select>
                    <input type="text" hidden name="id" <?php echo 'value="'.$id.'"';?>></input>
                    </p>
                    <p>
                    <button type="submit" name="submit" class="my-btn" style="color:white; background: linear-gradient(to left, #03553a, #03558a); width:200px;" >Proceed &nbsp;&nbsp; <i class="fa fa-angle-double-right my-large"></i></button>
                    </p>   
   </form>
   <br>
  
        
  </center>
   
  </div>
</div>








</body>
</html>
