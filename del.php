<?php
       require('connect.php');
	   date_default_timezone_set('asia/calcutta');
	   
			$d1=date('j',time());
			$d2=date('m',time());
			$d3=date('Y',time());
			$d2=$d2+0;
			$d1=$d1+0;
			$date = $d1."/".$d2."/".$d3;
			
			
			
             $sql ="delete from notice where ntc_expire='$date'";
			  mysql_query($sql);
			  
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
		
?>		