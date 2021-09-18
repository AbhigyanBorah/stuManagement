
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
  if(isset($_POST["submit"]))
  {
    $id=$_POST["id"];
  }

  if(isset($_GET["id"]))
  {
    $id=$_GET["id"];
  }
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

    if(isset($_POST["submit"]))
  {
    $sem=$_POST["sem"];
  }

  if(isset($_GET["sem"]))
  {
    $sem=$_GET["sem"];
  }
  
  if(isset($_GET["scode"]))
  {
   $scode=$_GET["scode"];
   $count2=$_GET["count"];
  }
  if(isset($_POST["submit"]))
  {
  $count2=0;
  }
  $n=1;  

  /* $str2="Select distinct subName from subjects where bid='$brd' and semester='$sem'";
   $result2=mysqli_query($link,$str2);
   $row3=mysqli_fetch_array($result2); 
   $n=mysqli_num_rows($result2); */
   
    
  
    
   

 ?>   
</head>
<body style="user-select:none;">
<header>
<div class="my-container my-card-4" style="max-width:1600px; background: linear-gradient(to left, #03553a, #03558a);  border-radius: 0 0 50% 50%/0 0 100% 100%; margin:-17px auto 0;">
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


<div class="my-content my-white my-card" style="max-width:1300px; opacity:0.95;margin-top:2%;">
	
    	<h1 style="font-family: 'Montserrat', sans-serif; text-align:center; color: #0f2453;margin-top: 20px;"><b> Add Marks</b></h1>
        <hr style="width:60%; margin: 0 auto;  border-style: inset; border-width: .5px;" class="my-animate-zoom">
        <br>
        
        <div class="my-center">
                    <p>
                    <h2> <?php echo $name ?></h2>
                    <input type="text" hidden name="id" <?php echo 'value="'.$id.'"';?>></input>
                    </p>
                    <p>
                       <h5> Roll No. <b> <?php echo $roll ?></b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Registration No. <b> <?php echo $reg ?></b></h5>
                    </p>
                    <p>
                    <h5>Board: <b> <?php echo $board ?></b><h5>
                    </p>

             
                    
                        <div class="my-container my-margin-top">
                            <table class="my-table">
                                <thead>
                                    
                                    <th class="my-center">Subject Code</th>
                                    <th class="my-center">Subject Name</th>
                                    <th class="my-center">Internal Marks</th>
                                    <th class="my-center">Final Marks</th>
                                    
                                    </thead>
                                 <tbody>
                                 <?php
                      include "connect.php";
                      $sql="Select subCode from subjects where bid='$brd' and semester='$sem'";
                      $result=mysqli_query($link,$sql);
                      $n=mysqli_num_rows($result);
                      
                      echo'<form action="oo.php" method="post">';
                        
                         for($i=1;$i<=$n;$i++)
                      {
                        echo'<tr>';
                        echo'<td><select type="text" name="'.$i."scode".'" class="my-input">';  
                        $sql1=mysqli_query($link,"Select subCode from subjects where bid='$brd' and semester='$sem'");
                        while($s=mysqli_fetch_array($sql1)){
                        echo '<option> '.$s[0].'  </option>';
                        }  
                        echo '</select></td>';
                         echo'<td><select type="text" name="'.$i."sname".'" class="my-input">';
                         $sql2=mysqli_query($link,"Select subName from subjects where bid='$brd' and semester='$sem'");
                        while($s1=mysqli_fetch_array($sql2)){
                        echo '<option> '.$s1[0].'  </option>';
                        } 
                        echo '</select></td>'; 
   
                         echo'<td><input type="number" min="0" max="30" name="'.$i."internal".'" class="my-input"></input></td>';
                         echo'<td><input type="number" min="0" max="70" name="'.$i."final".'" class="my-input"></input></td>';
                         echo'<td><input type="hidden" name="roll" value="'.$roll.'" class="my-input"></input></td>';
                         echo'<td><input type="hidden" name="sem" value="'.$sem.'" class="my-input"></input></td>';
                         echo'<td><input type="hidden" name="brd" value="'.$brd.'" class="my-input"></input></td>';
                         echo'<td><input type="hidden" name="n" value="'.$n.'" class="my-input"></input></td>';
                        /*  <td><input type="hidden" name="<?php echo $n;?>" class="my-input"></input></td> */
                        echo'</tr>';
                        
                        }
                        echo'</tbody>';   
                        echo'</table>';
   
                                echo '<br>';
                                echo' <button type="submit" name="submit" class="my-hover-indigo my-btn my-blue" style="width:260px;background: linear-gradient(to left, #03553a, #03558a);">Save</button>';
                                
                        echo'<br>';
                                
                        echo'</form>';
                          
                      ?> 


   <br>
  
        
  </center>
   
  </div>
</div>








</body>
<script>

function save(){

  var msg = document.getElementById('msg');
  document.getElementById("save").value="Saved Successfully";
  msg.innerHTML ='';
}


  </script>

  
</html>
