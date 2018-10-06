<?php

  require('connect.php');
date_default_timezone_set('asia/calcutta'); 

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
            $dd = $_REQUEST['dd'];
			$mm = $_REQUEST['mm'];
			$yyyy = $_REQUEST['yyyy'];
			
			$d1=date('j',time());
			$d2=date('m',time());
			$d3=date('Y',time());
			$date = $d1."/".$d2."/".$d3;
			
			
	
	$ntc_title = $_REQUEST['ntc_title'];
	$ntc_link = $_REQUEST['ntc_link'];
	$ntc_content = $_REQUEST['ntc_content'];
	
	if($ntc_link!="")
	{$ntc_link=ltrim($ntc_link,' ');
	$ntc_link=rtrim($ntc_link,' ');}
	
	$ntc_content=ltrim($ntc_content,' ');
	$ntc_content=rtrim($ntc_content,' ');
	$ntc_content[0]= strtoupper($ntc_content[0]);
    
	$ntc_title = strtoupper($ntc_title);
	$ntc_title=ltrim($ntc_title,' ');
	$ntc_title=rtrim($ntc_title,' ');
	$ntc_title = str_replace(' ', '_', $ntc_title);
  
      $d = $dd - $d1;
      $m = $mm - $d2;
      $y = $yyyy - $d3;	  
	
	  if($y>0)
	   $chkdate="true";
		else if(($y==0)&&($d>0&&$m>=0||$d<=0&&$m>0))
			$chkdate="true";
		     else
			   $chkdate="false";	
	
	
	if($ntc_content!="" && $ntc_title!="" && $dd!="" && $mm!="" && $yyyy!=""&&$chkdate=="true")
	{	
       $expire = $dd."/".$mm."/".$yyyy;
        
 
			
    
		$sql="update notice set ntc_link='$ntc_link', ntc_content='$ntc_content',ntc_expire='$expire' where id='$ntc_title'";
        $r = mysql_query($sql);
        
		    if($r)	
				echo "true";
            else
				echo"failed!";
             				
    }
	else
	{
		echo "INIT_FAILED";
	}
	}
	else
		echo "EMPTY";
?>
