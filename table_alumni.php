<html>


<head>
<meta name="theme-color" content="darkRed" />
<link rel="shortcut icon" href="images1/shortcut.jpg"  />
<meta name="viewport" content=" initial-scale=0.2">
<link href="bootstr/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstr/https://code.jquery.com/jquery.js"></script>
<script src="bootstr/js/bootstrap.min.js"></script>
<title>Table Results</title>

</head>
<body>
<?php
    
    require('connect.php');


      $sql="CREATE TABLE alumni( name char(40),pyear char(10) , gender char(10),email char(50),mobile char(20),stream char(30),branch char(50),uni char(50),study char(20),company char(30),company_loc char(40))";
	
            if(mysql_query($sql))
	                 { echo "
				             
        <center>
        <div class='alert alert-success' style='margin-left:0px;margin-top:150px;width:70%;'> 
        <B><center>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requested table has been created!
		<a href='index.html.php'> 
		<button type='button' class='close' aria-hidden='true'>&times;</button>
		</a>
		<br><br>
			<a href='index.html'>
			<button type='Button' ><span class='glyphicon glyphicon-circle-arrow-left'></span>&nbsp;Go Back</button>
			</a>
		</center></div></center>
				            <br><br>"; }
	
	              else
	                 {echo "
				            <center>  
                             <div class='alert alert-danger' style='margin-left:0px;margin-top:150px;width:70%;'>
            <center>
			<a href='index.html'> 
		     <button type='button' class='close' aria-hidden='true'>&times;</button>
		    </a>
			<br><br>Requested Table was not created because ". mysql_error($connect)."
			<br><br>
			<a href='index.html'>
			<button type='Button' ><span class='glyphicon glyphicon-circle-arrow-left'></span>&nbsp;Go Back</button>
			</a>
			</center>
           </div> </center>
				            "; }
	
		
     
    
	?>

	
	</body>
	</html>
	
	