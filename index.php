<!doctype html>





<head>
<script>
document.onmousedown=disableclick;
status="Right Click Has Been Disabled";
function disableclick(event)
{
	if(event.button==2)
    { alert(status); return false;}
}
</script>
<meta name="theme-color" content="darkRed" />
<link rel="shortcut icon" href="images1/shortcut.jpg"  />
<title>Data Login</title>
<meta name="viewport" content=" initial-scale=0.2">
<link href="bootstr/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstr/https://code.jquery.com/jquery.js"></script>
<script src="bootstr/js/bootstrap.min.js"></script>
<style>
.w{width:420px;border-radius:0.8em;background-color:rgb(248,248,248);font-family:arial;margin-left:0px;margin-top:130px;padding-bottom:15px;border:0.5px solid #360000;}	
.i{color:darkBlue;margin-left:0px;}
.admin{margin-left:-12px;margin-top:20px;}
</style>

</head>

<body >

<div>
<img src="../images/main_header.jpg" style="width:100%;">
</div>



<center>
  <fieldset class='w'>
  
  <h2 style="text-align:center;color:7B4A12;"><B><font size="5" color="B7521e"></font>&nbsp;O.N.M. Login</B></h2>
  <font size="1">
  
  &nbsp;&nbsp;&nbsp;&nbsp;(Login to Online Notice Manager)
  <br>
 
  <br/>
  </font></B>
 <font size="2" color="#360000">
 <form action="ntc.php" method="post">

  Service Name:</label>
 <input type='text' style="width:30%;border:1px solid grey;  padding:1px; border-radius:3px;" name='sern'  placeholder="Service Name.." required title="Give Service-Name.." />
 <br>



 &nbsp;Service Code: </label>
<input required type="password" style="width:30%;border:1px solid grey;  padding:1px; border-radius:3px;" name="serp" title="Provide Service-Code" placeholder="Service Code" />


<br>
 
 
 <button type="submit"  class="btn btn-danger" title="Login to Your form" style="margin-left:10px;margin-top:20px;">
 <span class="glyphicon glyphicon-off"></span>&nbsp;Login</button>
 </center>
 </font>
 </form>
</fieldset>
</div>
<center>
<div style="margin-left:0px;">
<br><br>
<font face="arial" size="1" color="darkGrey">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&copy 1997-<?php print date('Y',time()); ?>  D.A.V. PUBLIC SCHOOL,BURLA. Maintained by Computer Science Department.</font>
</div>

</center>

</body>
</html>