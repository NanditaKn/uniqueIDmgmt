<?php
$host="us-cdbr-iron-east-03.cleardb.net";
$user="bb3dea654d44fc";
$pwd="a6e443e7";
$db="ad_86631bacf0d6f9a";
$con=mysql_connect($host,$user,$pwd);
if(!$con)
 die('Could not connect:'.mysql_error());
$c1=mysql_select_db($db,$con);
 if(!$c1)
   echo "Not Selected<br/>";
?>