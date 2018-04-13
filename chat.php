<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/jquery.js"></script>
<script src="js/icheck.js"></script>
<link href="source/skin/icheck/orange.css" rel="stylesheet">

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

<script>
  $(function() {
    $( "#birthday" ).datepicker({
	dateFormat:'yy-mm-dd',
	changeMonth: true,
	changeYear: true,
	yearRange: '-100:'
	});
  });
</script>
  
<script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_flat-orange',
    radioClass: 'iradio_flat-orange'
  });
});
</script>

<link rel="icon" type="img/ico" href="media/img/icon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("connection.php");
$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_name'") or die (mysql_error());
$row = mysql_fetch_row($sql);
print "<title>$row[0] | Chat & Command</title>";

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
<td width="75%">
<center>

<table class="navigation" width="98%" height="100%" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<tr>
<td height="30px">
<img src="media/img/small_shuriken.png" alt="x" width="14px" height="14px"></img>
<strong>Chat & Command</strong>
</td>
</tr>
<tr>
<td>
<center>
<embed wmode="transparent" src="http://www.xatech.com/web_gear/chat/chat.swf" quality="high" width="700px" height="400px" name="chat" FlashVars="id=212382242" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://xat.com/update_flash.php" /><br><small><a target="_BLANK" href="http://xat.com/web_gear/?cb">Get your own Chat Box!</a> <a target="_BLANK" href="http://xat.com/web_gear/chat/go_large.php?id=212382242">Go Large!</a></small><br>
</center>
</td>
</tr>
</table>

</center>
</td>
<td width="25%">
<div style="position:relative; top:0%;">
<table class="navigation" width="100%" height="150px" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<tr>
<td height="30px">
<img src="media/img/small_shuriken.png" alt="x" width="14px" height="14px"></img>
<strong>Latest News</strong>
</td>
</tr>
<tr>
<td>
<div style="text-align:left;position:relative;">
<?php
$sql = mysql_query("SELECT id_clan_news, title_clan_news FROM tb_clan_news WHERE privacy_clan_news='PUBLIC' ORDER BY date_clan_news DESC LIMIT 0,5") or die (mysql_query());
$count = mysql_num_rows($sql);
if ($count > 0) {
print "<ul>";
while ($row = mysql_fetch_array($sql)) {
print "<li type=square><a href=news.php?content=$row[0]>$row[1]</a></li>";
}
print "</ul>";
}
else {
print "There Was Not Available Any Content Yet";
}
?>
</div>
</td>
</tr>
</table>

<br>

<table class="navigation" width="100%" height="150px" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<tr>
<td height="30px">
<img src="media/img/small_shuriken.png" alt="x" width="14px" height="14px"></img>
<strong>Web History</strong>
</td>
</tr>
<tr>
<td>
<center>
<?php
$today = date("Y-m-d");
$sql = mysql_query("SELECT hit_clan_page_visit FROM tb_clan_page_visit WHERE date_clan_page_visit=$today") or die (mysql_query());
$row = mysql_fetch_array($sql);
if ($count = mysql_num_rows($sql) > 0) {
print $row[0] ."Visitors Today";
}
else {
print "0 Visitors Today";
}

echo "<br>";

$sql = mysql_query("SELECT SUM(hit_clan_page_visit) AS sum_hit FROM tb_clan_page_visit") or die (mysql_query());
$row = mysql_fetch_array($sql);
if ($row[0] > 0) {
print $row[0] ."Visitors All The Time";
}
else {
print "0 Visitors All The Time";
}

echo "<br>";

$sql = mysql_query("SELECT COUNT(username_clan_member) AS username_count FROM tb_clan_member_head") or die(mysql_error());
$row = mysql_fetch_row($sql);
if ($row[0] > 0) {
echo "$row[0] Member Registered";
}
else {
echo "0 Member Registered";
}
?>
</center>
</td>
</tr>
</table>
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