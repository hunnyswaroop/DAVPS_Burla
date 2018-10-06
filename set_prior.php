<?php
  
   require('connect.php');
   
   $sql="select * from notice";
   $ex=mysql_query($sql);
   $count = mysql_num_rows($ex);
   
   $id=$_REQUEST['id'];
   $title=$_REQUEST['title'];
   
   
   if($id!="" && $title!="" && $count>0)
   {   
       
	   $id2=$id+1;
       $sql="update notice set id = '$id' where id = '$id2'";
	   $exec1=mysql_query($sql);
	   
	   $sql="update notice set id = '$id2' where ntc_title='$title'";
	   $exec2=mysql_query($sql);
	   
	   if($exec1)
	   {
		   if($exec2)
			   echo "true";
		   else
			   echo "false1";
	   }
		   
	   else
		   echo "false2";
	   
   }
   else
	   echo "crashed";


 ?>