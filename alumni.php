<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Our Alumni</title>
<link rel="shortcut icon"  href="images/shortcut.jpg" type="image/x-icon" />
<meta name="viewport" content=" initial-scale=0.2">
<link href="bootstr/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstr/https://code.jquery.com/jquery.js"></script>
<script src="bootstr/js/bootstrap.min.js"></script>

<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
    <script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "hello.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>










<style>
body{
	margin:0px;
	background:#DA4800; background:url(images/back.jpg);}
.g{color:#006; font-family:Calibri; font-size:20px;}
.h{color:#333; font-family:Calibri;font-size:18px; font-weight:700;}
.e{color:#06F; font-family:Calibri;font-size:18px; font-weight:700;}
#top_header{
	width:inherit;
	height:33px;
	background-image:url(images/header_back.jpg); background-repeat:none;
	}
#header{
	padding-top:0px;
	width:1024px;
	height:0px;
	margin:0px;
	color:#300F00;
	font-family:Calibri;
	font-size:18px;
	font-weight:200;
	float:left;
	}
#header_contain{
	margin-top:7px;
	margin-bottom:7px;
	margin-right:10px;

	}
#container{
	margin-top:0px;
	height:20px;
	width:1024px;
	float:left;}	

#menu{
	width:1024px;
	height:80px;
	background:url(images/main_header.jpg);
	float:left;
	
	}

#menu_content{
	width:auto;
	height:20px;
	color:#d3d3d3;
	margin-left:440px;
	margin-top:10px;
	font-family:Calibri;
	cursor:pointer;
	}
#menu_content a { text-decoration:none; color:#999; padding-left:10px;}
#menu_content a:hover{ color:#fff;}
#notice a { text-decoration:none; color:#666; padding-left:10px;}
#notice a:hover { color:#900;}

#menu_content ul {
  font-family:Calibri;
  font-size: 14px;
  margin: 0;
  padding-right: 0px;
  list-style: none;
}
#menu_content ul li {
  display: block;
  position: relative;
  float: left;
}
#menu_content li ul { display: none; margin-left:-40px; }
#menu_content ul li a {
  display: block;
  text-decoration: none;
  color: #ffffff;
  padding: 5px 5px 5px 20px;
  margin-left: 1px;
  border-radius:2px;
  white-space: nowrap;
}
#menu_content ul li a:hover {color:#fff;}
#menu_content li:hover ul {
  display: block;
  position: absolute;
}
#menu_content li:hover li {
  float: none;
  font-size: 12px;
}
#menu_content li:hover a { background:rgb(71,24,0); border-top:thin rgb(113,24,0) solid; }
#menu_content li:hover li a:hover { background:#311000; color:#d3d3d3; }


#main_body{
	height:auto;
	width:1024px;
	-moz-border-radius:15px;
	border-radius:15px;
	margin-top:30px;
	float:left;
	background-color:#fff;
	font-family:Calibri;}
#main_body_header{
	width:1024px;
	height:150px;
	float:left;
	}
#main_body_header_container{
	font-family:Cambria;
	font-size:68px;
	color:#762600;
	margin:50px;
	border-bottom:thin #d3d3d3 solid;}
#main_body_all{
	width:1024px;
	height:auto;
	float:left;}

#main_body_left{
	text-align:justify;
	width:700px;
	height:auto;
	float:left;
	margin-bottom:40px;}

#main_body_right{
	width:320px;
	height:auto;
	float:left;}
#main_body_left_content{
	margin-top:20px;
	margin-left:20px;
	margin-right:20px;
	width:660px;
	height:auto;}
#main_body_right3{
	margin-top:20px;
	margin-left:5px;
	margin-right:10px;
	width:300px;
	height:auto;
	border:thin #d3d3d3 solid;
	border-radius:10px;}
#main_body_right3_content{
	margin-top:10px;
	margin-left:30px;
	margin-bottom:10px;
	width:260px;
	height:auto;}
#main_body_right3_content li {margin-left:40px; margin-bottom:5px; margin-top:5px;}
#main_body_right3_content li a { text-decoration:none; color:#333;}
#main_body_right3_content li a:hover {color:#C60;}	
	
	
	
#main_body_right1{
	margin-top:55px;
	margin-left:5px;
	margin-right:10px;
	width:300px;
	height:auto;
	border:thin #d3d3d3 solid;
	border-radius:10px;}
#main_body_right1_content{
	margin-top:10px;
	margin-left:30px;
	margin-bottom:10px;
	width:260px;
	height:auto;}
#main_body_right1_content li {margin-left:50px; margin-bottom:5px; margin-top:5px;}
#main_body_right1_content li a { text-decoration:none; color:#333;}
#main_body_right1_content li a:hover {color:#C60;}

#main_body_right2{
	margin-top:10px;
	margin-left:5px;
	margin-right:10px;
	margin-bottom:20px;
	padding-top:5px;
	padding-bottom:5px;
	width:300px;
	height:auto;
	border:thin #d3d3d3 solid;
	border-radius:10px;}
#main_body_right2_content{
	margin-top:10px;
	margin-left:30px;
	margin-bottom:10px;
	width:260px;
	height:auto;}	
	

#footer{
	width:1024px;
	height:60px;
	float:left;
	margin-top:10px;
	Color:rgb(55,24,0);
	font-family:Calibri;
	font-size:12px;}
#footer a { text-decoration:none; color: rgb(55,24,0);}
#footer a:hover { color:#d3d3d3;}
#alumni li{margin-left:20px;}
#alumni a{text-decoration:none; color:#666;}
#alumni a:hover{  color:#900;}


.round
   {border:1px solid #360000;border-radius:0.2em; padding:0px 4px 0px 4px;}
   
.roundb
   {border-radius:0.2em; padding:0px 8px 0px 8px;}
</style>

<body>
<div id="top_header">
<table align="center">
<td>
<div id="header">
 	<div id="header_contain" align="right">
    	 <form action="http://www.google.com/search" method="get" target="_blank">
    	  <input title="Press Enter to Search" type="text" name="q" id="search" tabindex="2"  style="height:20px;background:url(images/search.jpg); border:thin rgb(71,24,0) solid; color:#d3d3d3;"/>
		  
    	  </form>
  	    </div>
 
 
</div>

</td></table>
</div>







<table align="center"><td>
	<div id="container">
   		<div id="menu">
        	<div id="menu_content" align="left">
           <ul id="menu2">
  <li><a href="index.html">Home</a></li>
  <li><a href="">About Us</a>
    <ul>
    <li><a href="dropdown/admin.html">Administration</a></li>
    <li><a href="dropdown/staff.html">Staff</a></li>
    <li><a href="dropdown/celebration.html">Celebrations</a></li>
    <li><a href="dropdown/house.html">Houses</a></li>
    <li><a href="dropdown/rules.html">Rules & Regulations</a></li>
 
    </ul>
  </li>
  <li><a href="">Admission</a>
    <ul>
    <li><a href="dropdown/why.html">Why Dav Burla?</a></li>
    <li><a href="dropdown/fee.html">Fee Structure</a></li>
    <li><a href="dropdown/process.html">Admission Process</a></li>
    <li><a href="dropdown/curri.html">Curriculum</a></li>
    </ul>
  </li>
  <li><a href="">Achievements</a>
    <ul>
    <li><a href="dropdown/athletics.html">Athletics</a></li>
    <li><a href="dropdown/academic.html">Academics</a></li>
    <li><a href="dropdown/outside.html">Outside Recognition</a></li>
    </ul>
    <li><a href="">Facilities</a>
    <ul>
    <li><a href="dropdown/infrastructure.html">Infrastructure</a></li>
    <li><a href="dropdown/club.html">Clubs</a></li>
    <li><a href="dropdown/events.html">Annual Events</a></li>
    </ul>
  <li><a href="gallery.html">Gallery</a></li>
  <li><a href="alumni.html">Alumni</a></li>
</ul>
        	</div>	
        
        </div> 
     
     	
     
     	<div id="main_body">
        	<div id="main_body_header">
            	<div id="main_body_header_container">
                Our Alumni
                
                </div>
            </div>
            <div id="main_body_all">
            
            	<div id="main_body_left">
           	    <div id="main_body_left_content">
                    	<p>&nbsp;</p>
            <p style="color:#666;"> 
			

			Most of our alumni are well placed and many are continuing their education all across the country and abroad. 
			But what unites is this very school of theirs and the feeling of being a DAVian.  
			 </p>
			 
          <?php 
		  
		  function error()
   { echo " ";}
    
	set_error_handler("error");
		  
		  
		  $dat=2000;
	    if(isset($_GET['page']))
		{
			$page=$_GET['page'];
		}
		else
		{
			$page = 1;
		}
   $start = ($page-1) * 10;
   
   session_start();
		 
		 if ($_SERVER["REQUEST_METHOD"] == "POST") 
		 {
				$dat = test_input($_POST["batch"]);
				
				
					$_SESSION['yearr']=$dat;
				
				
		 }
		 
		 function test_input($data)
		{
            $data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		} 

		 if(isset($_SESSION['yearr']))
          $dat = $_SESSION['yearr'];			
		 
		 ?>

	
			 
          <div id="text" style="color:#000">
          <h3>Following are our Alumni:</h3>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"	method="post"> 
		 Select Year:
		  <select name=batch class="round" style="margin-top:5px; " title="Select the Batch You want to See"> 
		  <option value="2000" selected >All</value>
				
				<?php
						$select = " ";
                 for($i=date('Y',time());$i>=2005;$i--)
                    {	
				      if($i==$dat && $dat!=2000) 
					   { $select = "selected"; }
                       echo "<option value=".($i)." ".$select.">".$i."</option>"; 
					  $select = " ";
                    }
                ?>
				</select>
		  and see the Results: &nbsp;<button class="btn btn-small btn-default roundb">GO <span class="glyphicon glyphicon-arrow-right "></span></button>
      </form>   
                    
        <br>
        Start Typing Name:&nbsp;<input type="text" onkeyup="showHint(this.value)" placeholder="&nbsp;&nbsp;Search by Name" style="padding-left:3px;width:40%"> & get results Below

	  
				 
				 <br><center>
<div id="txtHint">
  <?php
  include('connect.php');
  $check=""; 
  if($dat!=2000)
	  $check = "where pyear = $dat";
  
  
  $p="select * from alumni ".$check;
   
   $q = mysql_query($p);
   $total_page = ceil(mysql_num_rows($q)/10);
 

 $sql="select * from alumni ".$check." order by name ASC LIMIT $start , 10";	

  $r=mysql_query($sql);
  
  $c=0;
 
 if(mysql_num_rows($r)==0)
 {
	 echo "<h3><p><b>Sorry,</b> We didn't Found anyone from this Year.</h3><font size=2>Are you an alumni of our school? | <a href='alumni_reg.php'>Register here.</a></font></p>";
 }
else
{ $c=1; $gen=" ";
	while($row=mysql_fetch_assoc($r))
	{
		$name=$row['name'];
		$date=$row['pyear'];
	    $gender=$row['gender'];
		$email=$row['email'];
		$stream=$row['stream'];
		$branch=$row['branch'];
		$uni=$row['uni'];
		$study=$row['study'];
		$comp = $row['company'];
		$comp_loc = $row['company_loc'];
		
		if($gender=='Male')
		{
			$gen="He";
		}
		else
		{
			$gen="She";
		}
		if($c%2==0)
			{
				$align="Right";$side="right";
			}
		else
		{
			$align="Left";
			$side="left";
		}
		echo "
		      <h4><div style='border-$side:medium Green solid;text-align:$align; border-radius:0em;width:80%;' >
			  <font color='darkGreen' size='4'>
			  <div style='padding:10px;'>".$name."</font><font size='2'><br>Passout: ".$date."<br>";
			  if($study=="studied" || $study=="job")
			    echo $gen." completed ";
			  else
				  echo $gen." is doing ";
			  
			  echo $stream;
			if($branch!="")
			  echo " in <i>".$branch."</i>";
		  
		  echo " at <B>".$uni."</B>.";
		  
            if($comp != "")
				echo "<br><i> Now, ".$gen." is doing job in <b>".$comp."</b> at <b>".$comp_loc."</b></i>";
			   
			   echo "</font></div></div></h4></B>";
			   
		     
		
		
		echo "";
		$c++;
		
	}  
  echo"</div>";
}	
echo "<br>";
if($c>1)
{  if($page>1)
	{ echo "<a href=alumni.php?page=".($page-1)."><button class='btn btn-small default roundb'>&nbsp;"; echo"Prev</button></a>&nbsp;&nbsp;&nbsp;&nbsp;";}
	if($dat!=2000)
		echo "Pages of ".$dat.": ";
	else
	    echo "Pages: ";
	
	for($i=1;$i<=$total_page;$i++)
	{	echo "<a href=alumni.php?page=".$i.">".$i."</a>";
	    
		if($i<$total_page&&$total_page>=2)
		{
			echo " | ";
		}
	}
	
	
  if($page<$total_page)
	{ echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=alumni.php?page=".($page+1)."><button class='btn btn-small default roundb'>Next</button></a>";}

}

?>



</center>
</div></div>
                </div>
            
            	<div id="main_body_right">
                	<div id="main_body_right1">
                		<div id="main_body_right1_content">
                			<span class="e">Quick Links & top links:</span>
                            <li><a href="dropdown/fee.html">Fee Structure</a></li>
                          <li><a href="dropdown/infrastructure.html">Infrastructure</a></li>
                <li><a href="dropdown/academic.html">Academics</a></li>
                
                
                
               		  </div>
                	</div>
                    
                    <div id="main_body_right2" align="center" >    
                         
                          <span class="e"><font color="black">ALUMNI - <i><font color="darkRed"> REGISTRATION CORNER</font></i></span><br>
						  <a href="alumni_reg.php" style="text-decoration:none">
						  <button style="margin-top:5px;" class="btn btn-sm btn-success">
						  <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;
						  <font size="3">Register yourself</B></font></button>
						  </a>
                        <br><br>
					</div>
                       
                    
            
            </div>
            
            
            
           
        
        
        
        
        
        </div>
        
       
     
     
    </div>
	<div id="footer" align="center"><font color="white">
       &copy; &nbsp; 1997-<?php print date('Y',time()); ?> Maintained by Computer Science Dept. DAV Burla</B><br/></font>
         </div>
</td></table>



</body>
</html>
