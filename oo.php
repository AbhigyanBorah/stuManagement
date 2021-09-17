<?php
	include("connect.php");
	if(isset($_POST["submit"]))
	{
        $n=$_POST["n"];
        for($i=1;$i<=$n;$i++)
     {
            $scode=$_POST[$i."scode"];
            $sname=$_POST[$i."sname"];
            $internal=$_POST[$i."internal"];
            $final=$_POST[$i."final"]; 
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
        }
        		
        if($grade=="F"){
            $result1=mysqli_query($link,"insert into back values('$roll','$sem','$bid','$scode','$sname','$internal','$final','$total','$grade','$back','$percentage')"); 
        } 
        

		$result=mysqli_query($link,"insert into academics values('$roll','$sem','$bid','$scode','$sname','$internal','$final','$total','$grade','$status','$percentage')");
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
	}
?>