<table class="navigation" width="100%" height="150px" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<tr>
<td height="30px">
<img src="media/img/small_shuriken.png" alt="x" width="14px" height="14px"></img>
<strong>Latest News</strong>
</td>
</tr>
<tr>
<td>
<div style="text-align:left">
<?php
$sql = mysql_query("SELECT id_clan_news, title_clan_news FROM tb_clan_news WHERE privacy_clan_news='PUBLIC' ORDER BY date_clan_news DESC LIMIT 0,5") or die (mysql_query());
$count = mysql_num_rows($sql);
if ($count > 0) {
print "<ul>";
while ($row = mysql_fetch_array($sql)) {

$title = implode(" ", array_slice(explode(" ", $row[1]), 0, 3));
print "<li type=square><a href=news.php?content=$row[0]>$title</a></li>";

}
print "</ul>";
}
else {
print "<div class=padding>";
print "<center>There Was Not Available Any Content Yet</center>";
print "</div>";
}
?>
</div>
</td>
</tr>
</table>

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