<?php

	require('connect.php');
	
	$sql = "select * from notice";
	$res = mysql_query($sql);
	
	$rc = mysql_num_rows($res);
	$list = array();
	if($rc>0)
	{
		while($row=mysql_fetch_array($res))
		{
			$id = $row['ID'];
			$content = $row['ntc_content'];
			$title = $row['ntc_title'];
			
			array_push($list,array(
			     
				 "id"=>$id,
				 "title"=>$title,
				 "content"=>$content,
				 
				 
				 
				 
			));
			
		}
		
		echo json_encode(array("list"=>$list));
	}
	

?>