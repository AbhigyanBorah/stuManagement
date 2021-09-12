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
		$brd=0;
		if($board=="Dibrugarh University"){
			$brd=1;
		}
		elseif($board=="ASTU (3 years)"){
			$brd=2;
		}
		elseif($board=="ASTU (2 years)"){
			$brd=3;
		}

        $student=$_POST["student"];

		$str1="Select bid from boards where bname='$board'";
    $result1=mysqli_query($link,$str1);
	$row2=mysqli_fetch_array($result1);
    $bid=$row2[0];
				
		$result=mysqli_query($link,"UPDATE students SET  name='$name',email='$email',address='$add',dob='$dob',phone='$phone',qualification='$qualification' WHERE roll=$roll ");
		
		if($result)
		{
			if($student==1){
				header("location:stuDetails.php?ok=done&id=$roll");
			}
			elseif($brd==1){
				header("location:dustudents.php?ok=up1");
				}
				elseif($brd==2){
					header("location:astu3students.php?ok=up3");
				}
				elseif($brd==3){
					header("location:astu2students.php?ok=up2");
				}
				
		}
		else
		{
			echo mysqli_error($link);	
		}
	}
?>