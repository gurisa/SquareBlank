<?php
$username = "square";
$password = "blank";
$database = "db_clan_management";

$con = mysql_connect("192.168.100.1",$username,$password) or die (mysql_error());
$db = mysql_select_db($database) or die (mysql_error());
?>