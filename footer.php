<table class="navigation" width="100%" height="100" border="1" bordercolor="white" cellpading="0" cellspacing="0">
<tr>
<td width="25%">
<div class="portofolio">
<?php
require("connection.php");
$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_name'") or die (mysql_error());
$row = mysql_fetch_row($sql);
print $row[0];
print "<br>";

$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_about'") or die (mysql_error());
$row = mysql_fetch_row($sql);
print $row[0];
print "<p>";

$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_engine'") or die (mysql_error());
$row = mysql_fetch_row($sql);
print $row[0];
print "<br>";
print "Copyright &#169; " . date("Y") . "";
?>
</div>
</td>
<td width="25%">
<ul>
<li type="square"><a href="news.php" class="linknavigasibawah">NEWS</a></li>
<li type="square"><a href="about.php" class="linknavigasibawah">ABOUT</a></li>
<li type="square"><a href="history.php" class="linknavigasibawah">HISTORY</a></li>
<li type="square"><a href="contact.php" class="linknavigasibawah">CONTACT</a></li>
<li type="square"><a href="donate.php" class="linknavigasibawah">DONATE</a></li>
</ul>
</td>
<td width="50%">
<table width="100%" height="100%" cellpading="0" cellspacing="0" border="0" bordercolor="white">
<tr>
<td>
<div class="font_navigation">
<?php
echo "<small>";

$sql = mysql_query("SELECT COUNT(country_code) AS country_count FROM tb_clan_country") or die(mysql_error());
$row = mysql_fetch_row($sql);
if ($row[0] > 0) {
echo "There Was At Least $row[0] Country Available";
}
else {
echo "There Was Not Available Any Country At This Time";
}
echo "<br>";

$sql = mysql_query("SELECT COUNT(username_clan_member) AS username_count FROM tb_clan_member_head") or die(mysql_error());
$row = mysql_fetch_row($sql);
if ($row[0] > 0) {
echo "There Was $row[0] Member Registered";
}
else {
echo "There Was Not Available Any Member Yet";
}
echo "<br>";

?>
</div>
</td>
<td>
<a href="donate.php"><center><img class="footer" src="media/img/btn_heart_donate.png" alt="Donate" width="150" height="100"></center></a>
</td>
<td>
<a href="donate.php#bca"><center><img class="footer" src="media/img/btn_bca_donate.png" alt="Donate" width="150" height="100"></center></a>
</td>
<td>
<a href="donate.php#bitcoin"><center><img class="footer" src="media/img/btn_bitcoin_donate.png" alt="Donate" width="150" height="100"></center></a>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p>