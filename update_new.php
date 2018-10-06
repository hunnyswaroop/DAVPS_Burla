<?php

  require('connect.php');
date_default_timezone_set('asia/calcutta'); 
$id = $_REQUEST['id'];
$act = $_REQUEST['act'];

/*---------------------------------------------------------------------------------
-----------------------------------------------------------------------------------
---------------------*/
      $ddgdgvwdgxvwevxtqvewkvxWEVICYVEUYDVCLYEVWCIYWVEUCVUVCVWYVYUVYUvyvwwxyuqweviyvcyiqvecyve;
      $kjbcberucbeiurwcubiubvtrvbiutrbvbvuberutbvoubvrutvbutrbuerwvbulyrvbeluwyrvwelruvewuyvyl;	  
 /*----------------------------------------------------------------------------------------------------    */ 
	  
	 
	$sql="select * from notice";
			$ex=mysql_query($sql);
	if(mysql_num_rows($ex)>0)
	{   
			if($act=='Y')
				$act='N';
			else 
				$act='Y';
     
       $sql="update notice set ntc_new='$act' where id='$id'";
        $r = mysql_query($sql);
        
		    if($r)	
				echo "true";
            else
				echo"failed!";
	}
?>	