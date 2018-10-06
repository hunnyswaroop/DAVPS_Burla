<?php

$sern=$_REQUEST['sern'];
$serp=$_REQUEST['serp'];


if($sern!="dav_ntc"||$serp!="ntc1234")
{
	header("location:index.php");
}

	

date_default_timezone_set('asia/calcutta'); 
require('del.php');
?>

<html>
	<head>
	    <noscript>
  <META HTTP-EQUIV="Refresh" CONTENT="0;URL=error.html">
</noscript>
		<link rel="favicon" href="../images/shortcut.jpg"/>
		
		<meta name="theme-color" content="darkRed" />
		<meta name="viewport" content=" initial-scale=0.2">
		
   <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Merriweather+Sans:400,800|Questrial" rel="stylesheet">
   <link rel="shortcut icon" href="../images/shortcut.jpg"  />
   <link href="bootstr/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		 <marquee><title>:NOTICE ADMIN:</title></marquee>
		
			<style>
			.uppercase {
    text-transform: uppercase;
}

.capitalize {
    text-transform: capitalize;
}


			  body{margin:0px;}
			  textarea {
						
						border:1px solid grey;border-radius:0.2em;
						width:  calc(60vw - 30px);      /* calc and viewport to the rescue */
						height: calc(15vh - 30px);
						resize: none;
						border-radius:0.3em;
						}
			 input{
				 border:1px solid grey;border-radius:0.2em;
			 }
			 table {
					font-family: arial, sans-serif;
					border-collapse: collapse;
					width: 60%;
					}

				td, th {
						border: 1px solid black;
						text-align: center;
						padding: 8px;border-radius:0.2em;
						
						}
						th { border: 3px solid black; }

				tr:nth-child(even) {
									
									}
			</style>
		<!---------------------------- Modal CSS ------------------------------>	
			<style>
			body {
    
}
			
			.loader {
  border: 2px solid #f3f3f3;
  border-radius: 50%;
  border-top: 2px solid darkRed;
  border-bottom: 2px solid darkRed;
  border-left: 2px solid darkRed;
  width: 12px;
  height: 12px;
  -webkit-animation: spin 3s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
#dialogoverlay{
	display: none;
	opacity: .8;
	position: fixed;
	top: 0px;
	left: 0px;
	background: #FFF;
	width: 100%;
	z-index: 10;
}
#dialogbox{
	display: none;
	position: fixed;
	background: #601001;
	border-radius:10px; 
	width:550px;
	z-index: 10;
}
#dialogbox > div{ background:#FFF; margin:8px; }
#dialogbox > div > #dialogboxhead{ background:#f98d57 ; font-size:19px; padding:10px; color:white; }
#dialogbox > div > #dialogboxbody{ background:#e54528; padding:20px; color:#FFF; }
#dialogbox > div > #dialogboxfoot{ background: #f98d57; padding:10px; text-align:right; }
</style>
		
		<!---------JS START----------->	
			
			<script src="jquery.js"></script>
			<script>      
					
				var idd,sv=0;
		
		//--------- server Date JS ----------------		
				var phpDate = '<?php echo date('Y/m/d H:m:s');?>'
				var dt = new Date(phpDate);
				var d1 = dt.getDate();
				var m1 = (dt.getMonth()+1);
				var y1 = dt.getFullYear();
		
		//---------- client Date JS ----------------		
				var cdt = new Date();
				var dd1 = cdt.getDate();
				var mm1 = (cdt.getMonth()+1);
				var yy1 = cdt.getFullYear();
				
				var dte = d1+"/"+m1+"/"+y1; //server date
				
				function load()
				{
					document.getElementById("loader").style.visibility='hidden';
					if(sv==1)
					document.getElementById("fedt").innerHTML="Please try again...";
				    
					    
				}
				
				function load2()
				{
					document.getElementById("loader").style.visibility='hidden';
					if(sv==1)
					document.getElementById("fedt2").innerHTML="Please try again...";
				    
					    
				}
				
				
				function showdate()
				{   
				
				   if(d1!=dd1||m1!=mm1||y1!=yy1)
				   {
					 Alert.render("<b>Your System Date is Incorrect !</b>&nbsp; Please correct your PC's Date...");
				   }
					document.getElementById("demo").innerHTML = "<B>Today's Date:</b> "+dte+"";
				   
				   
				   disp_tab();
				   disp_prior();
				   dd_menu();
				   document.getElementById("loader").style.visibility='hidden';
				   document.getElementById("loader2").style.visibility='hidden';
				   
					
					
				}
			
				function goBack() {
				       window.history.back();
				}
				
				function myFunc(){
								document.getElementById(idd).innerHTML = "...";
								idd="";
							    }
								
				function toString(s)
				{
					var i = 0;
					var s2="";
								while(i<s.length)
								{
									if(s.charCodeAt(i)>=32&&s.charCodeAt(i)<=127)
									   s2=s2+s[i];
									i++;
								}
					return s2;
				}
				
				
				
				
				function animate(i)
				{            	
							$(document).ready(function(){
									$("#"+idd).show();
    
										});
								
								$(document).ready(function(){
									$("#"+idd).hide(300);
    
										});
								$(document).ready(function(){
									$("#"+idd).show(500);
    
										});
								setTimeout(myFunc,7000)
							
				}
				
				function chk_fild2()
				{
					var a = (document.getElementById("loadme").value);
				    var b = (document.getElementById("link").value);
					var c = (document.getElementById("cont").value);
				    
					var dd = document.getElementById("d7").value;
					var mm = document.getElementById("m7").value;
					var yyyy = document.getElementById("y7").value;
					var date = dd+"/"+mm+"/"+yyyy;
					
					var d2 = parseInt(dd); var d3 = parseInt(d1);
				 var m2 = parseInt(mm); var m3 = parseInt(m1);
				 var y2 = parseInt(yyyy); var y3 = parseInt(y1);
				 var d = d2 - d3,m = m2 - m3,y = y2 - y3;
				 var chkdate="";
                   
				   
				   var msg,msg2,yu=yyyy+0,dy;
				 if(mm==4||mm==6||mm==9||mm==11)
					 {  
									
									 if(dd==31)
									 {
										msg = "true"; 
									 }
					 }
					 
				 if(mm==2)							 
								{	if(yu%400==0||yu%4==0&&yu%100==0)
										{
											if(dd>29)
											{	msg2="true"; dy=29; }
										}
										else		if(dd>28)
												{  msg2="true"; dy=28; }
								}
				   
				   
                    if(y>0)
                       chkdate="true";
                      else if((y==0)&&(d>0&&m>=0||d<=0&&m>0))
                        chkdate="true";
                           else
                           chkdate="false";		
                        
                    		if(c!="")
						{
							
							
							if(b!="")
							{
								if(b=="http://")
								{
									Alert.render('<b>Please Enter Complete Notice URL/LINK...</b> ');
								return ;
								}
								if(b.length<=9)
								{  Alert.render('<b>Notice Link</b> too Short! ( Minimum 9 Chars Long ) ...');
								return ;}
								
							}
							 
							if(c.length>=10)
							{	
								if(chkdate=="false")
								{ 
									Alert.render("<b>INVALID EXPIRY DATE: "+date+"</b> &nbsp;&nbsp;&nbsp;( Must not be Today's Date or Earlier! )");
								    return ;
								}
								if(d1!=dd1||m1!=mm1||y1!=yy1)
				                 {
					               Alert.render("<b>Your System Date is Incorrect.</b> &nbsp; Please check your system's date!");
									return;
								 }
								 
								 if(msg=="true")
								{
									Alert.render("<center><b>INVALID DATE: </b>Selected month do not have 31 days...</center>"); msg="";return;
								}
								if(msg2=="true")
								{
									Alert.render("<center><b>INVALID DATE: </b>Selected month has only "+dy+" days...</center>"); msg2="";return;
									
								}
								 
								 loadDoc2();
							}
							else
								{ 
     							 Alert.render('<b>Notice Content</b> too Short! ( Minimum 10 Chars Long )  ...');
								return ;}
				        
						
					    
					   }
					   else{
						   Alert.render('<b>Notice Content Field </b>&nbsp; Must not Be Empty!');
					    return ;
					   }
								   
				}
				
				function chk_fild()
				{   	
				    var a = (document.getElementById("ntc_title").value);
				    var b = (document.getElementById("ntc_link").value);
					var c = (document.getElementById("ntc_content").value);
				    
					var dd = document.getElementById("dd").value;
					var mm = document.getElementById("mm").value;
					var yyyy = document.getElementById("yyyy").value;
					var date = dd+"/"+mm+"/"+yyyy;
				  
				 var d2 = parseInt(dd); var d3 = parseInt(d1);
				 var m2 = parseInt(mm); var m3 = parseInt(m1);
				 var y2 = parseInt(yyyy); var y3 = parseInt(y1);
				 var d = d2 - d3,m = m2 - m3,y = y2 - y3;
				 var chkdate="";
                  
                 var msg,msg2,yu=yyyy+0,dy;
				 if(mm==4||mm==6||mm==9||mm==11)
					 {  
									
									 if(dd==31)
									 {
										msg = "true"; 
									 }
					 }
					 
				 if(mm==2)							 
								{	if(yu%400==0||yu%4==0&&yu%100==0)
										{
											if(dd>29)
											{	msg2="true"; dy=29; }
										}
										else		if(dd>28)
												{  msg2="true"; dy=28; }
											
								}	  
	          
                    if(y>0)
                       chkdate="true";
                      else if((y==0)&&(d>0&&m>=0||d<=0&&m>0))
                        chkdate="true";
                           else
                           chkdate="false";							   
				  
				  if(a!=""||c!="")
				   { 
			         
					   if(a!="")
					 {  
						
				        if(c!="")
						{
							
							
						if(a.length>=5 )
						{
							if(b!="")
							{
								if(b=="http://")
								{
									Alert.render('<b>Please Enter Correct Notice URL/LINK...</b> ');
								return ;
								}
								if(b.length<=9)
								{  Alert.render('<b>Notice Link</b> too Short! ( Minimum 9 Chars Long ) ...');
								return ;}

								
							}
							 
							if(c.length>=10)
							{	
								if(chkdate=="false")
								{ 
									Alert.render("<b>INVALID EXPIRY DATE: "+date+"</b> &nbsp;&nbsp;&nbsp;( Must not be Today's Date or Earlier! )");
								    return ;
								}
								if(d1!=dd1||m1!=mm1||y1!=yy1)
				                 {
					               Alert.render("<b>Your System Date is Incorrect.</b> &nbsp; Please check your system's date!");
									return;
								 }
								if(msg=="true")
								{
									Alert.render("<center><b>INVALID DATE: </b>Selected month do not have 31 days...</center>"); msg="";return;
								}
								if(msg2=="true")
								{
									Alert.render("<center><b>INVALID DATE: </b>Selected month has only "+dy+" days...</center>"); msg2="";return;
									
								}
								 loadDoc_pub();
							}
							else
								{ 
     							 Alert.render('<b>Notice Content</b> too Short! ( Minimum 10 Chars Long )  ...');
								return ;}
				        }
						
					    else
					    {  Alert.render('<b>Notice Title</b> too Short! ( Minimum 5 Chars Long ) ...');
					      return ;
				        }
					   }
					   else{
						   Alert.render('<b>Notice Content Field </b>&nbsp; Must not Be Empty!');
					    return ;
					   }
					}
					else
					{ Alert.render('<b>Notice Title Field </b>&nbsp; Must not Be Empty!');
					    return ;
				    }
				   }
				   else
					   { Alert.render('<b>Notice Title & Content Fields </b>&nbsp;Must not Be Empty!');
					    return ;
				    }
					   
				} 
			
			
		//------------------------------------ publisher js -------------------------------				
					function spy()
					{
						sv++; 	
					}			
				
				function loadDoc_pub() { 
					
					idd="fadeout1";
					
					if(sv==1&&document.getElementById(idd).innerHTML=="...")
					{
						
						Alert.render("<center><b>Something went wrong!</b>.&nbsp; Check your internet connection... </center><br>This usually happens when publisher is unable to connect to server, though there are many reasons but one of the reasons could be no internet connection or your browser doesn't support ajax operation.<br/><br/><center>Or Please wait...&nbsp; for sometime if you're connected to internet.</center>");
					   
					}
					else
					{document.getElementById("loader").style.visibility='visible'
                   	 setTimeout(load,20000)	
				    }
					sv=0;
					var ntc_title = document.getElementById("ntc_title").value;
					var ntc_link = document.getElementById("ntc_link").value;
					var ntc_content = document.getElementById("ntc_content").value;
					var dd = document.getElementById("dd").value;
					var mm = document.getElementById("mm").value;
					var yyyy = document.getElementById("yyyy").value;
					
					
					
					var xhttp = new XMLHttpRequest();
						
						xhttp.onreadystatechange = function() {
							 
							if (this.readyState == 4 && this.status == 200) {
								
								
								spy();
								document.getElementById('dialogbox').style.display = "none";
								document.getElementById('dialogoverlay').style.display = "none";
								
								var s2 = toString(this.responseText); 
							
								if(s2=="true")
								{ document.getElementById("loader").style.visibility='hidden';
							      document.getElementById(idd).innerHTML = " PUBLISHED..";
								  document.getElementById("fedt").innerHTML="";
								  var t=document.getElementById("ntc_title");
								  t.value=t.defaultValue;
								  var t2 = document.getElementById("ntc_link");
								  t2.value=t2.defaultValue;
								  var t3=document.getElementById("ntc_content");
								  t3.value=t3.defaultValue;
								   dd = document.getElementById("dd")
								   dd.value="1";
								   mm = document.getElementById("mm");
								   mm.value="1";
								   yyyy = document.getElementById("yyyy");
								   yyyy.value=y1;
								  
								}
							
							
							    else if(s2=="exists")
								{    document.getElementById("loader").style.visibility='hidden';
									 document.getElementById(idd).innerHTML = "DUPLICACY FOUND!";
									 document.getElementById("fedt").innerHTML="";
								}  
								   else if(s2=="INIT_FAILED")
								        {  document.getElementById("loader").style.visibility='hidden';
									         Alert.render('<center><b>Something Went Wrong!</b> (May be due to some programming errors.)</center>  ');
								             return false; }
								        else if(s2=="MAX")
										      { document.getElementById("loader").style.visibility='hidden';
										        Alert.render('<center><b>Maximum Notices Reached.</b> Please delete some notice(s) to continue...</center>');
								                return false;}
											  else
											  {document.getElementById(idd).innerHTML = " FAILED !!";
											  document.getElementById("loader").style.visibility='hidden';
											  document.getElementById("fedt").innerHTML="";}
							 	
							 animate();
							 if(s2=="true")
							 {disp_tab(); disp_prior(); dd_menu();}
								
							}
							
							
						 };
						 
						  spy(); 
					 xhttp.open("POST", "pblsh_ntc.php", true);
					xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					 xhttp.send("ntc_title="+ntc_title+"&ntc_content="+ntc_content+"&ntc_link="+ntc_link+"&dd="+dd+"&mm="+mm+"&yyyy="+yyyy);
					 
				}

			
//------------------------------------------- Alert Modal JS -------------------------------

function CustomAlert(){
    this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH+"px";
        dialogbox.style.left = (winW/2) - (550 * .5)+"px";
        dialogbox.style.top = "200px";
        dialogbox.style.display = "block";
        document.getElementById('dialogboxhead').innerHTML = "<B> Important Alert! </B>";
        document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Alert.ok()">OK</button>';
    }
	this.ok = function(){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
		document.getElementById("fedt").innerHTML="";
	}
}
var Alert = new CustomAlert();

//-----------------------------------  Confirm Modal JS ------------------------------------------

function CustomConfirm(){
	var id=""; var act;
	this.render = function(idd,action){ 
	    id = idd;
		act = action;
		if(document.getElementById("loadme").value=="No Notice Title" && act==2)
		{
			Alert.render('<b><center>There are no notices to be deleted!...</center></b>');
			return false;
		}
		else if(document.getElementById("loadme").value=="No Notice Title"&&act==3)
		{
			Alert.render('<b><center>No Notice found </b> to be Updated!...</center></b>');
			return false;
		}
		else if(document.getElementById("cont").value==""&&act==3)
		{
			Alert.render('<b><center>No Notice Loaded </b> to be Updated!...</center></b>');
			return false;
		}
		var winW = window.innerWidth;
	    var winH = window.innerHeight;
		var dialogoverlay = document.getElementById('dialogoverlay');
	    var dialogbox = document.getElementById('dialogbox');
		
		dialogoverlay.style.display = "block";
	    dialogoverlay.style.height = winH+"px";
		dialogbox.style.left = (winW/2) - (550 * .5)+"px";
	    dialogbox.style.top = "240px";
	    dialogbox.style.display = "block";
		
		document.getElementById('dialogboxhead').innerHTML = "<b>Please Confirm!</b>";
		
		if(act==1)
		    document.getElementById('dialogboxbody').innerHTML = "Do You Want to Delete this Notice before Expiration?";
	    else if(act==2)
			document.getElementById('dialogboxbody').innerHTML = "Do You Want to Delete All Notices Permanently?";
			else if(act==3)
	        document.getElementById('dialogboxbody').innerHTML = "Do You Want to Make Changes to this Notice?";
		
		document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Confirm.yes()">Yes</button> <button onclick="Confirm.no()">No</button>';
	}
	this.no = function(){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
		
		if(act==3)
		{
			 
								  var t2 = document.getElementById("link");
								  t2.value=t2.defaultValue;
								  var t3=document.getElementById("cont");
								  t3.value=t3.defaultValue;
								   dd = document.getElementById("d7")
								   dd.value="1";
								   mm = document.getElementById("m7");
								   mm.value="1";
								   yyyy = document.getElementById("y7");
								   yyyy.value=y1;
		}
		return false;
		
		
		
		
	}
	this.yes = function(){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
		
		 if(act==3)
		  chk_fild2();
	     else if(act==1||act==2)
		    perform_del(id);
	 
		
		
		
		
	}
}
var Confirm = new CustomConfirm();





			function disp_tab()
			{

						var xhttp = new XMLHttpRequest();
						
						xhttp.onreadystatechange = function() {
							 
							if (this.readyState == 4 && this.status == 200) {
								
								
								var s2 = toString(this.responseText); 
													 
								  document.getElementById("tab").innerHTML=s2;
							}
						 };
						 
						  
					 xhttp.open("POST", "show_del_ntc.php", true);
					xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					 xhttp.send();
				}


  function perform_del(p)
  {                 
        				
				var xhttp = new XMLHttpRequest();
						
						xhttp.onreadystatechange = function() {
							 
							if (this.readyState == 4 && this.status == 200) {
								
								var s2 = toString(this.responseText); 	
								
								if(s2=="true")
								{   disp_tab(); 
							        disp_prior();
							        dd_menu(); 
									
									var t=document.getElementById("link");
									t.value=t.defaultValue;
									var t2=document.getElementById("cont");
									t2.value=t2.defaultValue;
									var dat = document.getElementById("d7");
									dat.value="1";
									var mon = document.getElementById("m7");
									mon.value="1";
									var yr = document.getElementById("y7");
									yr.value=y1;
							    }
								else
								{
									Alert.render('<b><center>Notice(s) did not delete. Please try Again...</center></b>');
								}
							}	
						 };
						 
						  
					 xhttp.open("POST", "del_ntc.php", true);
					xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					 xhttp.send("param="+p);
				
  }
  
  function dd_ntc()
  {
	  var xhttp = new XMLHttpRequest();
						
						xhttp.onreadystatechange = function() {
							 
							if (this.readyState == 4 && this.status == 200) {
								
								var s2 = toString(this.responseText); 	
								
								if(s2=="true")
									disp_tab();
								else
								{
									Alert.render('<b><center>Notice(s) did not delete. Please try Again...</center></b>');
								}
							}	
						 };
						 
						  
					 xhttp.open("POST", "del_ntc.php", true);
					xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					 xhttp.send("param="+p);
  }
	

  function dd_menu()
  {
	   var xhttp = new XMLHttpRequest();
						
						xhttp.onreadystatechange = function() {
							 
							if (this.readyState == 4 && this.status == 200) {
								
								var s2 = toString(this.responseText); 	
								document.getElementById("loadme").innerHTML=s2; 
								
							}	
						 };
						 
						  
					 xhttp.open("POST", "show_dd.php", true);
                     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					 xhttp.send();
  }

  function breaknload(s)
  {
	 var str1,str2,str3,d7,m7,y7; var c=0;
     d7=m7=y7=str1=str2=str3="";
	 for(var i=0;s[i]!='^';i++)
	 {
		 str1+=s[i];
		 c++;
	 }
	 for(var i=c+1;s[i]!='^';i++)
	 {
		 str2+=s[i];
		 c++;
	 }
	 for(var i=c+2;i<s.length;i++)
	 {
		 str3+=s[i];
	 }
	 c=0;
	 for(var i=c;str3[i]!="/";i++)
	 {
		 d7+=str3[i];
		 c++;
	 }
	 for(var i=c+1;str3[i]!="/";i++)
	 {
		 m7+=str3[i];
		 c++;
	 }
	 for(var i=c+2;i<str3.length;i++)
	 {
		 y7+=str3[i];
	 }
	 
	 if(str1!="" || str2!="" || str3!="" || d7!="" || m7!="" || y7!="")
	 {
		 document.getElementById("link").value=str1;
		 document.getElementById("cont").value=str2;
		 var dat = document.getElementById("d7");
		 dat.value=d7;
		 var mon = document.getElementById("m7");
		 mon.value=m7;
		 var yr = document.getElementById("y7");
		 yr.value=y7;
	 }
	 else
	 {
		Alert.render('<b><center>UnReadable Content Recieved. Unable to Load Notice...</center></b>'); return false; 
	 }
	 
  }
   function send_ntc()
   {
	   var p = document.getElementById("loadme").value;
	   if(p!="No Notice Title"){
	   var xhttp = new XMLHttpRequest();
						
						xhttp.onreadystatechange = function() {
							 
							if (this.readyState == 4 && this.status == 200) {
								
								var s2 = toString(this.responseText); 	
								
								    
									breaknload(s2);
								
							}	
						 };
						 
						  
					 xhttp.open("POST", "give_ntc.php", true);
					xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					 xhttp.send("param="+p);
	   }
	   else
	   {
		 Alert.render('<b><center>There is, No Notice to be Loaded...</center></b>'); return false;  
	   }
   }
	

   function loadDoc2()
   {
	   				
					document.getElementById("loader2").style.visibility='visible'
                   	setTimeout(load2,20000)	
				    
					sv=0;
					var ntc_title = document.getElementById("loadme").value;
					var ntc_link = document.getElementById("link").value;
					var ntc_content = document.getElementById("cont").value;
					var dd = document.getElementById("d7").value;
					var mm = document.getElementById("m7").value;
					var yyyy = document.getElementById("y7").value;
					
					
					
					var xhttp = new XMLHttpRequest();
						
						xhttp.onreadystatechange = function() {
							 
							if (this.readyState == 4 && this.status == 200) {
								
								
								spy();
								document.getElementById('dialogbox').style.display = "none";
								document.getElementById('dialogoverlay').style.display = "none";
								
								var s2 = toString(this.responseText); 
							
								if(s2=="true")
								{ document.getElementById("loader2").style.visibility='hidden';
							      document.getElementById("fedt2").innerHTML="";
							      disp_tab(); 
							      spy();
								  Alert.render('<center><b>Notice has been Modified Succesfully...</b></center>  ');
								  
								  
								  
								  var t=document.getElementById("loadme");
								  t.value=t.defaultValue;
								  var t2 = document.getElementById("link");
								  t2.value=t2.defaultValue;
								  var t3=document.getElementById("cont");
								  t3.value=t3.defaultValue;
								   dd = document.getElementById("d7")
								   dd.value="1";
								   mm = document.getElementById("m7");
								   mm.value="1";
								   yyyy = document.getElementById("y7");
								   yyyy.value=y1;
								  
								}
							 
								   else if(s2=="INIT_FAILED")
								        {  document.getElementById("loader2").style.visibility='hidden';
									         Alert.render('<center><b>Something Went Wrong!</b> (May be due to some programming errors.)</center>  ');
								             return false; }
											  else
											  {  Alert.render('<center><b>Notice Updation Failed....</b></center>  ');
											  document.getElementById("loader2").style.visibility='hidden';
											  document.getElementById("fedt2").innerHTML="";}
							 	
							 animate();
							 if(s2=="true")
							 {disp_tab(); dd_menu();}
								
							}
							
							
						 };
						 
						  
					 xhttp.open("POST", "update_ntc.php", true);
					xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					 xhttp.send("ntc_title="+ntc_title+"&ntc_content="+ntc_content+"&ntc_link="+ntc_link+"&dd="+dd+"&mm="+mm+"&yyyy="+yyyy);
					 
   }
   
   function sh1()
   {
	   document.getElementById("ntc_link").value="http://";
   }
   function sh2()
   {   
       if(document.getElementById("link").value=="")
	       document.getElementById("link").value="http://";
   }
	
//-----------------------------------------  priority JS ------------------------------

function disp_prior()
{
	$(document).ready(function(){
    $(document).ajaxError(function(){
        Alert.render('<Center><b>Unable to Load Priority Table...');
    });
	$("#prior").load("show_pr_ntc.php");
});
}	
	

function set_prior(id,str)
{
	var idf = id;
	var s = str;
	
	 var xhttp = new XMLHttpRequest();
						
						xhttp.onreadystatechange = function() {
							 
							if (this.readyState == 4 && this.status == 200) {
								
								var s2 = toString(this.responseText); 	
							
							
							
							
							
							
								if(s2=="true")
								{   disp_prior();
							        disp_tab();
									Alert.render("<center><b>Priority Swap Succesful...</b></center>");
									
								}
								else
								{
									Alert.render("<center><b>Failed to Swap Priority..</b></center>");
								}
								
							}	
						 };
						 
						  
					 xhttp.open("POST", "set_prior.php", true);
					xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					 xhttp.send("id="+idf+"&title="+s);
	
}	
	
	
function toggle_new(id,ac)
{
	var idff = id;
	var act = ac;
	
	 var xhttp = new XMLHttpRequest();
						
						xhttp.onreadystatechange = function() {
							 
							if (this.readyState == 4 && this.status == 200) {
								
								var s2 = toString(this.responseText); 	
								
								if(s2=="true")
								{   
							        disp_tab();
									Alert.render("<center><b>Sucessfully Altered <i>New Tag</i> for this Notice ...</b></center>");
									
								}
								else
								{
									Alert.render("<center><b>Unable to Alter New Tag..</b></center>");
								}
								
							}	
						 };
						 
						  
					 xhttp.open("POST", "update_new.php", true);
					xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					 xhttp.send("id="+idff+"&act="+act);
	
}		
//--------------------------------------------- JS END ------------------------------------
</script>
		                          <!------------ JS END ----------------->
	</head>
	
	<body onload="showdate();">
		
		<div><img src="../images/main_header.jpg" style="width:100%;"></div>
		<div class="container" style="margin-top:7px;margin-left:150px;">
 <button onclick="goBack()" class="btn btn-default" title="Go Back" style="">Go Back</button>
 </div>
		<center>
			<h1>
				<font style="font-family: 'Archivo Black', sans-serif;" color="darkBlue">
				 ONLINE NOTICE MANAGER 
				</font>
			</h1>
		</center>
		<br><br>
		
		<div style="margin-left:30px">
		<font size="3" face="arial"><p id="demo"></p></font>
		</div>
		
		<center>
		<div style="border-bottom:1px solid black;padding-bottom:20px">
		
		<center>
			<h3>
				<font style="font-family: 'PT+Sans', sans-serif;" color="black" >
				 <b> <u>NOTICE PUBLISHER:</u> </b>
 				</font>&nbsp;&nbsp;
			</h3>
			<FONT SIZE="4" style="font-family: 'Questrial', sans-serif;">
		  
			<input  name="ntc_title" id="ntc_title" title="Create a notice title for Identification" type="text" maxlength="30" placeholder="&nbsp;Notice Title.. (e.g. Notice_XIth)" style="width:30%;padding: 2px 10px 2px 10px" required/><br/>
			<input onclick="sh1()" name="ntc_link" id="ntc_link" title="if notice is a Link/URL"type="text" maxlength="100" placeholder="&nbsp;Notice Link (optional) .." style="width:30%;padding: 2px 10px 2px 10px;margin-top:10px"/><br/>
			<textarea name="ntc_content" id ="ntc_content" title="Write Notice Content here" maxlength="140" cols="100" rows="5" placeholder="&nbsp;Start Writing Notice(140 chars) from here..." style="padding: 2px 10px 2px 10px;margin-top:10px" required></textarea>
			</FONT>
			<br/>
			<font style="font-family: 'Lato', sans-serif;">
			<b>Set Expire Date:</b>
			
			<select name="dd" title="Set Expiration Day" id="dd" name="dd">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
		</select><b>&nbsp;/&nbsp;</b>

		<select name="mm" title="Set Expiration Month" id="mm" name="mm">
				<option value="1">January</option>
				<option value="2">February</option>
				<option value="3">March</option>
				<option value="4">April</option>
				<option value="5">May</option>
				<option value="6">June</option>
				<option value="7">July</option>
				<option value="8">August</option>
				<option value="9">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
		</select><b>&nbsp;/&nbsp;</b>

		<select name="yyyy" title="Set Expiration Year" id="yyyy" name="yyyy">
				
				<?php 
				   
				    $date = date('Y',time());
					echo "<option value=".$date.">".$date."</option>";
					echo "<option value=".($date+1).">".($date+1)."</option>";
				?>
		</select> | <button  type="submit" class="btn btn-sm btn-primary" title="Click to Publish the notice in homepage" onclick="chk_fild()">
		<span class="glyphicon glyphicon-share"></span> &nbsp;Publish</button>&nbsp;&nbsp;
		
		<font color="darkRed" id="fadeout1">...</font>
		<div class="loader" id="loader" ></div>
		<font color="darkRed" style="font-family: 'Questrial', sans-serif;"><p id="fedt"></p></font>
		</div>
		</form>
		<br/><br/>
<!---------------------------------------------------------->
		
		<font style="font-family: 'PT+Sans', sans-serif;" color="Black" title="Notices which are currently showing up on the Homepage">
			<h3><u><b>ACTIVE NOTICES & <i>NEW</i> TAGs:</b></u></h3>
		</font>
	    <br>
		<div style="padding-bottom:30px;border-bottom:1px solid black">
		<div style="background-color:rgb(242, 255, 242)" id="tab"></div>
<br>
<button class="btn btn-small btn-danger" onclick="Confirm.render(15,2)" title="Click to Delete All the Notices"> <span class='glyphicon glyphicon-remove-sign'></span> Delete All</button>
	
</div>		

<div style="border-bottom:1px solid black;padding-bottom:20px">
			<h3>
				<font style="font-family: 'PT+Sans', sans-serif;" color="black"title="Change/Correct Already Published Notice">
				 <b> <u>MODIFY PUBLISHED NOTICE:</u> </b>
 				</font>
			</h3><br>
			<FONT SIZE="4" style="font-family: 'Questrial', sans-serif;">
			<b>Notice Title:&nbsp;</b>
			<select  title="Select the Notice Title to be Modified" id="loadme" ></Select>
			&nbsp;|&nbsp;<button class="btn btn-sm btn-primary" title="Click to Load Notice for convenience" onclick="send_ntc()">
			<span class="glyphicon glyphicon-refresh"></span> &nbsp;Load Notice</button><br/>
			<input title="New Notice Link/URL"onclick="sh2()" id="link" type="text" maxlength="100" placeholder="&nbsp;New Notice Link (optional) .." style="width:30%;padding: 2px 10px 2px 10px;margin-top:20px"/><br/>
			<textarea  title="Write/Change Content of the Selected Title."id="cont" maxlength="140" cols="100" rows="5" placeholder="&nbsp;New Notice(140 chars) from here... " style="padding: 2px 10px 2px 10px;margin-top:10px" required></textarea>
			</FONT>
			<br/>
			<font style="font-family: 'Lato', sans-serif;">
			<b>New Expiry Date:</b>
			
			<select name="day" title="New Expiration Day" id="d7">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
		</select><b>&nbsp;/&nbsp;</b>

		<select name="month" title="New Expiration Month" id="m7">
				<option value="1">January</option>
				<option value="2">February</option>
				<option value="3">March</option>
				<option value="4">April</option>
				<option value="5">May</option>
				<option value="6">June</option>
				<option value="7">July</option>
				<option value="8">August</option>
				<option value="9">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
		</select><b>&nbsp;/&nbsp;</b>

		<select name="year" title="New Expiration Year" id="y7">
				
				<?php 
				   
				    $date = date('Y',time());
					echo "<option value=".$date.">".$date."</option>";
					echo "<option value=".($date+1).">".($date+1)."</option>";
				?>
		</select> | <button  title="Click to Save Modified Changes" class="btn btn-sm btn-success" onclick="Confirm.render(0,3)">SAVE</button>&nbsp;
		<div class="loader" id="loader2" ></div>
		<font color="darkRed" style="font-family: 'Questrial', sans-serif;"><p id="fedt2"></p></font>
		</div>

		<font style="font-family: 'PT+Sans', sans-serif;" color="Black" title="Customize the Notices Display Sequence by changing Priority ">
			<h3><u><b>SET DISPLAY PRIORITY LEVEL:</b></u></h3>
		</font>
	    <br>
		<div style="padding-bottom:30px;border-bottom:1px solid black">
		<div style="background-color:#fffef2" id="prior"></div>
</div>

</center>
<br>

<!-----------------------------  MODAL CONTENT --------------------------->
<div id="dialogoverlay"></div>
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
</div>		
<!-----------------------------  MODAL CONTENT END --------------------------->		
	<br>
	
	<center>
	<font style="font-family: 'Questrial', sans-serif;" size="3" color="darkGrey">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&copy 1997-<?php print date('Y',time()); ?>  DAV PUBLIC SCHOOL, BURLA.&nbsp; Maintained by Computer Science Department.</font>
		</center><br><br><br><br>
		<p align="right" style="margin-right:10px"><B><u><font style="font-family: 'PT+Sans', sans-serif;">POWERED BY</u>: &reg;&nbsp;&nbsp;
		<img src="HTML.png" height="30" width="30" >&nbsp;
		<img src="boot.png" height="30" width="30" >&nbsp;
		<img src="css.svg" height="30" width="30" >&nbsp;
		<img src="java.png" height="30" width="30" >&nbsp;
		<img src="phpmysql.jpg" height="30" width="100" >&nbsp;
		<img src="jQuery.jpg" height="35" width="80" >
		<img src="ajax.png" height="30" width="80" >&trade;
		</B></font> </p>
		<br><br>
	</body>
</html>
