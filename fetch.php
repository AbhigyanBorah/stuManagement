<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "new");
$output = '';
$query = '';

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM personal
  WHERE roll LIKE '%".$search."%'
  OR regno LIKE '%".$search."%' 
  OR name LIKE '%".$search."%' 
 
 ";
}
else
{
 $query = "
  SELECT * FROM personal ORDER BY roll
 ";
}


$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th> Roll</th>
     <th>Name</th>
     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["roll"].'</td>
    <td>'.$row["name"].'</td>
    

  
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>