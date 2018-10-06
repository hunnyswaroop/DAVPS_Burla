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
							 {disp_tab(); dd_menu();}
								
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
		Alert.render('<b><center>Blank Content Recieved. Unable to Load Notice...</center></b>'); return false; 
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
	
//--------------------------------------------- JS END ------------------------------------
</script>