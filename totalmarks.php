<?php

include("connect.php");
	if(isset($_POST["submit"]))
	{
        $roll=$_POST["roll"];
        $sem=$_POST["sem"];
		$bid=$_POST["bid"];
        
        
        

        $sql=mysqli_query($link,"Select SUM(total) from academics where roll=$roll AND sem=$sem");
        $row=mysqli_fetch_array($sql);
        //echo $totalmarks;
        $totalmarks=$row[0];
       // echo $totalmarks;
        


        $result2=mysqli_query($link,"insert into results values('$roll','$sem','$totalmarks',null, '$bid')");

        if($result2)
		{
            
			if($bid==1){
                header("location:DUstuDetails.php?ok=total&id=$roll");
                }
                elseif($bid==2){
                    header("location:ASTU3details.php?ok=total&id=$roll");
                }
                elseif($bid==3){
                    header("location:ASTU2Details.php?ok=total&id=$roll");
                }		
		}
		else
		{
			echo mysqli_error($link);	
		}

    }
?>