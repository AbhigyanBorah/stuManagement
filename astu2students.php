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
body{
    font-family: 'Montserrat', sans-serif;
}

.nav:hover{
  color: red;
  cursor: pointer;
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
</head>
<body>
<div id="navbar" class="my-container my-card-4" style="height: 180px; max-width:1600px; background: linear-gradient(to left, #03553a, #03558a);  border-radius: 0 0 50% 50%/0 0 100% 100%; margin:-17px auto 0;"></div>
         <div class="my-container my-xxlarge" style="text-align: center; color: rgb(233, 232, 232); margin-top:-165px;">
         <h2>JEC MCA STUDENT MANAGEMENT </h2>
        
        <div class="my-container">
        <a class="my-padding" onclick="handleBackward()"><i class="fa fa-angle-double-left my-xxlarge nav"></i></a>
        <a href="home.php" class="my-padding"><i class="fa fa-home my-xxlarge nav"></i></a>
        <a  class="my-padding" onclick="handleForward()"><i class="fa fa-angle-double-right my-xxlarge nav"></i></a>
      </div>
      </div>


    <div class="my-content">
        <div class="my-container">
            <br><br><br><br>
            <a href="addDustudent.html" class="my-btn my-block my-padding my-text-white" style="width:240px;margin-right:5%; margin-bottom:10px; background-color: #137a06; float:left;"><i class="fa fa-user-plus my-large"></i> &nbsp;  ADD NEW STUDENT &nbsp; </a>
  
            <div class="my-container" style="float:right;">
     <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search" class="my-input" style="float:left; width:60%;"></input>
      <button class="my-btn my-text-white" style="float:right;  margin-top: 8px;margin-right: 16px;font-size: 17px; background-color:#137a06; " type="submit"><i class="fa fa-search my-large"></i></button>
     </form>
        </div>

        <br><br><br>
        <table class="my-table-all">
                <thead >
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #137a06;">Roll No.</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #137a06;">Name</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #137a06;">Batch</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #137a06;"></th>
                </thead>
                <tbody>
                   
                          <tr class="my-white" style="border-width: 0px;">
                                <td style="width:20%; text-align:center;"></td>
                                <td style="width:20%; text-align:center;"></td>
                                <td style="width:20%; text-align:center;"></td>
                                <td style="width:20%; text-align:center;"> <a href="delnotices.php?id='.$row[0].'">More Details</a></td>
                                
                        </tr>
                        
                    
                </tbody>
            </table>
      
    </div>
</div>


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