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
				
		$result=mysqli_query($link,"UPDATE academic SET bid='$bid',sub1marks='$m1',sub2marks='$m2',sub3marks='$m3',sub4marks='$m4',sub5marks='$m5',total='$total',cgpa='$cgpa',status='$status' WHERE semester=$sem");
		
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