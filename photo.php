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
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Home</title>
     
      <style>
      .student{
                 text-align:center;
              }
      .header{
                background:white no-repeat scroll 100px 18px;
                height:200px;
                overflow:hidden;
                padding-left:1250px;
                     
                      
             }

        .table{
                padding-left: 50px; 
                padding-top:100px;
              }
        

      </style>

</head>
<body>
    <h1 class="student">STUDENT DETAILS</h1>
    
      <div class="my-container my-card" style="height:220px; width:220px; float:left;">
      <img style="height:220px; width:220px;" src="img/22.jpg"></img>
      </div>
    

    <table class="table">
    <tr>
      <td>Name: </td>
    </tr>
    <tr></tr>
    <tr>  
      <td>Roll No: </td>
    </tr>
    <tr></tr>
    <tr>
      <td>Registration no: </td>
    </tr>
    <tr></tr>
    <tr>
      <td>Address: </td>
    </tr>
    <tr></tr>
    <tr>
      <td>Phone No: </td>
    </tr>
    <tr></tr>
    <tr>
      <td>Semester: </td>
      
    </tr>
    <tr></tr>
    <tr>
      <td>University: </td>
      
    </tr>
    <tr></tr>
    <tr>
      <td>Previous Degree: </td>
      
    </tr>
    <tr></tr>
    <tr>
      <td>Year of Addmission: </td>
      
    </tr>
    <tr></tr>
    <tr>
      <td>Year of Passing: </td>
      
    </tr>
    </table>
    <h2 style="text-align:center">ACADEMIC DETAILS:</h2>
     
     <h3 style="padding-left:50px">First Semester:</h3>
    <table border="1" style="width:100%">
        <tr>
          <th>sub1</th>
          <th>sub2</th>
          <th>sub3</th>
          <th>sub4</th>
          <th>sub5</th>
        </tr>
        <tr>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
        </tr>
    </table>

    <h3 style="padding-left:50px">Second Semester:</h3>
    <table border="1" style="width:100%">
        <tr>
          <th>sub1</th>
          <th>sub2</th>
          <th>sub3</th>
          <th>sub4</th>
          <th>sub5</th>
        </tr>
        <tr>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
        </tr>
    </table>

    <h3 style="padding-left:50px">Third Semester:</h3>
    <table border="1" style="width:100%">
        <tr>
          <th>sub1</th>
          <th>sub2</th>
          <th>sub3</th>
          <th>sub4</th>
          <th>sub5</th>
        </tr>
        <tr>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
        </tr>
    </table>

    <h3 style="padding-left:50px">Fourth Semester:</h3>
    <table border="1" style="width:100%">
        <tr>
          <th>sub1</th>
          <th>sub2</th>
          <th>sub3</th>
          <th>sub4</th>
          <th>sub5</th>
        </tr>
        <tr>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
        </tr>
    </table>

    <h3 style="padding-left:50px">Fifth Semester:</h3>
    <table border="1" style="width:100%">
        <tr>
          <th>sub1</th>
          <th>sub2</th>
          <th>sub3</th>
          <th>sub4</th>
          <th>sub5</th>
        </tr>
        <tr>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
        </tr>
    </table>

    <h3 style="padding-left:50px">Sixth Semester:</h3>
    <table border="1" style="width:100%">
        <tr>
          <th>sub1</th>
          <th>sub2</th>
          <th>sub3</th>
          <th>sub4</th>
          <th>sub5</th>
        </tr>
        <tr>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
          <th>marks</th>
        </tr>
    </table>
    
     

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