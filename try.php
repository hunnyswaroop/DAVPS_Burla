 <?php 
 date_default_timezone_set('asia/calcutta');
 
            
			
	        $d1=date('j',time());
			$m1=date('m',time());
			$y1=date('Y',time());
  
  $dat="02/7/2017";
  
  if(strlen($dat)==9)		
  { $d = substr($dat, 0, -8);
    $m = substr($dat, 2, -5);
    $y = substr($dat, 5);
    
	if((strpos($m, '/') !== FALSE)&&strlen($d)==1) 
	{ 
      echo "hhhh ";
      $d = substr($dat, 0, -8);
      $m = substr($dat, 3, -5);
      $y = substr($dat, 5);
		
	}
  }
  
  if(strlen($dat)==8)
  {
	  $d = substr($dat, 0, -7);
      $m = substr($dat, 2, -5);
      $y = substr($dat, 4);
  }
  if(strlen($dat)==10)
  {
	  $d = substr($dat, 0, -8);
      $m = substr($dat, 3, -5);
      $y = substr($dat, 6); 
  }
  echo $d.",".$m.",".$y;
  $d=$d+0;$d1=$d1+0;
  $m=$m+0;$m1=$m1+0;
  $y=$y+0;$y1=$y1+0;
  
 if($y==$y1) 
 { 
     if($m1==4||$m1==6||$m1==9||$m1==11)
		 $day=30;  
	  
	else 
	    $day=31; 
		  
	  
    if($m1==2)
		{
			if($y%400==0||$y%4==0&&$y%100==0)
				$day=29;
			else
			  $day=28; 
		}
	
	$d1=$day-$d1+1;
	
	$fdate=$d1+$d;
	
	$m--;
	
	$fmonth=$m-$m1;
	
}
else
{ 
     if($m1==4||$m1==6||$m1==9||$m1==11)
		 $day=30;  
	  
	else 
	    $day=31; 
		  
	  
    if($m1==2)
		{
			if($y%400==0||$y%4==0&&$y%100==0)
				$day=29;
			else
			  $day=28; 
		}
 
	$d1=$day-$d1+1;
	
	$fdate=$d1+$d;

    $m--;
    $m1=
    $fmonth = $m1+$m;
    	
}	

  
	  
	 
 
 echo $fdate."/".$fmonth;
  
		
    
 
 
 
/*
$datetime1 = new DateTime('2017-6-19');
$datetime2 = new DateTime('2018-2-28');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%d-%m-%Y');*/

?> 