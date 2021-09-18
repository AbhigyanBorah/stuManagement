
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

<body class="parallax" style="user-select:none;">
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

    <div class="my-content" style="max-width:1200px; opacity: 0.97;">

    <div class="my-container my-card" style="margin-top:30px;">
        <div class="my-row-padding" style="margin-top:30px;">
            <div class="my-quarter">
            <div class="my-white" style="border-radius:10px; height:260px; width:260px;">
                   <?php echo "<img src='".$row["photo"]."' style='height:260px;width:260px;object-fit: fill;'>";?>
                </div>
                <?php echo'<a href="updatestu.php?id='.$id.'" class="my-btn my-block my-padding my-text-white" style="border-radius:5px; width:260px;  margin-top:40px; background-color:  #137a06;">EDIT DETAILS</a>';?>
                <?php echo'<a href="addacademic.php?id='.$id.'" class="my-btn my-block my-padding my-text-white" style="border-radius:5px; width:260px; margin-top:20px; background-color:  #137a06;">ADD ACADEMIC DETAILS</a>';?>
                <?php echo'<a href="update_academic.php?id='.$id.'" class="my-btn my-block my-padding my-text-white" style="border-radius:5px; width:260px;  margin-top:20px; background-color:  #137a06;">EDIT MARKS</a>';?>
                <br>
            </div>
            <div class="my-threequarter">
                <div class="my-container my-white" style="height:460px; border-radius:5px;"><br>

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
                            Degree: <b>
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

        <div class="my-container my-white" style="border-radius:5px; margin-top:20px;">
            <p class="my-center my-large">M A R K S</p>
            <div class="my-responsive">
                <p>
                    Semester 1
                </p>
                <table class="my-table-all my-centered my-card">
                    <thead>
                                                  
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Subject Code</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Subject Name</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Internal Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Final Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Total</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Grade</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Status</th>
                           
                       
                    </thead>
                    <tbody>

                        <?php
                      include "connect.php";
                      $sql="select * from academics where roll='$id' and sem=1;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                            echo'<tr class="my-white my-medium" style="border-width: 0px;">';
                                echo'<td style="">'.$row[3].'</td>';
                                echo'<td style="text-align:left;">'.$row[4].'</td>';
                                if($row["grade"]=="F"){
                                    echo'<td style="color:red">'.$row[5].'</td>';
                                
                                }
                                else{
                                echo'<td style="">'.$row[5].'</td>';
                                }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[6].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[6].'</td>';
                                }
                                if($row["grade"]=="F"){
                                    echo'<td style="color:red">'.$row[7].'</td>';
                                    }
                                    else{
                                        echo'<td style="">'.$row[7].'</td>';
                                    }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[8].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[8].'</td>';
                                }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[9].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[9].'</td>';
                                }
                               
                                
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
                                                  
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Subject Code</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Subject Name</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Internal Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Final Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Total</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Grade</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Status</th>
                           
                       
                    </thead>
                    <tbody>

                        <?php
                      include "connect.php";
                      $sql="select * from academics where roll='$id' and sem=2;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                            echo'<tr class="my-white my-medium" style="border-width: 0px;">';
                                echo'<td style="">'.$row[3].'</td>';
                                echo'<td style="text-align:left;">'.$row[4].'</td>';
                                if($row["grade"]=="F"){
                                    echo'<td style="color:red">'.$row[5].'</td>';
                                
                                }
                                else{
                                echo'<td style="">'.$row[5].'</td>';
                                }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[6].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[6].'</td>';
                                }
                                if($row["grade"]=="F"){
                                    echo'<td style="color:red">'.$row[7].'</td>';
                                    }
                                    else{
                                        echo'<td style="">'.$row[7].'</td>';
                                    }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[8].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[8].'</td>';
                                }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[9].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[9].'</td>';
                                }
                                
                               
                                
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
                                                  
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Subject Code</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Subject Name</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Internal Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Final Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Total</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Grade</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Status</th>
                           
                       
                    </thead>
                    <tbody>

                        <?php
                      include "connect.php";
                      $sql="select * from academics where roll='$id' and sem=3;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                            echo'<tr class="my-white my-medium" style="border-width: 0px;">';
                                echo'<td style="">'.$row[3].'</td>';
                                echo'<td style="text-align:left;">'.$row[4].'</td>';
                                if($row["grade"]=="F"){
                                    echo'<td style="color:red">'.$row[5].'</td>';
                                
                                }
                                else{
                                echo'<td style="">'.$row[5].'</td>';
                                }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[6].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[6].'</td>';
                                }
                                if($row["grade"]=="F"){
                                    echo'<td style="color:red">'.$row[7].'</td>';
                                    }
                                    else{
                                        echo'<td style="">'.$row[7].'</td>';
                                    }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[8].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[8].'</td>';
                                }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[9].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[9].'</td>';
                                }
                                
                               
                                
                        echo'</tr>';
                          }   
                      ?>


                    </tbody>
                </table>

                <p>
                    Semester 4
                </p>
                <table class="my-table-all my-centered my-card">
                    <thead>
                                                  
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Subject Code</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Subject Name</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Internal Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Final Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Total</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Grade</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Status</th>
                           
                       
                    </thead>
                    <tbody>

                        <?php
                      include "connect.php";
                      $sql="select * from academics where roll='$id' and sem=4;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                            echo'<tr class="my-white my-medium" style="border-width: 0px;">';
                                echo'<td style="">'.$row[3].'</td>';
                                echo'<td style="text-align:left;">'.$row[4].'</td>';
                                if($row["grade"]=="F"){
                                    echo'<td style="color:red">'.$row[5].'</td>';
                                
                                }
                                else{
                                echo'<td style="">'.$row[5].'</td>';
                                }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[6].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[6].'</td>';
                                }
                                if($row["grade"]=="F"){
                                    echo'<td style="color:red">'.$row[7].'</td>';
                                    }
                                    else{
                                        echo'<td style="">'.$row[7].'</td>';
                                    }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[8].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[8].'</td>';
                                }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[9].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[9].'</td>';
                                }
                               
                                
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
                                                  
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Subject Code</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Subject Name</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Internal Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Final Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Total</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Grade</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Status</th>
                           
                       
                    </thead>
                    <tbody>

                        <?php
                      include "connect.php";
                      $sql="select * from academics where roll='$id' and sem=5;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                            echo'<tr class="my-white my-medium" style="border-width: 0px;">';
                                echo'<td style="">'.$row[3].'</td>';
                                echo'<td style="text-align:left;">'.$row[4].'</td>';
                                if($row["grade"]=="F"){
                                    echo'<td style="color:red">'.$row[5].'</td>';
                                
                                }
                                else{
                                echo'<td style="">'.$row[5].'</td>';
                                }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[6].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[6].'</td>';
                                }
                                if($row["grade"]=="F"){
                                    echo'<td style="color:red">'.$row[7].'</td>';
                                    }
                                    else{
                                        echo'<td style="">'.$row[7].'</td>';
                                    }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[8].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[8].'</td>';
                                }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[9].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[9].'</td>';
                                }
                                
                               
                                
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
                                                  
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Subject Code</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Subject Name</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Internal Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Final Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Total</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Grade</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Status</th>
                           
                       
                    </thead>
                    <tbody>

                        <?php
                      include "connect.php";
                      $sql="select * from academics where roll='$id' and sem=6;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                            echo'<tr class="my-white my-medium" style="border-width: 0px;">';
                                echo'<td style="">'.$row[3].'</td>';
                                echo'<td style="text-align:left;">'.$row[4].'</td>';
                                if($row["grade"]=="F"){
                                    echo'<td style="color:red">'.$row[5].'</td>';
                                
                                }
                                else{
                                echo'<td style="">'.$row[5].'</td>';
                                }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[6].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[6].'</td>';
                                }
                                if($row["grade"]=="F"){
                                    echo'<td style="color:red">'.$row[7].'</td>';
                                    }
                                    else{
                                        echo'<td style="">'.$row[7].'</td>';
                                    }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[8].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[8].'</td>';
                                }
                                if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[9].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[9].'</td>';
                                }
                               
                                
                        echo'</tr>';
                          }   
                      ?>


                    </tbody>
                </table>
                <p></p>
                <hr>
                <p class="my-xlarge">
                   BACKLOG
                </p>
                <table class="my-table-all my-centered my-card">
                    <thead>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Semester</th>                      
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Subject Code</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Subject Name</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Internal Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Final Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Total</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Grade</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;">Status</th>
                            <th class="my-text-white my-medium" style=" background-color: #137a06;"></th>
                           
                       
                    </thead>
                    <tbody>
                    <?php
                      include "connect.php";
                      $sql="select * from back where roll='$id';";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                            echo'<tr class="my-white my-medium" style="border-width: 0px;">';
                            echo'<td style="">'.$row[1].'</td>';
                            echo'<td style="">'.$row[3].'</td>';
                            echo'<td style="text-align:left;">'.$row[4].'</td>';
                            if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[5].'</td>';
                            
                            }
                            else{
                            echo'<td style="">'.$row[5].'</td>';
                            }
                            if($row["grade"]=="F"){
                            echo'<td style="color:red">'.$row[6].'</td>';
                            }
                            else{
                                echo'<td style="">'.$row[6].'</td>';
                            }
                            if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[7].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[7].'</td>';
                                }
                            if($row["grade"]=="F"){
                            echo'<td style="color:red">'.$row[8].'</td>';
                            }
                            else{
                                echo'<td style="">'.$row[8].'</td>';
                            }
                            if($row["grade"]=="F"){
                            echo'<td style="color:red">'.$row[9].'</td>';
                            }
                            else{
                                echo'<td style="">'.$row[9].'</td>';
                            }
                            echo'<td style=""><a href="updateback.php" class="my-btn my-indigo">Update</a></td>';
                               
                                
                        echo'</tr>';
                          }   
                      ?>


                    </tbody>
                </table>
                <p></p>
                <p></p>
                <p></p>
                <hr>
                <p class="my-xlarge">
                   Edited Marks
                </p>
                <table class="my-table-all my-centered my-card">
                    <thead>
                            <th class="my-text-white my-medium" style=" background-color: #770677;">Semester</th>                      
                            <th class="my-text-white my-medium" style=" background-color: #770677;">Subject Code</th>
                            <th class="my-text-white my-medium" style=" background-color: #770677;">Subject Name</th>
                            <th class="my-text-white my-medium" style=" background-color: #770677;">Internal Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #770677;">Final Marks</th>
                            <th class="my-text-white my-medium" style=" background-color: #770677;">Total</th>
                            <th class="my-text-white my-medium" style=" background-color: #770677;">Grade</th>
                            <th class="my-text-white my-medium" style=" background-color: #770677;">Status</th>
                            <th class="my-text-white my-medium" style=" background-color: #770677;"></th>
                           
                       
                    </thead>
                    <tbody>

                        <?php
                      include "connect.php";
                      $sql="select * from edited where roll='$id';";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                            echo'<tr class="my-white my-medium" style="border-width: 0px;">';
                            echo'<td style="">'.$row[1].'</td>';
                            echo'<td style="">'.$row[3].'</td>';
                            echo'<td style="text-align:left;">'.$row[4].'</td>';
                            if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[5].'</td>';
                            
                            }
                            else{
                            echo'<td style="">'.$row[5].'</td>';
                            }
                            if($row["grade"]=="F"){
                            echo'<td style="color:red">'.$row[6].'</td>';
                            }
                            else{
                                echo'<td style="">'.$row[6].'</td>';
                            }
                            if($row["grade"]=="F"){
                                echo'<td style="color:red">'.$row[7].'</td>';
                                }
                                else{
                                    echo'<td style="">'.$row[7].'</td>';
                                }
                            if($row["grade"]=="F"){
                            echo'<td style="color:red">'.$row[8].'</td>';
                            }
                            else{
                                echo'<td style="">'.$row[8].'</td>';
                            }
                            if($row["grade"]=="F"){
                            echo'<td style="color:red">'.$row[9].'</td>';
                            }
                            else{
                                echo'<td style="">'.$row[9].'</td>';
                            }
                          
                               
                                
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
</div>
<?php
  if(isset($_GET["ok"]))
  {
    $x=$_GET["ok"];
    if($x==1){
    echo '<script> alert("Student Details Updated"); </script>';
    }
    elseif($x=="total"){
        echo '<script>alert("Total Marks Saved"); </script>';
    }
    elseif($x=="update"){
        echo '<script>alert("Marks Updated"); </script>';
    }
  }
?>
</body>

</html>