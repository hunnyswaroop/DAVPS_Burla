
<?php
    
    $servername="localhost";
	$username="root";
	$password="";
	$dbname="Student";	
	
$connect = mysql_connect($servername,$username,$password);
         
        @mysql_select_db($dbname) or die( "Unable to select database");
	
	if(!$connect)
	{ echo"<br><br><br><br><br><br><br><br>";
      include "alert.php";
      
	   die(" <br><br><center>
	         <B><font face='arial'>
		     Unable to Connect With SQL Server!
		     </I></B>
		     </font></center> ") ;
	  
	}
	
 ?>	