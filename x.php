<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html> 
<head> 
<title>Test CSS</title> 
<style type="text/css"> 
#halaman {width:80%; margin: 0 auto; } 
p {margin:0px; padding-left:20px;} 
#judul {margin:0px;background:#fff; } 
.judul-teks {height:60px;margin:0px;color:#FFF;background:#090; } 

.line1, .line2, .line3, .line4 {display:block;background:#090;} 
.line1 {height:1px; margin:0 5px;} 
.line2 {height:1px; margin:0 3px;} 
.line3 {height:1px; margin:0 2px;} 
.line4 {height:2px; margin:0 1px;} 
</style> 
</head> 
<body>

<div id="halaman"> 
<div id="judul"> 
<b class="line1"></b>
<b class="line2"></b>
<b class="line3"></b>
<b class="line4"></b> 

<div class="judul-teks"> 
<p>Testing membuat lengkungan pada sudut div dengan CSS</p> 
</div> 

<b class="line4"></b>
<b class="line3"></b>
<b class="line2"></b>
<b class="line1"></b> 
</div> 
</div> 

</body> 
</html>