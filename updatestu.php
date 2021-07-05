<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/my.css">
<link rel="stylesheet" type="text/css" href="css/sticky.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Home</title>
<style>
body{
    font-family: 'Montserrat', sans-serif;
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
	$address=$row["address"];
	$phn=$row["phone"];
	$email=$row["email"];
	$dob=$row["dob"];
    $qualification=$row["qualification"];
    $batch=$row["batch"];
    $brd=$row["board"];

    $str1="Select bname from boards where bid='$brd'";
    $result1=mysqli_query($link,$str1);
	$row2=mysqli_fetch_array($result1);
    $board=$row2[0];

 ?> 
</head>
<body>
<div id="navbar" style="z-index:999;">
<button class="my-btn"><a href="home.php"><i class="fa fa-home my-xlarge"></i></a></button>
</div>


<div class="my-content my-white my-card" style="max-width:1000px; opacity:0.95;">
	<form class="my-container" method="post" action="savestu.php" id="form1">
    	<h1 style="font-family: 'Montserrat', sans-serif; text-align:center; color: #0f2453"><b> Enter Student Details</b></h1>
        <p>
            <div class="my-container my-border my-margin-left" style="width:200px;height:200px;">

            </div><br><div class="my-left">
            <label class="my-margin-top my-left" style="color:rgb(122, 120, 120);" > Photo: </label>
      <input class="my-input my-right" type="file" name="file1" style="width:250px; color:rgb(122, 120, 120);"></div>
        </p>
        <div class="my-row-padding">
            <div class="my-half">
        <br>
        <p>
        <label class="my-margin-top my-left" > Roll No. &nbsp;</label>
      <b><input name="roll" type="text"  class="my-input " placeholder="Roll No." style="width:75%" value=<?php echo $roll ?>></b>
      </p>
      <br>
      <p>
      <label class="my-margin-top my-left" > Name &nbsp;</label>
      <b><input name="name" type="text"  class="my-input " placeholder="Name" style="width:75%" value=<?php echo $name ?>></b>
      </p>
      <br>
      <p>
      <label class="my-margin-top my-left" > Address &nbsp;</label>
      <b><input name="address" type="text"  class="my-input " placeholder="Address" style="width:75%" value=<?php echo $address ?>></b>
      </p>
      <br>
      <p>
      <label class="my-margin-top my-left" > Phone &nbsp;</label>
      <b> <input name="phone" type="text"  class="my-input " placeholder="Phone No." style="width:75%" value=<?php echo $phn ?>></b>
      </p>
      <br>
      <p>
      <label class="my-margin-top my-left" > Batch &nbsp;</label>
      <b><input name="batch" type="text"  class="my-input " placeholder="Batch" style="width:75%" value=<?php echo $batch ?>></b>
      </p>
      <br>
      
      </div>
      <div class="my-half">
          <br>
        <p>
        <label class="my-margin-top my-left" > Registration No. &nbsp;</label>
        <b><input name="regno" type="text"  class="my-input " placeholder="Registration No." style="width:75%" value=<?php echo $reg ?>></b>
            </p>
            <br>
            <p>
            <label class="my-margin-top my-left" > Email &nbsp;</label>
            <b><input name="email" type="text"  class="my-input " placeholder="E-mail" style="width:75%" value=<?php echo $email ?>></b>
            </p>
            <br>
            <p>
                <label class="my-margin-top my-left" > Date of Birth &nbsp;</label>
                <b><input name="dob" type="date"  class="my-input" value="Date of Birth" style="width:75%; color:rgb(122, 120, 120); " value=<?php echo $dob ?>></b>
            </p>
            <br>
            <p>
            <label class="my-margin-top my-left" > Qualification &nbsp;</label>
            <b> <input name="qualification" type="text"  class="my-input " placeholder="Qualification" style="width:75%" value=<?php echo $qualification ?>></b>
            </p>
            <br>
            <p>
            <label class="my-margin-top my-left" > Board &nbsp;</label>
            <b><input name="board" type="text"  class="my-input " placeholder="Board" style="width:75%" value=<?php echo $board ?>></b>
            </p>
            
            
      <br>
      <button name="submit" class="my-btn my-block my-margin-bottom my-right my-text-white my-padding" type="submit" style="width:40%;margin-left:20%; background: linear-gradient(to left, #03553a, #03558a);"><span class="my-opacity-off">Update</span>
      </button><br>
      </div>
      </div>
<br>
    </form>
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
