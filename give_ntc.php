<?php
require('connect.php');
   
   $para=$_REQUEST['param'];
   
   if($para!="")
   {$sql = "select * from notice where id='$para'";
   $ex=mysql_query($sql);
   
   if(mysql_num_rows($ex)>0)
	{	
   
	while($row=mysql_fetch_assoc($ex))
	{
		$link=$row['ntc_link'];
		$cont=$row['ntc_content'];
		$expire=$row['ntc_expire'];
		
		echo $link."^".$cont."^".$expire;
	}
	}
	else
		echo "false";
   }
?>