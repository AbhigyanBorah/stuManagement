<?php
	include("connect.php");
	if(isset($_POST["submit"]))
	{
         $roll=$_POST["roll"];
        $sem=$_POST["sem"];
		$bid=$_POST["bid"];
        $scode=$_POST["scode"];
		$sname=$_POST["sname"];
		$internal=$_POST["internal"];
		$final=$_POST["final"];
        $count=$_POST["count"];
		
        $total=$internal+$final;
        $grade; 
        $status;
        $percentage=($total/100)*100;

        
        if($percentage<35){
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
        }
        else{
            $status="Pass";
        }
       

       

/*         echo $scode;
        echo '<br>';
        echo $sname;
        echo '<br>';
        echo $internal;
        echo '<br>';
        echo $final;
        echo '<br>';
        echo $roll;
        echo '<br>';
        echo $sem;
        echo '<br>';
        echo $bid;
        echo '<br>'; */
				
		$result=mysqli_query($link,"insert into academics values('$roll','$sem','$bid','$scode','$sname','$internal','$final','$total','$grade','$status','$percentage')");
		
		if($result)
		{
            $count=$count+1;
			header("location:addmarks.php?id=$roll&sem=$sem&scode=$scode&count=$count");	
		}
		else
		{
			echo mysqli_error($link);	
		}
	}
?>