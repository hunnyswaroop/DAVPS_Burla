<?php

    require('connect.php');
	
	$var = 1;       
			$sql="select * from notice order by id asc";
			$ex=mysql_query($sql);
	while($row=mysql_fetch_assoc($ex))
					{
						$id = $row['ID'];
						
						$calc = $id - ($id-$var);
						
						  $sqll = "update notice set id ='$calc' where id='$id';";
						  $df=mysql_query($sqll);
						
						$var++;
						
					}	
    $sql="select * from notice order by id desc";
	$ex=mysql_query($sql);
	
	
	if(mysql_num_rows($ex)>0)
	{	

      
  
    echo "<font style='font-family:'Ubuntu', sans-serif;'>";
  
	
	while($row=mysql_fetch_assoc($ex))
	{
		$title=$row['ntc_title'];
		$idd=$row['ID'];
		
		echo "<option value=".$idd.">".$title."</option>";
	}
	}
	else
	{
		echo "<option> No Notice Title</option>";
	}
    echo "</font>";


?>