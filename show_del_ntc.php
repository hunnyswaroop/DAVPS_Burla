<?php

    require('connect.php');
    $sql="select * from notice order by id desc";
	$ex=mysql_query($sql);
	
	
	if(mysql_num_rows($ex)>0)
	{	echo "<table title='Notices which are currently showing up on the Homepage'>
  <tr><font style='font-family:'Ubuntu', sans-serif;'>
    <th title='Title of the Notice'>NOTICE TITLE:</th>
	<th title='Date when Notice was Published'>PUBLISHED ON:</th>
    <th title='Date when Notice will Expire'>EXPIRES ON:</th>
	<th title='Set which notice to Flash NEW Tag'>(<i>NEW</i> TAG) <span class='glyphicon glyphicon-certificate'></span> FLASH:</th>
    <th title='Delete the Notices Individually'>DELETE NOTICE:</th>
  </tr>";
  
	
	while($row=mysql_fetch_assoc($ex))
	{   
        
		$title=$row['ntc_title'];
		$date=$row['ntc_date'];
		$expire=$row['ntc_expire'];
		$del=$row['ID'];
		$new=$row['ntc_new'];
		
		
		
		
		if($new=='Y')
		{
			$clas="btn btn-success btn-xs";
			$clas2="glyphicon glyphicon-flash";
			$label="|&nbsp; Remove";
			$newt="Click to Remove New Tag Flasher";
		}
		else{
			$clas="btn btn-warning btn-xs";
			$label=" | ADD";
			$clas2="glyphicon glyphicon-log-in";
			$newt="Click to ADD New Tag Flasher";
		}
		
		echo "<tr>
             <td><font style='font-family:'Ubuntu', sans-serif;'>".$title."</td>
			 <td>".$date."</td>
			 <td>".$expire."</td>
			 <td> <button class='".$clas."' onclick=toggle_new(".$del.",'".$new."') title='".$newt."'><span class='".$clas2."'></span>&nbsp;".$label."</button>
			  </td>
			 <td> <button class='btn btn-sm btn-primary' title='Click to delete this Notice' onclick='Confirm.render(".$del.",1)'>
			 Delete <span class='glyphicon glyphicon-remove-circle'></span> </button> </td> </tr>";
	}
	echo "</table></font>";}
	else
	{
		echo "<font style='font-family:'Ubuntu', sans-serif;'> No Active Notices Found.</font>";
	}