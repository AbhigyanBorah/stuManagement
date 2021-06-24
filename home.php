<?php
	session_start();
	if(!isset($_SESSION["username"]))
	{
		header("location:index.php?login=fail");
		return;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/my.css">
<link rel="stylesheet" type="text/css" href="css/sidenav.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Home</title>
<style>
body{
    font-family: 'Montserrat', sans-serif;
}
body, html {
height: 100%;
}
.overlay {
  position:absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background: linear-gradient(to bottom, #96cfe7, #065f7a);
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;

}
.overlay2 {
  position:absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background: linear-gradient(to bottom, #f19c6a, #e95a5a);
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;

}
.overlay3 {
  position:absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background: linear-gradient(to bottom, #3ee747, #137a06);
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;

}
.container {
  position: relative;
}
.container:hover .overlay {
  bottom: 0;
  height: 100%;
}
.container:hover .overlay2 {
  bottom: 0;
  height: 100%;
}
.container:hover .overlay3 {
  bottom: 0;
  height: 100%;
}
.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 80px;
   background-color: black;
   color: white;
   text-align: center;
   opacity: 0.95;
}
.border-green{
    border-color:#03554a!important;
    border-top:10px solid #03554a!important;
}

</style>
</head>
<body>


    <div class="sidenav my-bar-block my-card-4 my-animate-left" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="my_close()">&times;</a>
        <a href="admin.php" class="my-bar-item">Change Password</a>
        <a href="admin.php" class="my-bar-item">Log Out</a>
        </div>

        <div class="my-container my-card-4" style="height: 150px; background: linear-gradient(to top, #03554a, #03554a);">
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
          <div class="footer my-card-4 my-topbar my-border-top border-green">
              <p>Footer</p>
          </div>



      </div>


				



        <script>
            function my_open() {
              document.getElementById("main").style.marginLeft = "20%";
              document.getElementById("mySidebar").style.width = "20%";
              document.getElementById("mySidebar").style.display = "block";
              document.getElementById("mySidebar1").style.width = "20%";
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
        <script>
          window.onscroll = function() {myFunction()};

         var navbar = document.getElementById("navbar");
         var sticky = navbar.offsetTop;

            function myFunction() {
              if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
              } else {
                navbar.classList.remove("sticky");
              }
            }
        </script>



</body>
</html>
