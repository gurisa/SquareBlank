<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="img/ico" href="media/img/icon.ico">

<link rel='stylesheet' href='css/sweet_alert.css'>
<script src='js/sweet_alert.js'></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("connection.php");
$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_name'") or die (mysql_error());
$row = mysql_fetch_row($sql);
print "<title>$row[0] | CONTACT</title>";

$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_description' OR name_clan_setting='clan_about'") or die (mysql_error());
$row = mysql_fetch_row($sql);
while ($row = mysql_fetch_row($sql)) {
print "<meta name=description content=$row[0]></meta>";
print "<meta name=keywords content=$row[0]></meta>";
}
?>
</head>
<body>
<center>
<table class=header width="80%" height="100%" cellpading="0" cellspacing="0" border="0" bordercolor="white">
<tr>
<td>
<center>
<table width="90%" height="100%" cellpading="0" cellspacing="0" border="0" bordercolor="white">
<tr>
<td>
<?php
require("header.php");
?>
</td>
</tr>
<tr>
<td>
<hr color="white">
</td>
</tr>
<tr>
<td>
<div class="content">
<?php
print "
<table id=board class=navigation width=100% cellpading=0 cellspacing=0 border=1 bordercolor=white>
<tr id=rewards>
<td height=30px>
<img src=media/img/small_shuriken.png alt=x width=14px height=14px></img>
<strong>Contact</strong>
</td>
</tr>
<tr>
<td height=200px>
<div class=contact>
";
$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_contact_facebook'") or die (mysql_error());
$row = mysql_fetch_row($sql);
print "<a href=$row[0] target=_blank><img id=facebook src=media/img/btn_facebook.png width=150px height=150px class=contact alt=$row[0] title=$row[0]></img></a>";

$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_contact_mail'") or die (mysql_error());
$row = mysql_fetch_row($sql);
print "<a href=mailto:$row[0]><img id=mail src=media/img/btn_mail.png width=150px height=150px class=contact alt=$row[0] title=$row[0]></img></a>";

$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_contact_phone'") or die (mysql_error());
$row = mysql_fetch_row($sql);
print "<img id=phone src=media/img/btn_phone.png width=150px height=150px class=contact alt=$row[0] title=$row[0]></img>";

?>
</div>
</td>
</tr>
</table>
</div>
<hr color="white">
</td>
<tr>
<td>
<font color="white">
<?php
require("footer.php");
?>
</font>
</td>
</tr>
</table>
</center>
</td>
</tr>
</table>
</body>
</center>
</html>