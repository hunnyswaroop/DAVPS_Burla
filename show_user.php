<?php


 
 require('connect.php');
 require('del.php');
 date_default_timezone_set('asia/calcutta');
 
 $d1=date('j',time());
			$d2=date('m',time());
			$d3=date('Y',time());
			$date = $d1."/".$d2."/".$d3;	  
			      
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
	$exec = mysql_query($sql);
	
	echo "<br><font size='3' color='darkRed' style='font-family: 'Questrial', sans-serif;' title='Check out Current Notices by the School'><b>&nbsp;&nbsp;<u>CURRENT NOTICES</u></b></font>
	<ul style='list-style-type:square;margin:5px 2px 0px 0px'>";
	
	if(mysql_num_rows($exec)>0)
{	
	while($row=mysql_fetch_assoc($exec))
    {
		$con=$row['ntc_content'];
		$link=$row['ntc_link'];
		$new=$row['ntc_new'];
		$date=$row['ntc_date'];
		if($link!="")
			echo "<a href='".$link."'>";
		
		echo "<font  style='text-align:left;font-family: 'Questrial', sans;'><li style='margin-bottom:5px'>";
		
		echo $con;
		if($new=='Y')
			echo "<img height=16 width=33 src='images/new.gif' border='0'>";
		
		echo "</li></font>";
		
		if($link!="")
			echo "</a><br>";
		
		
		
		
		
	}
}
else
{
	echo "<li>No Notices Found</li>";
}	

?>