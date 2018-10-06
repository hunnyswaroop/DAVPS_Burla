<?php
   /*-------------------------------------------------------------------------------------------------------------------*/
   $uvwdxhyidbiwqycgfuyreciyrqeiycbreiyqhiyqebrrecuyeruyfgeuguygeyuguygwecuygclywgelcygelyigc;
   //---------------------------------------------------------------------------------------------------------------------
   
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
   
   $para=$_REQUEST['param'];
  if($para!="") 
  { if($para==15)
	$sql="truncate table notice";
   else
    $sql="delete from notice where id='$para'";

     $ex=mysql_query($sql);
   
     if($ex)
	   echo "true";
    else
	   echo "false";
  }
   else
	   echo "failed";
   ?>