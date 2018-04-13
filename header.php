<link href="css/settings.css" rel="stylesheet" type="text/css" />
<script src="css/SpryMenuBar.js" type="text/javascript"></script>
<link href="css/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

<?php
require_once("connection.php");
print "
<table width=600 height=100 cellpading=0 cellspacing=0 border=0 bordercolor=white>
<tr>
<td>
<img src=media/img/icon.png width=100 height=70 />
</td>
<td>
<font size=10 color=white>
";

$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_name'") or die (mysql_error());
$row = mysql_fetch_row($sql);
echo $row[0];

print "
</font>
<br>
<font color=white size=2>
";

$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_description'") or die (mysql_error());
$row = mysql_fetch_row($sql);
echo $row[0];

print "
</font>
</td>
</tr>
</table>
<ul id=MenuBarUtama class=MenuBarHorizontal>
<li><a href=index>HOME</a></li>
<li><a class=MenuBarItemSubmenu href=#>MEMBER</a>
<ul>
<li><a href=join>JOIN</a></li>
<li><a href=village>LOGIN</a></li>
</ul>
</li>
<li><a class=MenuBarItemSubmenu href=news>NEWS</a>
<ul>
<li><a href=news#board>BOARD</a></li>
<li><a href=news#recent>RECENT</a>
<ul>
";
$sql = mysql_query("SELECT id_clan_news, title_clan_news FROM tb_clan_news WHERE privacy_clan_news='PUBLIC' ORDER BY date_clan_news DESC LIMIT 0,5") or die (mysql_error());
$count = mysql_num_rows($sql);
if ($count > 0) {
while ($row = mysql_fetch_row($sql)) {
print "<li><a href=news.php?content=$row[0]>$row[1]</a></li>";
}
}
else
{
print "<li><a href=news#board>NEWS BOARD</a></li>";
}
print "
</ul>
</li>
</ul>
</li>
<li><a class=MenuBarItemSubmenu href=faq>FAQ</a>
<ul>
<li><a href=about>ABOUT</a>
<ul>
<li><a href=about#clan>CLAN</a></li>
<li><a href=about#web>WEB</a></li>
</ul>
</li>
<li><a href=history>HISTORY</a>
<ul>
<li><a href=history#rewards>REWARDS</a></li>
<li><a href=history#clan>CLAN</a></li>
</ul>
</li>
<li><a href=contact>CONTACT</a></li>
<li><a href=donate>DONATE</a></li>
</ul>
</li>
</ul>
";
?>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar(MenuBarUtama, {imgDown:"css/SpryMenuBarDownHover.gif", imgRight:"css/SpryMenuBarRightHover.gif"});
</script>