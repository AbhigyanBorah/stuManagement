<?php
	include("connect.php");
	if(isset($_POST["submit"]))
	{
        $roll=$_POST["roll"];
        $sem=$_POST["sem"];
		$bid=$_POST["bid"];
        $m1=$_POST["sub1"];
		$m2=$_POST["sub2"];
		$m3=$_POST["sub3"];
		$m4=$_POST["sub4"];
		$m5=$_POST["sub5"];
		$cgpa=$_POST["cgpa"];
        $status=$_POST["status"];
        
        $total=$m1+$m2+$m3+$m4+$m5;
				
		$result=mysqli_query($link,"insert into academic values('$roll','$sem','$bid','$m1','$m2','$m3','$m4','$m5','$total','$cgpa','$status')");
		
		if($result)
		{
			header("location:DUstuDetails.php?id=$roll");	
		}
		else
		{
			echo mysqli_error($link);	
		}
	}
?>