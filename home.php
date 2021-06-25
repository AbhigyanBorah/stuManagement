<?php

include "session.php"
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/my.css">
<link rel="stylesheet" type="text/css" href="css/sidenav.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Home</title>
<style>
  .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 80px;
   background: linear-gradient(to right, #03552a, #03557a);
   color: white;
   text-align: center;
   
}
.border-black{
    border-color:black!important;
    border-top:10px solid black!important;
}
</style>
</head>
<body>


    <div class="sidenav my-bar-block my-card-4 my-animate-left" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="my_close()">&times;</a>
        <a href="admin.php" class="my-bar-item">Change Password</a>
        <a href="admin.php" class="my-bar-item">Log Out</a>
    </div>

        <div class="my-container my-card-4" style="height: 150px; background: linear-gradient(to left, #03553a, #03558a);">
        <button id="openNav" class="my-btn my-text-white my-xxlarge" onclick="my_open()">&#9776;</button>



        <div id="main">



            <div class="my-container my-xxlarge" style="text-align: center; color: rgb(233, 232, 232); margin-top:-65px;">
              JEC MCA<br>
              Student Management</h1>
            </div>


            <br><br><br><br><br><br>
            <div class="my-content">
            <div class="my-row">

              <div class="my-third my-container ">
                <div class="container">
                 <div class="my-card" style="height: 400px; text-align: center;">
                  <div class="overlay">
                    <div class="text"><i class="fa fa-user my-xxlarge"></i><br>Total Students <br> 0 <br><p><a href="dustudents.php"><button class="my-btn my-btn-hover">View</button></a></p> </div>
                  </div>
                 <h2 style="padding-top: 150px; color: #0f2453">Dibrugarh <br>University</h2>
                 </div>
               </div>
               </div>

               <div class="my-third my-container">
                <div class="container">
                <div class="my-card" style="height: 400px;text-align: center;">
                  <div class="overlay2">
                    <div class="text"><i class="fa fa-user my-xxlarge"></i><br>Total Students  <br> 0 <br><p><a href="astu3students.php"><button class="my-btn my-btn-hover">View</button></a></p></div>
                  </div>
                  <h2 style="padding-top: 150px;color: #0f2453">ASTU<br> (3 years course)</h2>
                  </div>
               </div>
               </div>

               <div class="my-third my-container">
                <div class="container">
                <div class="my-card" style="height: 400px;text-align: center;">
                  <div class="overlay3">
                    <div class="text"><i class="fa fa-user my-xxlarge"></i><br>Total Students <br> 0 <br><p><a href="astu2students.php"><button class="my-btn my-btn-hover">View</button></a></p></div>
                   </div>
                  <h2 style="padding-top: 150px;color: #0f2453">ASTU<br> (2 years course)</h2>
                  </div>
               </div>
               </div>

             </div>

          </div>
          <div class="footer my-card-4">
              <p>Footer</p>
          </div>



      </div>


				



        <script>
            function my_open() {
              document.getElementById("main").style.marginLeft = "10%";
              document.getElementById("mySidebar").style.width = "12%";
              document.getElementById("mySidebar").style.display = "block";
              document.getElementById("mySidebar1").style.width = "12%";
              document.getElementById("mySidebar1").style.display = "block";
              document.getElementById("openNav").style.display = 'none';
            }
            function my_close() {
              document.getElementById("main").style.marginLeft = "0%";
              document.getElementById("mySidebar").style.display = "none";
              document.getElementById("mySidebar1").style.display = "none";
              document.getElementById("openNav").style.display = "inline-block";
            }
        </script>
        



</body>
</html>
