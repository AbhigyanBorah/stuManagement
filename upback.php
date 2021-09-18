<?php
	include("connect.php");
	if(isset($_POST["submit"]))
	{
        
            $scode=$_POST["scode"];
            $sname=$_POST["sname"];
            $internal=$_POST["internal"];
            $final=$_POST["final"]; 
            $roll=$_POST["roll"];
             $sem=$_POST["sem"];
		     $bid=$_POST["brd"];

             $total=$internal+$final;
        $grade; 
        $status;
        $percentage=($total/100)*100;

        
        if($internal<11 || $final<30){
            $grade="F";
        }
        elseif($percentage>=35 && $percentage<=44){
            $grade="P";
        }
        elseif($percentage>=45 && $percentage<=49){
            $grade="C";
        }
        elseif($percentage>=50 && $percentage<=59){
            $grade="B";
        }
        elseif($percentage>=60 && $percentage<=69){
            $grade="B+";
        }
        elseif($percentage>=70 && $percentage<=79){
            $grade="A";
        }
        elseif($percentage>=80 && $percentage<=89){
            $grade="A+";
        }
        elseif($percentage>=90){
            $grade="O";
        }
        

        if($grade=="F"){
            $status="Fail";
            $back="Pending";
        }
        else{
            $status="Pass";
            $back="Cleared";
        }
        		
        
            $result1=mysqli_query($link,"UPDATE back SET status='$back' WHERE semester=$sem and roll='$roll' and bid='$bid' and subjectcode='$scode'"); 
        
            $result=mysqli_query($link,"UPDATE STUDENTS SET status = '' where roll = '$roll' ");

		$result=mysqli_query($link,"UPDATE academics SET internal='$internal', final='$final', grade='$grade', status='$status' WHERE sem=$sem and roll='$roll' and bid='$bid' and subCode='$scode'");
     }
		if($result)
		{
			if($bid==1){
                header("location:DUstuDetails.php?ok=save&id=$roll");
                }
                elseif($bid==2){
                    header("location:ASTU3details.php?ok=save&id=$roll");
                }
                elseif($bid==3){
                    header("location:ASTU2Details.php?ok=save&id=$roll");
                }
            }		
		else
		{
			echo mysqli_error($link);	
		}
	
?>