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
   $execute=mysql_query($sql);
   $count = mysql_num_rows($execute);
   
   if($count>0)
   {   
       echo "<table>
  <tr title='Priority Table'>
    <th title='Notice having Highest Prioirty in DisplayList from Top to Down'>PRIORITY ORDER:</th>
    <th  title='Identify Using Notice Title'>NOTICE TITLES:</th>
	<th title='Swap the Priority Order as Required.'>SWAP PRIORITY LEVELS:</th>
    
  </tr>";
        
		$s=0;
	   while($row=mysql_fetch_assoc($execute))
	   {
		   $title=$row['ntc_title'];
		   $id=$row['ID'];
		   if($s==0)
		   {  $disable="disabled"; 
	          $ttl="Swapping is Disabled."; 
			  $idd="";$titlee="";}
		   else
		   {    $idd=$id;$titlee=$title;
				$disable="";
				$ttl="Click to Swap Priority.";
		   }
		   echo 
		   "<tr>
  <td style='width:10%'><b><font color='darkRed' size=5>#".($count-$id+1)."</font></b></td>
    <td><b><font style='font-family: 'Questrial', sans-serif;'>".$title."<b></font></td>
    <td> <button ".$disable." title='".$ttl."' class='btn btn-sm btn-primary' id='btnprior' onclick=set_prior(".$idd.",'".$titlee."')>
	<span class='glyphicon glyphicon-resize-vertical'></span>&nbsp;Swap</button></td>
    
  </tr>
		   ";
		   $s++;
		   
	   }
	   
	   
	   echo "</table>";
   }
   else
   {
	   echo"No Notices Found for Priority Update.";
   }	   
   
   
   
   
   ?>
   
   