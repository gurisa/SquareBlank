<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="img/ico" href="media/img/icon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("connection.php");
$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_name'") or die (mysql_error());
$row = mysql_fetch_row($sql);
print "<title>$row[0] | FAQ</title>";

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

<table width="100%" height="100%" cellpading="0" cellspacing="0" border="0" bordercolor="white">
<tr>
<td>

<table width="100%" height="100%" cellpading="0" cellspacing="0" border="0" bordercolor="white">
<tr>
<td height="40%">

<table class="menu_faq" width="98%" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<tr>
<td height="30px" width="15%">
<img src="media/img/small_shuriken.png" alt="x" width="14px" height="14px"></img>
<strong>Menu</strong>
</td>
</tr>
<tr>
<td width="100%" height="100%">
<div class="left_side">
<li type="square"><a href="about.php">About</a></li>
<li type="square"><a href="history.php">History</a></li>
<li type="square"><a href="contact.php">Contact</a></li>
<li type="square"><a href="donate.php">Donate</a></li>
</div>
</td>
</tr>
</table>

</td>
</tr>
<tr>
<td height="60%"></td>
</tr>
</table>

</td>
<td>

<table id="faq" class="navigation" width="100%" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<tr>
<td height="30px">
<img src="media/img/small_shuriken.png" alt="x" width="14px" height="14px"></img>
<strong>FAQ ( Frequently Ask Question )</strong>
</td>
</tr>
<tr>
<td>
<div class="faq">
<?php
$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_faq'") or die (mysql_error());
$row = mysql_fetch_row($sql);
print $row[0];
?>
</div>
</td>
</tr>
</table>

</td>
</tr>
</table>

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