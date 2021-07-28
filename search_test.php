

<!doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
</style>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>


</head>



<body>
<div id="navbar">
<button class="my-btn"><a href="home.php"><i class="fa fa-home my-xlarge"></i></a></button>
</div>


    <div class="my-content">
        <div class="my-container">
            <br><br><br><br>
        <a href="addDustudent.html" class="my-btn my-block my-padding my-text-white" style="width:240px;margin-right:5%; margin-bottom:10px; background-color: #065f7a; float:left;"><i class="fa fa-user-plus my-large"></i> &nbsp;  ADD NEW STUDENT &nbsp; </a>
  
        <div class="my-container" style="float:right;">
     <form action="/action_page.php">

     <input type="text" name="search_text" id="search_text" placeholder="Search" class="my-input"  style="float:left; width:60%;"> </input>
     <div id="result"></div>

    

     
     </form>
        </div>

        <br><br><br>
        <table class="my-table-all" id="myTable">
                <thead >
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #065f7a;">Roll No.</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #065f7a;">Name</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #065f7a;">Batch</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #065f7a;"></th>
                </thead>
                <tbody>

                    <?php
                      include "connect.php";
                      $sql="select * from personal;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          echo'<tr class="my-white" style="border-width: 0px;">';
                                echo'<td style="width:20%; text-align:center;">'.$row[0].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[2].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[8].'</td>';
                                echo'<td style="width:20%; text-align:center;"> <a href="DUstuDetails.php?id='.$row[0].'">More Details</a></td>';
                                
                        echo'</tr>';
                          }   
                      ?>   
                    
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





<?php
  if(isset($_GET["log"]))
  {
    $x=$_GET["log"];
    if($x==1){
    echo '<script> alert("Student Added"); </script>';
    }
  }
?>

</body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>