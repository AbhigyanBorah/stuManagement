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
    <title>Student Details</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Klee+One&family=Varela+Round&display=swap');
        body,
        html {
            height: 100%;
            font-family: 'Varela Round', sans-serif;
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

        header {
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .nav:hover {
            color: red;
            cursor: pointer;
        }

        .details {
            display: flex;
            justify-content: space-evenly;
            max-width: 1000px;
            font-size:20px;
            font-family: 'Klee One', cursive;
        }
        h1{
            font-size:48px;
            font-family: 'Varela Round', sans-serif;
        }
        td{
            height:70px;
            vertical-align:middle;
        }
        </style>
<script type="text/javascript">
 function handleBackward(){
   window.history.back();
 }

 function handleForward(){
   window.history.forward();
 }
 </script>
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

    <div class="my-content" style="max-width:1600px; opacity: 0.97;">

        <div class="my-row-padding" style="margin-top:80px;">
            <div class="my-quarter">
                <div class="my-container my-white my-card"
                    style="border-radius:10px; height:260px; width:260px;margin-left: 70px;">
                    <div style="margin-top: 20px;">
                    <?php echo "<img src='".$row["photo"]."' heigh='200' width='200'/>"; ?>
                    </div>
                </div>
                <?php echo'<a href="updatestu.php?id='.$id.'" class="my-btn my-block my-padding my-text-white" style="border-radius:10px; width:260px; margin-left: 70px; margin-top:40px; background-color: #e95a5a;">EDIT DETAILS</a>';?>
                <?php echo'<a href="addacademic.php?id='.$id.'" class="my-btn my-block my-padding my-text-white" style="border-radius:10px; width:260px; margin-left: 70px; margin-top:20px; background-color: #e95a5a;">ADD ACADEMIC DETAILS</a>';?>
                <?php echo'<a href="update_academic.php?id='.$id.'" class="my-btn my-block my-padding my-text-white" style="border-radius:10px; width:260px; margin-left: 70px; margin-top:20px; background-color: #e95a5a;">EDIT MARKS</a>';?>
                <br>
            </div>
            <div class="my-threequarter">
                <div class="my-container my-white my-card" style="height:460px; border-radius:10px;"><br>

                    <center>
                    <p>
                    <h1><b>
                            <?php echo $name ?>
                        </b></h1>
                    </p> <br>
                    <div class="my-container details">
                        <p>
                            Roll No.: <b>
                                <?php echo $roll ?>
                            </b>
                        </p><br>
                        <p>
                            Registration No.: <b>
                                <?php echo $reg ?>
                            </b>
                        </p> <br>

                        <p>
                            Address: <b>
                                <?php echo $address ?>
                            </b>
                        </p> <br>
                    </div>
                    <div class="my-container details">
                        <p>
                            Phone No.: <b>
                                <?php echo $phn ?>
                            </b>
                        </p> <br>


                        <p>
                            E-mail: <b>
                                <?php echo $email ?>
                            </b>
                        </p><br>
                        <p>
                            Date Of birth: <b>
                                <?php echo $dob ?>
                            </b>
                        </p> <br>
                    </div>
                    <div class="my-container details">
                        <p>
                            Qualification: <b>
                                <?php echo $qualification ?>
                            </b>
                        </p> <br>
                        <p>
                            Batch: <b>
                                <?php echo $batch ?>
                            </b>
                        </p><br>
                        <p>
                            Board: <b>
                                <?php echo $board ?>
                            </b>
                        </p><br>
                
                    </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="my-container my-white my-card" style="border-radius:10px; margin-top:20px;">
            <p class="my-center my-large">M A R K S</p>
            <div class="my-responsive">
                <p>
                    Semester 1
                </p>
                <table class="my-table-all my-centered my-card">
                    <thead>
                        <?php
                      include "connect.php";
                      $sql="select * from subjects where bid='$brd' and semester=1;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[2].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[3].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[4].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[5].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[6].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[7].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">Total</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">CGPA</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">Status</th>';
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
                          echo'<tr class="my-white my-large" style="border-width: 0px;">';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[3].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[4].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[5].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[6].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[7].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[8].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[9].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[10].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[11].'</td>';
                               
                                
                        echo'</tr>';
                          }   
                      ?>


                    </tbody>
                </table>

                <p>
                    Semester 2
                </p>
                <table class="my-table-all my-centered my-card">
                    <thead>
                        <?php
                      include "connect.php";
                      $sql="select * from subjects where bid='$brd' and semester=2;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[2].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[3].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[4].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[5].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[6].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[7].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">Total</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">CGPA</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">Status</th>';
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
                          echo'<tr class="my-white my-large" style="border-width: 0px;">';
                                echo'<td style="width:11.11%; text-align:center; height:70px;">'.$row[3].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[4].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[5].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[6].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[7].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[8].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[9].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[10].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[11].'</td>';
                               
                                
                        echo'</tr>';
                          }   
                      ?>


                    </tbody>
                </table>

                <p>
                    Semester 3
                </p>
                <table class="my-table-all my-centered my-card">
                    <thead>
                        <?php
                      include "connect.php";
                      $sql="select * from subjects where bid='$brd' and semester=3;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[2].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[3].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[4].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[5].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[6].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[7].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">Total</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">CGPA</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">Status</th>';
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
                          echo'<tr class="my-white my-large" style="border-width: 0px;">';
                                echo'<td style="width:11.11%; text-align:center; height:70px;">'.$row[3].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[4].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[5].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[6].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[7].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[8].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[9].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[10].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[11].'</td>';
                               
                                
                        echo'</tr>';
                          }   
                      ?>

                    </tbody>
                </table>

                <p>
                    Semester 4
                </p>
                <table class="my-table-all my-centered my-card" id="test1">
                    <thead>
                        <?php
                      include "connect.php";
                      $sql="select * from subjects where bid='$brd' and semester=4;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[2].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[3].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[4].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[5].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[6].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[7].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">Total</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">CGPA</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">Status</th>';
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
                          echo'<tr class="my-white my-large" style="border-width: 0px;">';
                                echo'<td style="width:11.11%; text-align:center;height:70px;">'.$row[3].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[4].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[5].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[6].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[7].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[8].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[9].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[10].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[11].'</td>';
                               
                                
                        echo'</tr>';
                          }   
                      ?>


                    </tbody>
                </table>

                <p>
                    Semester 5
                </p>
                <table class="my-table-all my-centered my-card">
                    <thead>
                        <?php
                      include "connect.php";
                      $sql="select * from subjects where bid='$brd' and semester=5;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[2].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[3].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[4].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[5].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[6].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[7].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">Total</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">CGPA</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">Status</th>';
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
                          echo'<tr class="my-white my-large" style="border-width: 0px;">';
                                echo'<td style="width:11.11%; text-align:center;height:70px;">'.$row[3].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[4].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[5].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[6].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[7].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[8].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[9].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[10].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[11].'</td>';
                               
                                
                        echo'</tr>';
                          }   
                      ?>

                    </tbody>
                </table>

                <p>
                    Semester 6
                </p>
                <table class="my-table-all my-centered my-card">
                    <thead>
                        <?php
                      include "connect.php";
                      $sql="select * from subjects where bid='$brd' and semester=6;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[2].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[3].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[4].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[5].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[6].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">'.$row[7].'</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">Total</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">CGPA</th>';
                            echo'<th class="my-text-white my-small" style="width:11.11%; background-color: #e95a5a;">Status</th>';
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
                          echo'<tr class="my-white my-large" style="border-width: 0px;">';
                                echo'<td style="width:11.11%; text-align:center;height:70px;vertical-align:center;">'.$row[3].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[4].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[5].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[6].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[7].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[8].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[9].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[10].'</td>';
                                echo'<td style="width:11.11%; text-align:center;">'.$row[11].'</td>';
                               
                                
                        echo'</tr>';
                          }   
                      ?>


                    </tbody>
                </table>
                <p></p>
            </div>
        </div>

    </div>
    <br>


</body>

</html>