

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/my.css">
<link rel="stylesheet" type="text/css" href="css/stustyle.css">
<link rel="stylesheet" type="text/css" href="css/sidenav.css">

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
    z-index:998;
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

.image{
  position:absolute;
    width:500px;
    right:0;
    bottom:0;
    z-index:-1;
    margin-bottom:81px;
    margin-right:50px;
}

</style>
</head>
<body class="parallax" style="user-select:none;">

<?php include "connect.php"; 
$roll=$_GET["roll"]; 
$result=mysqli_query($link,"select * from students where roll=$roll;");
$row=mysqli_fetch_array($result);
$name=$row["name"];

?>

<div class="sidenav my-bar-block my-card-4 my-animate-left" style="display:none;" id="mySidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="my_close()"><i class="fa fa-angle-double-left my-xxlarge"></i></a>
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

        <section>
            <h1 class="heading"> WELCOME <br><?php echo $name; ?></h1>
</section>
            
            <div class="my-content" style="max-width:1050px; margin-top:3%">
            <div class="my-row-padding">

              <div class="my-half glass">
                <div class="container">
                 <?php echo'<a href="stuDetails.php?id='.$roll.'" style="text-decoration:none">';?>
                 <div class="my-card" style="height: 170px; border-radius: 10px; text-align: center;background: linear-gradient(to top, #03553a, #03558a); ">
                 <div class="overlay" style="border-radius: 10px; ">
    <div class="text"><h2>View Your<br>Personal Details</h2></div>
  </div>
                 <h2 style="padding-top: 35px; color:#fff">View Your<br>Personal Details</h2>
                 </div>
               </div></a>
               </div>

               <div class="my-half glass">
                <div class="container">
                <?php echo'<a href="stuAcademic.php?id='.$roll.'" style="text-decoration:none">';?>
                <div class="my-card" style="height: 170px;border-radius: 10px; text-align: center; background: linear-gradient(to top, #03553a, #03558a);">
                <div class="overlay2" style="border-radius: 10px; ">
    <div class="text"><h2>View Your<br>Academic Details<h2></div>
  </div>
                  <h2 style="padding-top: 35px;color:#fff">View Your<br>Academic Details</h2>
                  </div>
               </div></a>
               </div>

               
               </div>

             


<div class="my-container my-hide-small">
  <img src="img/stuhome2.svg" class="image">
</div> 


          </div>
          <div class="footer my-card-4">
          <p>&#169 J.E.C. MCA 2021, Developed by .....</p>
          </div>



      </div>


      
</div>


      

        <script type="text/javascript" src="vanilla-tilt.js"></script>
        <script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".glass")
  , {
		max: 10,
		speed: 20
	});
</script>

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
