<?php
$username = "u917613495_user";
$password = "WWW.JR-07.NET";
$database = "u917613495_sb";

mysql_connect("mysql.idhostinger.com",$username,$password) or die (mysql_error());
mysql_select_db($database) or die (mysql_error());
?>