<?php
require('connect.php');
  $sql=" CREATE TABLE notice(
ID INTEGER ,
ntc_title VARCHAR( 30 ) NOT NULL ,
ntc_link longtext NOT NULL ,
ntc_content longtext NOT NULL ,
ntc_new char(2),
ntc_date VARCHAR( 10 ) NOT NULL ,
ntc_expire VARCHAR( 10 ) NOT NULL
)";

$ex=mysql_query($sql);

if($ex)
	echo "Table Created!";
else
	echo "Failed";

?>