<?php
// Array with names


// get the q parameter from URL
$q = $_REQUEST["q"];



  include('connect.php');
   
 
	  
   
   
   $sql="select * from alumni where name like '$q%'";	

  $r=mysql_query($sql);
  
  $c=1;$gen=" ";
while($row=mysql_fetch_assoc($r))
	{
		$name=$row['name'];
		$date=$row['pyear'];
	    $gender=$row['gender'];
		$email=$row['email'];
		$stream=$row['stream'];
		$branch=$row['branch'];
		$uni=$row['uni'];
		$study=$row['study'];
		$comp = $row['company'];
		$comp_loc = $row['company_loc'];
		
		if($gender=='Male')
		{
			$gen="He";
		}
		else
		{
			$gen="She";
		}
		if($c%2==0)
			{
				$align="Right";$side="right";
			}
		else
		{
			$align="Left";
			$side="left";
		}
		echo "
		      <h4><div style='border-$side:medium Green solid;text-align:$align; border-radius:0em;width:80%;' >
			  <font color='darkGreen' size='4'>
			  <div style='padding:10px;'>".$name."</font><font size='2'><br>Passout: ".$date."<br>";
			  if($study=="studied" || $study=="job")
			    echo $gen." completed ";
			  else
				  echo $gen." is doing ";
			  
			  echo $stream;
			if($branch!="")
			  echo " in <i>".$branch."</i>";
		  
		  echo " at <B>".$uni."</B>.";
		  
            if($comp != "")
				echo "<br><i> Now, ".$gen." is doing job in <b>".$comp."</b> at <b>".$comp_loc."</b></i>";
			   
			   echo "</font></div></div></h4></B>";
			   
		     
		
		
		echo "";
		$c++;
		
	}  
	if($c==1)
		echo"<br> <h3><p><b>Sorry,</b> We didn't Found anyone from this Year.</h3><font size=2>Are you an alumni of our school? | <a href='alumni_reg.php'>Register here.</a></font></p>";

?>