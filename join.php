<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/jquery.js"></script>
<script src="js/icheck.js"></script>
<link href="source/skin/icheck/orange.css" rel="stylesheet">

<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="resources/demos/style.css">

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
print "<title>$row[0] | JOIN</title>";

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
<table class="header" width="80%" height="100%" cellpading="0" cellspacing="0" border="0" bordercolor="white">
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
<td width="75%" rowspan="2">
<center>

<table class="navigation" width="98%" height="450px" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<tr>
<td height="30px">
<img src="media/img/small_shuriken.png" alt="x" width="14px" height="14px"></img>
<strong>Join</strong>
</td>
</tr>
<tr>
<td>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = mysql_real_escape_string($_POST['username']);
	$email = $_POST['email'];
	$password = mysql_real_escape_string($_POST['password']);
	$confirm = mysql_real_escape_string($_POST['confirm']);
	$name = mysql_real_escape_string($_POST['name']);
	$facebook = mysql_real_escape_string($_POST['facebook']);
	$address = mysql_real_escape_string($_POST['address']);
	$country = mysql_real_escape_string($_POST['country']);
	$language = mysql_real_escape_string($_POST['language']);
	$gender = mysql_real_escape_string($_POST['gender']);
	$birthday = $_POST['birthday'];
	$profile = mysql_real_escape_string($_POST['profile']);
	$count = strlen($username) or strlen($email) or strlen($password) or strlen($confirm) or strlen($name) or strlen($facebook) or strlen($address) or strlen($country) or strlen($language) or strlen($gender) or strlen($birthday) or strlen($profile);
	
	if (empty($username) or empty($email) or empty($password) or empty($confirm) or empty($name) or empty($facebook) or empty($address) or empty($country) or empty($language) or empty($gender) or empty($birthday) or empty($profile)) {
		print "Blank Value";
	}
	else {
		if ($count > "250") {
			print "Max Character Is 250";
		}
		elseif ($count = "0") {
			print "Blank Content Is Not Allowed";
		}
		else {
			if (!preg_match("/^[a-zA-Z0-9 ]*$/", $username)) {
				print "Wrong Username Format";
			}
			else {
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					print "Wrong Email Format";
				}
				else {
					if ($password <> $confirm) {
						print "Password Is Not Same";
					}
					elseif ((strlen($password)) and (strlen($confirm)) < "8") {
						print "Password Must Less Than 8 Character";
					}
					else {
						if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
							print "Wrong Name Format";
						}
						else {
							if (!is_numeric($facebook)) {
								print "You Must Enter Your Facebook ID";
							}
							else {
								print "<table width=100% height=100% border=0 bordercolor=white cellpading=0 cellspacing=0><tr><td>";
								print "<div class=confirmation><table width=100% height=100% border=0 bordercolor=white cellpading=0 cellspacing=0>";
								print "<tr><td width=25%>Username</td><td width=75%>";
								print $username;
								print "</td>";
								print "<tr><td>Name</td><td>";
								print $name;
								print "</td>";
								print "<tr><td>Email</td><td>";
								print $email;
								print "</td>";
								print "<tr><td>Facebook ID</td><td>";
								print $facebook;
								print "</td>";
								print "<tr><td>Address</td><td>";
								print $address;
								print "</td>";
								print "<tr><td>Country</td><td>";
								print $country;
								print "</td>";
								print "<tr><td>Language</td><td>";
								print $language;
								print "</td>";
								print "<tr><td>Gender</td><td>";
								print $gender;
								print "</td>";
								print "<tr><td>Birthday</td><td>";
								print $birthday;
								print "</td>";
								print "<tr><td>Profile</td><td>";
								print $profile;
								print "</td></tr>";
								print "</table></div>";
								print "</td><td width=40% rowspan=2></td></tr><tr><td height=40%></td></tr></table>";
							}
						}
					}
				}
			}
		}
	}
}
else {
?>
<form method="POST" action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="join" name="join">
<div class="join">
<input type="text" name="username" id="username" placeholder="Username" class="styled" title="Choose Your Username" maxlength="250"></input>
<input type="text" name="email" id="email" placeholder="Email" class="styled" title="Insert Your Active Email" maxlength="250"></input>
<br>
<input type="password" name="password" id="password" placeholder="Password" class="styled" title="Insert Your Password" maxlength="250"></input>
<input type="text" name="name" id="name" placeholder="Name" class="styled" title="Insert Your Real Name" maxlength="250"></input>
<br>
<input type="password" name="confirm" id="confirm" placeholder="Confirm Password" class="styled" title="Confirm Your Password" maxlength="250"></input>
<input type="text" name="facebook" id="facebook" placeholder="Facebook ID" class="styled" title="Insert Your Facebook ID" maxlength="250"></input>
<hr color="#cccccc">

<table width="100%" height="" border="0" cellpading="0" cellspacing="0" bordercolor="white">
<tr>
<td width="50%">
<textarea name="address" class="address" title="Where Do You Life?" placeholder="Where Do You Life?" maxlength="250"></textarea>
</td>
<td width="50%">
<select name="country" class="styled">
<?php
$sql = mysql_query("SELECT country_code, country_name FROM tb_clan_country ORDER BY country_name ASC") or die (mysql_error());
while ($row = mysql_fetch_row($sql)) {
print "<option value=$row[0] name=$row[0] id=$row[0] title=$row[1]>$row[1]</option>";
}
?>
</select>
<br>
<textarea name="language" class="language" title="Insert Your Native Language" placeholder="Insert Your Native Language" maxlength="250"></textarea>
</td>
</tr>
</table>

<hr color="#cccccc">

<table width="100%" height="" border="0" cellpading="0" cellspacing="0">
<tr>
<td width="50%">
<input type="radio" name="gender" id="male" title="Male" value="MALE"><label for="male">&nbsp;Male</label></input>&nbsp;
<input type="radio" name="gender" id="female" title="Female" value="FEMALE"><label for="female">&nbsp;Female</label></input>
</td>
<td width="50%">
<input type="text" name="birthday" id="birthday" placeholder="Birthday" class="styled" title="Insert Your Birthday"></input>
</td>
</tr>
<tr>
<td colspan="2">
<textarea name="profile" class="profile" title="Describe Your Self" placeholder="Describe Your Self"></textarea>
</td>
</tr>
</table>
<div class="button_join">
<button type="submit" value="Join" class="join" name="join" form="join" formmethod="post" formtarget="_self">Join</button>
</div>
</div>
</form>
<?php

}
?>
</td>
</tr>
</table>

</center>
</td>
<td width="25%">
<?php
include_once('right_sidebar.php');
?>
</td>
</tr>
<tr>
<td height="80%"></td>
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