<?php
require('connect.php');
date_default_timezone_set('asia/calcutta'); 

/*---------------------------------------------------------------------------------
-----------------------------------------------------------------------------------
---------------------*/
      $ddgdgvwdgxvwevxtqvewkvxWEVICYVEUYDVCLYEVWCIYWVEUCVUVCVWYVYUVYUvyvwwxyuqweviyvcyiqvecyve;
      $kjbcberucbeiurwcubiubvtrvbiutrbvbvuberutbvoubvrutvbutrbuerwvbulyrvbeluwyrvwelruvewuyvyl;	  
 /*----------------------------------------------------------------------------------------------------    */ 
	  
	 
	
	
	        $dd = $_REQUEST['dd'];
			$mm = $_REQUEST['mm'];
			$yyyy = $_REQUEST['yyyy'];
			
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
					
				
			
		
			
		$sql="select * from notice";
			$ex=mysql_query($sql);
			
			if(mysql_num_rows($ex)>=6)
				die("MAX");
			
			
	
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
        
		$sql="select * from notice where ntc_title='$ntc_title' or ntc_content='$ntc_content'";
		$result = mysql_query($sql);
 
			if(mysql_num_rows($result)>0)
				die("exists");
    $sql = "select * from notice order by id asc";
		$max=mysql_query($sql);
		
		$id = 0;
		while($row=mysql_fetch_assoc($max))
		{
			$id = $row['ID']; 
		}
		
	     ++$id;
	
		$sql="insert into notice(ID,ntc_title,ntc_link,ntc_content,ntc_date,ntc_expire,ntc_new) values('$id','$ntc_title','$ntc_link','$ntc_content','$date','$expire','Y')";
        $r = mysql_query($sql);
        
		
		
		
			if($r)	
				echo "true";
            else
				echo"query_failed!";
             				
    }
	else
	{
		echo "INIT_FAILED";
	}
	
	
   

 
/*
  
	
	CREATE TABLE notice(
ID INTEGER PRIMARY KEY ,
ntc_title VARCHAR( 30 ) NOT NULL ,
ntc_link longtext NOT NULL ,
ntc_content longtext NOT NULL ,
ntc_new char(2),
ntc_date VARCHAR( 10 ) NOT NULL ,
ntc_expire VARCHAR( 10 ) NOT NULL
)


  */  
   
?>

	