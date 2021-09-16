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
<title>Update Student Details</title>
<style>
body{
    font-family: 'Montserrat', sans-serif;
}
header{
  position: sticky;
  top:0;
  z-index: 999;
}
.nav:hover{
  color: red;
  cursor: pointer;
}


</style>
<?php
	include "connect.php";
	$id=$_GET["id"];
	$str="Select * from students where roll='$id'";
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
 <script type="text/javascript">
 function handleBackward(){
   window.history.back();
 }

 function handleForward(){
   window.history.forward();
 }
 </script>
</head>
<body>
<header>
<div class="my-container my-card-4" style="height: 150px; max-width:1600px; background: linear-gradient(to left, #03553a, #03558a);  border-radius: 0 0 50% 50%/0 0 100% 100%; margin:-17px auto 0;">
         <div class="my-container my-xxlarge" style="text-align: center; color: rgb(233, 232, 232);margin-top:10px;">
         <h2>JEC MCA STUDENT MANAGEMENT </h2>
        
        <div class="my-container">
        <a class="my-padding" onclick="handleBackward()"><i class="fa fa-angle-double-left my-xxlarge nav"></i></a>
        <a href="home.php" class="my-padding"><i class="fa fa-home my-xxlarge nav"></i></a>
        <a  class="my-padding" onclick="handleForward()"><i class="fa fa-angle-double-right my-xxlarge nav"></i></a>
      </div>
      </div>
      </div>
</header>

<div class="my-content my-white my-card" style="max-width:1000px; opacity:0.95;">
	<form class="my-container" method="post" action="update.php" id="form1" onsubmit="return validation();">
    	<h1 style="font-family: 'Montserrat', sans-serif; text-align:center; color: #0f2453"><b> Update Student Details</b></h1>
        <p>
            <div class="container my-border my-margin-left" style="width:200px;height:200px;border-radius:10px;">
            <?php echo "<img src='".$row["photo"]."' style='height:200px;width:200px;object-fit: fill;border-radius:10px;'>";?>
          </div>
            <div class="my-padding" style="float:left; margin-left:230px; margin-top:-130px;">
            </div>
        </p><br>
        <div class="my-row-padding">
            <div class="my-half">
        <p>
        <label class="my-margin-top my-left" > Roll No. &nbsp;</label>
      <b><input name="roll" type="text"  class="my-input " placeholder="Roll No." style="width:75%" <?php echo 'value="'.$roll.'"'; ?> readonly></b>
      </p>
      <br>
      <p>
      <label class="my-margin-top my-left" > Name &nbsp;</label>
      <b><input name="name" type="text"  class="my-input " placeholder="Name" style="width:75%" <?php echo 'value="'.$name.'"'; ?>></b>
      </p>
      <br>
      <p>
      <label class="my-margin-top my-left" > Address &nbsp;</label>
      <b><input name="address" type="text"  class="my-input " placeholder="Address" style="width:75%" <?php echo 'value="'.$address.'"'; ?>></b>
      </p>
      <br>
      <p>
      <label class="my-margin-top my-left" > Phone &nbsp;</label>
      <b> <input name="phone" type="text"  class="my-input " placeholder="Phone No." style="width:75%" <?php echo 'value="'.$phn.'"'; ?>></b>
      </p>
      <br>
      <p>
      <label class="my-margin-top my-left" > Batch &nbsp;</label>
      <b><input name="batch" type="text"  class="my-input " placeholder="Batch" style="width:75%"<?php echo 'value="'.$batch.'"'; ?> readonly></b>
      </p>
      <br>
      
      </div>
      <div class="my-half">
        <p>
        <label class="my-margin-top my-left" > Registration No.</label>
        <b><input name="regno" type="text"  class="my-input " placeholder="Registration No." style="width:75%" <?php echo 'value="'.$reg.'"'; ?> readonly></b>
            </p>
            <br>
            <p>
            <label class="my-margin-top my-left" > Email &nbsp;</label>
            <b><input name="email" type="text"  class="my-input " placeholder="E-mail" style="width:75%" <?php echo 'value="'.$email.'"'; ?>></b>
            </p>
            <br>
            <p>
                <label class="my-margin-top my-left" > Date of Birth &nbsp;</label>
                <b><input name="dob" type="date"  class="my-input"  style="width:75%; color:rgb(122, 120, 120); " <?php echo 'value="'.$dob.'"'; ?>></b>
            </p>
            <br>
            <p>
            <label class="my-margin-top my-left" > Degree &nbsp;</label>
            <b> <input name="qualification" type="text"  class="my-input " placeholder="Degree" style="width:75%" <?php echo 'value="'.$qualification.'"'; ?>></b>
            </p>
            <br>
            <p>
            <label class="my-margin-top my-left" > Board &nbsp;</label>
            <b><input name="board" type="text"  class="my-input " placeholder="Board" style="width:75%" <?php echo 'value="'.$board.'"'; ?> readonly></b>
            </p>
            
            
      <br>
      <button name="submit" onclick="myfunction()" class="my-btn my-block my-margin-bottom my-right my-text-white my-padding" type="submit" style="width:40%;margin-left:20%; margin-top:13px; background: linear-gradient(to left, #03553a, #03558a);"><span class="my-opacity-off">Update</span>
      </button><br>
      </div>
      </div>
<br>
    </form>
</div>

<?php
echo '<script>
  function myfunction() {
  
  if (confirm("Are you sure you want to update this data?")) {
    document.getElementById("form1").action = "update.php?id='.$id.'";
  } else {
    document.getElementById("form1").action = "updatestu.php?id='.$id.'";
  }
  
}

</script>';?>



</body>
</html>
