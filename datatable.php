

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/my.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

 <title>Home</title>
 <style>
body{
    font-family: 'Montserrat', sans-serif;
}

.nav{
    color:white;
}

.nav:hover{
  color: red;
  cursor: pointer;
}
header{
  position: sticky;
  top:0;
  z-index: 999;
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
  <header>
<div class="my-container my-card-4" style="height: 150px; max-width:1600px; background: linear-gradient(to left, #03553a, #03558a);  border-radius: 0 0 50% 50%/0 0 100% 100%; margin:-17px auto 0;">
         <div class="my-container my-xxlarge" style="text-align: center; color: rgb(233, 232, 232); margin-top:5px;">
         <h2>JEC MCA STUDENT MANAGEMENT </h2>
        
        <div class="my-container">
        <a class="my-padding" onclick="handleBackward()"><i class="fa fa-angle-double-left my-xxlarge nav"></i></a>
        <a href="home.php" class="my-padding"><i class="fa fa-home my-xxlarge nav"></i></a>
        <a  class="my-padding" onclick="handleForward()"><i class="fa fa-angle-double-right my-xxlarge nav"></i></a>
      </div>
      </div>
      </div>
</header>


    <div class="my-content">
        <div class="my-container">
            <br><br><br><br>
        <a href="addDustudent.php" class="my-btn my-block my-padding my-text-white" style="width:240px;margin-right:5%; text-decoration:none; margin-bottom:10px; background-color: #770677; float:left;"><i class="fa fa-user-plus my-large"></i> &nbsp;  ADD NEW STUDENT &nbsp; </a>
  
        <div class="my-container" style="float:right;">
 
        </div>

        <br><br><br>
        <table id="datatable" class="my-table-all" >
                <thead >
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;">Roll No.</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;">Name</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;">Batch</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;"></th>
                </thead>
                <tbody>

                    <?php
                      include "connect.php";
                      $sql="select * from personal where board=1;";
                      $result=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          echo'<tr class="my-white" style="border-width: 0px;">';
                                echo'<td style="width:20%; text-align:center;">'.$row[0].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[2].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[8].'</td>';
                                echo'<td style="width:20%; text-align:center;" class="my-hover-text-red"> <a href="DUstuDetails.php?id='.$row[0].'">More Details</a></td>';
                                
                        echo'</tr>';
                          }   
                      ?>   
                    
                </tbody>
            </table>
        
    </div>
</div>




<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>


<script>
$(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>





</body>
</html>