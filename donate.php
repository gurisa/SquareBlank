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
print "<title>$row[0] | DONATE</title>";

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
<tr id=clan>
<td height=30px>
<img src=media/img/small_shuriken.png alt=x width=14px height=14px></img>
<strong>Donate</strong>
</td>
</tr>
<tr>
<td align=center>
<div style=padding:15px class=donate>
";

$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_donate_bitcoin'") or die (mysql_error());
$row = mysql_fetch_row($sql);
print "<img id=bitcoin src=media/img/bitcoin_donate.png width=150px height=150px alt=$row[0] title=$row[0] class=donate></img>";
$bitcoin = $row[0];

$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_donate_bca'") or die (mysql_error());
$row = mysql_fetch_row($sql);
print "<img id=bca src=media/img/bca_donate.png width=150px height=150px alt=$row[0] title=$row[0] class=donate></img>";
$bca = $row[0];

$sql = mysql_query("SELECT description_clan_setting FROM tb_clan_setting WHERE name_clan_setting='clan_master_name'") or die (mysql_error());
$row = mysql_fetch_row($sql);
$name = $row[0];

?>
</div>
<script type="text/javascript">
document.getElementById('bca').onclick = function(){
	swal({
		title: "Donate With BCA Bank",
		text: "Do You Want To Donate Now?",
		confirmButtonColor : "#3333ff",
		confirmButtonText: "Donate Now",
		cancelButtonText: "Cancel",
		showCancelButton: true,
		closeOnConfirm: false,   
		closeOnCancel: false,
		imageUrl: 'media/img/bca_donate.png'
	},
function(isConfirm){   
	if (isConfirm) {     
		swal({   
			title: "<?php print $name; ?>",   
			text: "<?php print $bca; ?>",
			confirmButtonText: "Donate",
			confirmButtonColor : "#3333ff",
			closeOnConfirm: true,
			cancelButtonText: "Cancel",
			showCancelButton: true,
			imageUrl: "media/img/bca_donate.png" 
		},
		function(isConfirm){
			if (isConfirm) {  
				window.open('http://www.klikbca.com/','_blank');
			}
			else {     
				swal({   
					type: "info",
					title: "That's Too Bad",   
					text: "Thank You Before",
					confirmButtonText: "Cancel",
					confirmButtonColor : "#3333ff",   
				}); 
			} 
		});
	}
	else {     
		swal({   
			type: "info",
			title: "That's Too Bad",   
			text: "Thank You Before",
			confirmButtonText: "Cancel",
			confirmButtonColor : "#3333ff",   
		}); 
	} 
});

};

document.getElementById('bitcoin').onclick = function(){
	swal({
		title: "Donate With BitCoin",
		text: "Do You Want To Donate Now?",
		confirmButtonColor : "#ff9933",
		confirmButtonText: "Donate Now",
		cancelButtonText: "Cancel",
		showCancelButton: true,
		closeOnConfirm: false,   
		closeOnCancel: false,
		imageUrl: 'media/img/bitcoin_donate.png'
	},
function(isConfirm){   
	if (isConfirm) {     
		swal({   
			title: "<?php print $name; ?>",   
			text: "<?php print $bitcoin; ?>",
			confirmButtonText: "Donate",
			confirmButtonColor : "#ff9933",
			closeOnConfirm: true,
			cancelButtonText: "Cancel",
			showCancelButton: true,
			imageUrl: "media/img/bitcoin_donate.png" 
		},
		function(isConfirm){
			if (isConfirm) {  
				window.open('http://www.blockchain.info/address/<?php print $bitcoin;?>','_blank');
			}
			else {     
				swal({   
					type: "info",
					title: "That's Too Bad",   
					text: "Thank You Before",
					confirmButtonText: "Cancel",
					confirmButtonColor : "#ff9933",   
				}); 
			} 
		});
	}
	else {     
		swal({   
			type: "info",
			title: "That's Too Bad",   
			text: "Thank You Before",
			confirmButtonText: "Cancel",
			confirmButtonColor : "#ff9933",   
		}); 
	} 
});
};
</script>
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