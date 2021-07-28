<?php

include "session.php"
?>
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
    body, html {
height: 100%;
}
.parallax {
  /* The image used */
  background-image: url('img/back2.png');

  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
}
</style>
</head>
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
<body class="parallax">
<div id="navbar" style="z-index:999">
<button class="my-btn"><a href="home.php"><i class="fa fa-home my-xlarge"></i></a></button>
</div>

<br>
    <div class="my-content" style="max-width:1600px; opacity: 0.97;">

    <div class="my-row-padding">
        <div class="my-quarter">
            <div class="my-container my-white my-card" style="border-radius:10px; height:260px; width:260px;margin-left: 70px;">
            <div style="margin-top: 20px;">
                <img style="height:220px; width:220px;" src="img/22.jpg"></img>
            </div>
            </div>
            <?php echo'<a href="updatestu.php?id='.$id.'" class="my-btn my-block my-padding my-text-white" style="border-radius:10px; width:260px; margin-left: 70px; margin-top:50px; background-color: #065f7a;">EDIT DETAILS</a>';?>
            <?php echo'<a href="addacademic.php?id='.$id.'" class="my-btn my-block my-padding my-text-white" style="border-radius:10px; width:260px; margin-left: 70px; margin-top:50px; background-color: #065f7a;">ADD ACADEMIC DETAILS</a>';?>
        <br>
    </div>
                <div class="my-quarter">
            <div class="my-container my-white my-card" style="height:860px; border-radius:10px;"><br>
                <div class="my-container">
               
                    <p>
                        <h2><b><?php echo $name ?></b></h2>
                    </p> <br>
                    <p>
                        Roll No.: <b> <?php echo $roll ?></b>
                    </p><br>
                    <p>
                        Registration No.: <b> <?php echo $reg ?></b>
                    </p> <br>
                    
                    <p>
                        Address: <b> <?php echo $address ?></b>
                    </p> <br>
                    <p>
                        Phone No.: <b> <?php echo $phn ?></b>
                    </p> <br>
                    <p>
                        E-mail: <b> <?php echo $email ?></b>
                    </p><br>
                    <p>
                        Date Of birth: <b> <?php echo $dob ?></b>
                    </p> <br>
                    <p>
                        Qualification: <b> <?php echo $qualification ?></b>
                    </p> <br>
                    <p>
                        Batch: <b> <?php echo $batch ?></b>
                    </p><br>
                    <p>
                        Board: <b> <?php echo $board ?></b>
                    </p><br>
                </div>
        </div>
        </div>
        <div class="my-half">
            <div class="my-container my-white my-card" style="height:860px; border-radius:10px;">
            <p class="my-center my-large">M A R K S</p>
                <div class="my-responsive">
                <p>
                        Semester 1
                    </p>
                <table class="my-table-all my-centered my-card">
                <thead >
                <?php
                      include "connect.php";
                      $sql="select * from subjects where bid='$brd' and semester=1;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[2].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[3].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[4].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[5].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[6].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">Total</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">CGPA</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">Status</th>';
                        }   
                        ?>  
                </thead>
                <tbody>
                   
                <?php
                      include "connect.php";
                      $sql="select * from academic where roll='$id' and semester=1;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          echo'<tr class="my-white" style="border-width: 0px;">';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[3].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[4].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[5].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[6].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[7].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[8].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[9].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[10].'</td>';
                               
                                
                        echo'</tr>';
                          }   
                      ?>   
                        
                    
                </tbody>
                </table>
                
                <p>
                        Semester 2
                    </p>
                <table class="my-table-all my-centered my-card">
                <thead >
                <?php
                      include "connect.php";
                      $sql="select * from subjects where bid='$brd' and semester=2;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[2].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[3].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[4].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[5].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[6].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">Total</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">CGPA</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">Status</th>';
                        }   
                        ?>  
                </thead>
                <tbody>
                   
                <?php
                      include "connect.php";
                      $sql="select * from academic where roll='$id' and semester=2;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          echo'<tr class="my-white" style="border-width: 0px;">';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[3].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[4].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[5].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[6].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[7].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[8].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[9].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[10].'</td>';
                               
                                
                        echo'</tr>';
                          }   
                      ?> 
                        
                    
                </tbody>
                </table>
                
                <p>
                        Semester 3
                    </p>
                <table class="my-table-all my-centered my-card">
                <thead >
                <?php
                      include "connect.php";
                      $sql="select * from subjects where bid='$brd' and semester=3;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[2].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[3].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[4].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[5].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[6].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">Total</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">CGPA</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">Status</th>';
                        }   
                        ?>  
                </thead>
                <tbody>
                   
                <?php
                      include "connect.php";
                      $sql="select * from academic where roll='$id' and semester=3;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          echo'<tr class="my-white" style="border-width: 0px;">';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[3].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[4].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[5].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[6].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[7].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[8].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[9].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[10].'</td>';
                               
                                
                        echo'</tr>';
                          }   
                      ?> 
                    
                </tbody>
                </table>
                
                <p>
                        Semester 4
                    </p>
                <table class="my-table-all my-centered my-card" id="test1">
                <thead >
                <?php
                      include "connect.php";
                      $sql="select * from subjects where bid='$brd' and semester=4;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[2].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[3].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[4].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[5].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[6].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">Total</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">CGPA</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">Status</th>';
                        }   
                        ?>  
                </thead>
                <tbody>
                   
                <?php
                      include "connect.php";
                      $sql="select * from academic where roll='$id' and semester=4;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          echo'<tr class="my-white" style="border-width: 0px;">';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[3].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[4].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[5].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[6].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[7].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[8].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[9].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[10].'</td>';
                               
                                
                        echo'</tr>';
                          }   
                      ?> 
                        
                    
                </tbody>
                </table>
                
                <p>
                        Semester 5
                    </p>
                <table class="my-table-all my-centered my-card">
                <thead >
                <?php
                      include "connect.php";
                      $sql="select * from subjects where bid='$brd' and semester=5;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[2].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[3].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[4].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[5].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[6].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">Total</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">CGPA</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">Status</th>';
                        }   
                        ?>  
                </thead>
                <tbody>
                   
                <?php
                      include "connect.php";
                      $sql="select * from academic where roll='$id' and semester=5;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          echo'<tr class="my-white" style="border-width: 0px;">';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[3].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[4].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[5].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[6].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[7].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[8].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[9].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[10].'</td>';
                               
                                
                        echo'</tr>';
                          }   
                      ?> 
                    
                </tbody>
                </table>
                
                <p>
                        Semester 6
                    </p>
                    <table class="my-table-all my-centered my-card">
                <thead >
                <?php
                      include "connect.php";
                      $sql="select * from subjects where bid='$brd' and semester=6;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[2].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[3].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[4].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[5].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">'.$row[6].'</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">Total</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">CGPA</th>';
                            echo'<th class="my-text-white my-small" style="width:12.5%; background-color: #065f7a;">Status</th>';
                        }   
                        ?>  
                </thead>
                <tbody>
                   
                <?php
                      include "connect.php";
                      $sql="select * from academic where roll='$id' and semester=6;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          echo'<tr class="my-white" style="border-width: 0px;">';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[3].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[4].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[5].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[6].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[7].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[8].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[9].'</td>';
                                echo'<td style="width:12.5%; text-align:center;">'.$row[10].'</td>';
                               
                                
                        echo'</tr>';
                          }   
                      ?> 
                        
                    
                </tbody>
                </table>
                <p></p>
                </div>    
        </div>
        </div>
     </div>
 
     </div>
     <br>

     
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