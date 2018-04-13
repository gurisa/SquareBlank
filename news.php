<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="img/ico" href="media/img/icon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("connection.php");
$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_name'") or die (mysql_error());
$row = mysql_fetch_row($sql);
print "<title>$row[0] | NEWS</title>";

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
<tr>
<td height=30px>
<img src=media/img/small_shuriken.png alt=x width=14px height=14px></img>
<strong>Board</strong>
</td>
</tr>
<tr>
<td>
<div class=board>
";

$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_board'") or die (mysql_error());
$row = mysql_fetch_row($sql);
print $row[0];

print "
</div>
</td>
</tr>
</table>

";

if (isset($_GET['content'])) {
	$content = mysql_real_escape_string($_GET['content']);
	if ($content == "" or '' OR (!is_numeric($content))) {
		print "
			<table class=navigation width=100% cellpading=0 cellspacing=0 border=1 bordercolor=white>
			<tr>
			<td height=30px>
			<img src=media/img/small_shuriken.png alt=x width=14px height=14px></img>
			<strong>Content Not Available</strong>
			</td>
			</tr>
			<tr>
			<td>
			<div class=board>
				Oops Content Not Available &nbsp;<a href=news.php>Back</a>
			</div>
			</td>
			</tr>
			</table>
		";
		
	}
	else {
	$sql = mysql_query("SELECT id_clan_news, username_clan_member, title_clan_news, content_clan_news, date_clan_news FROM tb_clan_news WHERE id_clan_news=$content") or die (mysql_error());
	$row = mysql_fetch_row($sql);

	print "
	<table class=navigation width=100% cellpading=0 cellspacing=0 border=1 bordercolor=white>
	<tr>
	<td height=30px>
	<img src=media/img/small_shuriken.png alt=x width=14px height=14px></img>
	<strong>$row[2]</strong>
	</td>
	</tr>
	<tr>
	<td>
	<div class=board>
	$row[3]
	<p>
	Posted By $row[1]
	<br>
	$row[4]
	<p>
	<a href=news.php>Back</a>
	</div>
	</td>
	</tr>
	</table>

	";
	}
}
else {

	print "
	<table id=recent class=navigation width=100% height=150px cellpading=0 cellspacing=0 border=1 bordercolor=white>
	<tr>
	<td height=30px>
	<img src=media/img/small_shuriken.png alt=x width=14px height=14px></img>
	<strong>News</strong>
	</td>
	</tr>
	<tr>
	<td>
	<div style=padding:15px>
	";

	$data_count = 5;
	$data_count_escape = mysql_real_escape_string($data_count);

	if (isset($_GET['page'])) {
		$page_number = $_GET['page'];
	}
	else {
		$page_number = 1;
	}	
	if ($page_number == "" or '' OR (!is_numeric($page_number))) {
		header("location:news.php");
	}
	else {

	$page_number_escape = mysql_real_escape_string($page_number);
	$offset = ($page_number_escape - 1) * $data_count_escape;
	$offset_escape = mysql_real_escape_string($offset);

	$sql = mysql_query("SELECT COUNT(*) AS page_count FROM tb_clan_news WHERE privacy_clan_news='PUBLIC'") or die (mysql_error());
	$row = mysql_fetch_array($sql);
	$page_count = $row[0];

	$sql = mysql_query("SELECT id_clan_news, title_clan_news FROM tb_clan_news WHERE privacy_clan_news='PUBLIC' ORDER BY date_clan_news DESC LIMIT $offset_escape, $data_count_escape") or die(mysql_error());
	$row_count = mysql_num_rows($sql);

	if ($row_count==0) {
		print "Oops.. Content Currently Not Available";
	}
		else {
			while ($row = mysql_fetch_row($sql)) {
				print "<li type=square><a href=news.php?content=$row[0]>$row[1]</a></li>";
			}
		}

	$page_result = ceil($page_count/$data_count);
	print "<br>";

	if ($page_number > 1) {
		print "<a href='?page=".($page_number-1)."'>Previous</a>";
	}
		print "&nbsp";
	if ($page_number < $page_result) {
		print "<a href='?page=".($page_number+1)."'>Next</a>";
		}
	}

	print "
	</div>
	</td>
	</tr>
	</table>
	";

}
?>
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
</div>
</center>
</td>
</tr>
</table>
</body>
</center>
</html>