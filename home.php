

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
  @import url('https://fonts.googleapis.com/css2?family=Klee+One&family=Varela+Round&display=swap');
  body,html {
            height: 100%;
            font-family: 'Varela Round', sans-serif;
        }
  .parallax {
  /* The image used */
 background-image: url('img/background.jpg');
 
  /* Full height */
  height: 100%; 
  filter: blur(20);
 
  /* Create the parallax scrolling effect */
  background-attachment: fixed;background-position: top;
  background-repeat: no-repeat;background-size: cover;
 }
  .mya {
    padding: 120px 20px 20px 50px;text-decoration: none;font-size: 25px;
    color: #03553a ;display: block;transition: 0.3s;position: absolute;
  }
  
  .mya:hover {
    color:blue ;
  }
 
  .glass{
    opacity: 0.8;
  }
  header{
  position: sticky;
  top:0;
  z-index: 999;
}
.img1{
  position:absolute;
  top:4px;
  left:550px;
  height:190px;
  width:190px;
}
.img2{
  position:absolute;
  top:4px;
  left:1150px;
  height:190px;
  width:190px;
}
.image{
  position:absolute;
    width:800px;
    right:0;
    bottom:0;
    z-index:997;
    margin-bottom:81px;
    margin-right:50px;
}

</style>
</head>
<body class="parallax" style="user-select:none;">


    <div class="sidenav my-bar-block my-card-4 my-animate-left" style="display:none;" id="mySidebar">
    <a href="pending.php" class="my-bar-item my-large">Pending Request 
        
  <?php 
			include ("connect.php");
      $str='select * from students where status="";';
			$result=mysqli_query($link,$str);
     	$n=mysqli_num_rows($result);
		?>
      </i>&nbsp;<span class="my-badge my-red"><?php echo $n; ?></span></a>
        <a href="javascript:void(0)" class="closebtn" onclick="my_close()"><i class="fa fa-angle-double-left my-xxlarge"></i></a>
        <a href="changepwd.php" class="my-bar-item">Change Password</a>
        <a href="logout.php" class="my-bar-item">Log Out</a>
    
    </div>

    <a href="javascript:void(0)" class="mya my-hide-small my-hide-medium" id="openNav" style="margin-top:40px;" onclick="my_open()"><i class="fa fa-angle-double-right my-xxxlarge"></i></a>
    <a href="javascript:void(0)" class="mya my-hide-large" id="openNav" style="margin-top:150px;" onclick="my_open()"><i class="fa fa-angle-double-right my-xxxlarge"></i></a>
    <div id="main">
   
        <header>
        <div class="my-container my-card-4" style="height: 180px; max-width:1600px; background: linear-gradient(to left, #03553a, #03558a);  border-radius: 0 0 50% 50%/0 0 100% 100%; margin:-17px auto 0;">
        <img src="img/logo1.png" class="img1"> 
        <div class="my-container my-xxlarge" style="text-align: center; color: rgb(233, 232, 232); margin-top:10px;">
         <h2 style="font-family: 'Varela Round', sans-serif;">STUDENT MANAGEMENT<h2>
          <h1 style="font-size:55px; font-family: 'Varela Round', sans-serif;">JEC MCA</h1>
        </div>
        </div>
        </header>

            <br><br><br><br><br><br><br>
            <div class="my-content" style="max-width:1450px;">
            <div class="my-row-padding">

              <div class="my-third glass">
                <div class="container">
                 <div class="my-card" style="height: 270px; border-radius: 10px; text-align: center;background: linear-gradient(to top, #03553a, #03558a); ">
                  <div class="overlay" style="border-radius: 10px; ">
                           <?php 
                           include "connect.php";
                            $str="select * from students where board=1  and status = 1;";
                            $result=mysqli_query($link,$str);
                            $n=mysqli_num_rows($result);
                          ?>
                    <div class="text"><i class="fa fa-user my-xxlarge"></i><br>Total Students <br> <?php echo $n ?> 
                    <br><p><a href="dustudents.php"><button class="my-btn my-hover-white my-round-xxlarge my-wide my-border my-border-white"> View </button></a></p> </div>
                  </div>
                 <h2 style="padding-top: 60px; color:#fff"><i class="fa fa-mortar-board my-xxlarge"></i><br>DIBRUGARH <br>UNIVERSITY</h2>
                 </div>
               </div>
               </div>

               <div class="my-third glass">
                <div class="container">
                <div class="my-card" style="height: 270px;border-radius: 10px; text-align: center; background: linear-gradient(to top, #03553a, #03558a);">
                  <div class="overlay2" style="border-radius: 10px;">
                          <?php 
                            $str="select * from students where board=2 and  status = 1;";
                            $result=mysqli_query($link,$str);
                            $n=mysqli_num_rows($result);
                          ?>
                    <div class="text"><i class="fa fa-user my-xxlarge"></i><br>Total Students  <br> <?php echo $n ?> 
                    <br><p><a href="astu3students.php"><button class="my-btn my-hover-white my-round-xxlarge my-wide my-border my-border-white">View</button></a></p></div>
                  </div>
                  <h2 style="padding-top: 60px;color:#fff"><i class="fa fa-mortar-board my-xxlarge"></i><br>ASTU<br> (3 YEARS COURSE)</h2>
                  </div>
               </div>
               </div>

               <div class="my-third glass">
                <div class="container" >
                <div class="my-card" style="height: 270px;border-radius: 10px; text-align: center;background: linear-gradient(to top, #03553a, #03558a);">
                  <div class="overlay3" style="border-radius: 10px;">
                         <?php 
                            $str="select * from students where board=3 and  status = 1;";
                            $result=mysqli_query($link,$str);
                            $n=mysqli_num_rows($result);
                          ?>
                    <div class="text"><i class="fa fa-user my-xxlarge"></i><br>Total Students <br>  <?php echo $n ?> 
                    <br><p><a href="astu2students.php"><button class="my-btn my-hover-white my-round-xxlarge my-wide my-border my-border-white">View</button></a></p></div>
                   </div>
                  <h2 style="padding-top: 60px;color:#fff"><i class="fa fa-mortar-board my-xxlarge"></i><br>ASTU<br> (2 YEARS COURSE)</h2>
                  </div>
               </div>
               </div>

             </div>


<div class="my-container my-hide-small">
  <img src="img/home.svg" class="image">
</div> 


          </div>
          <div class="footer my-card-4">
              <p>&#169 J.E.C. MCA 2021, Developed by .....</p>
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
        

        <script type="text/javascript" src="vanilla-tilt.js"></script>
        <script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".glass")
  , {
		max: 10,
		speed: 20
	});
</script>

</body>
</html>
