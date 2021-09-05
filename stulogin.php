<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
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
</style>
</head>
<body style="background: linear-gradient(to left, #03553a, #03558a);">

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
            <form method="post" class="sign-in-form" action="loginstu.php" onsubmit="return validation(); autocomplete="off">
                    <h2 class="title">Login To JEC MCA<br>
    Student Management</h2>
                    <div class="input-feild" style="display:flex;">
                        
                    <input  type="text" placeholder="Enter Your Roll No." name="roll" required autocomplete="off">
                    </div>
                                       
                     <button class="my-btn btn solid" type="submit" name="submit" >Login</button>
                                              
                     </div>
                </form>
                <div class="my-white bar"></div>
                <img src="img/login.svg" class="image">
                <p class="para">
                  Are you an admin ? <a href="index.php">Login here</a>
                </p>
            </div>
        </div>














<?php
if(isset($_GET["log"]))
{
$x=$_GET["log"];
if($x==1){
echo '<script> alert("Roll No. not found"); </script>';
}
}

?>
    
</body>
</html>