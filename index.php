


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/my.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Login</title>
<style>
body{
    font-family: 'Montserrat', sans-serif;
}
body, html {
height: 100%;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  
}
/* 
button {
  background-color: #036875;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
} */

/* .image{
  position:absolute;
    width:600px;
    top:30%;
    left:45%;
    z-index:997;
    margin-bottom:81px;
    margin-right:50px;
} */



</style>
</head>
<body style="background: linear-gradient(to left, #03553a, #03558a);">
    

<!-- <div class="box" ">
    <div class="my-card-4">
    <div class="form">
      <div class="title">
        Login To JEC MCA<br>
        Student Management
      </div>
      <form method="post" style="z-index:999;" action="login.php" onsubmit="return validation(); ">

        <label><b>Username</b></label>
      <input  class="my-input" type="text" placeholder="Enter Username" name="username" required>
      <br>
      <label><b>Password</b></label>
      <input class="my-input" type="password" placeholder="Enter Password" name="password" required>
      <br><br>
      <button class="my-btn my-text-white" type="submit" name="submit" style="background: linear-gradient(to left, #03553a, #03558a);">Login</button>
      <label>
      </form>
    </div>
  </div>
  </div> -->
   









  <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                <form method="post" class="sign-in-form" action="login.php" onsubmit="return validation(); autocomplete="off">
                        <h2 class="title">Login To JEC MCA<br>
        Student Management</h2>
                        <div class="input-feild" style="display:flex;">
                            
                        <i class="fa fa-user"></i><input  type="text" placeholder="Username" name="username" required autocomplete="off">
                        </div>
                        <div class="input-feild" style="display:flex;">
                            <i class="fa fa-lock"></i>
                            <input type="password" placeholder="Password" name="password" required>
                         </div>
                         
                         <button class="my-btn btn solid" type="submit" name="submit" >Login</button>
                                                  
                         </div>
                    </form>
                    <div class="my-white bar"></div>
                    <img src="img/login.svg" class="image">
                    <p class="para">
                      Are you a student ? <a href="stulogin.php">Login here</a>
                    </p>
                </div>
            </div>











  


  <?php
  if(isset($_GET["log"]))
  {
    $x=$_GET["log"];
    if($x==1){
    echo '<script> alert("Wrong Username or Password"); </script>';
  }
}
  
?>
 

</body>
</html>
