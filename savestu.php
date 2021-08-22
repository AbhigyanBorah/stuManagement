<?php
	include("connect.php");
	if(isset($_POST["submit"]))
	{
		
        $roll=$_POST["roll"];
        $regno=$_POST["regno"];
		$name=$_POST["name"];
        $email=$_POST["email"];
		$add=$_POST["address"];
		$dob=$_POST["dob"];
		$phone=$_POST["phone"];
		$qualification=$_POST["qualification"];
		$batch=$_POST["batch"];
        $board=$_POST["board"];

		
		$filename=$_FILES["image"]["name"];
		$filetemp=$_FILES["image"]["tmp_name"];
		$folder="images/".$filename;
		move_uploaded_file($filetemp,$folder);
		
        
				
		$result=mysqli_query($link,"insert into personal values('$roll','$regno','$name','$email','$add','$dob','$phone','$qualification','$batch','$board','$folder')");
		
		
	}
?>