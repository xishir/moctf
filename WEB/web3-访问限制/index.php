<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
$flag="Flag: moctf{xxxxxxxxxx}";
$head=getallheaders();
$ua=$head['User-Agent'];
$al=$head['Accept-Language'];

if(strstr($ua,"NAIVE"))
{
	if(strstr($al,"zh-HK"))
	{
		echo "<center>".$flag."</center>";
		echo "<!--By:daoyuan-->";
	}
	else echo "<center>只允许香港记者访问！</center>";  
}
else echo "<center>只允许使用NAIVE浏览器访问！</center>"; 
?>
</body>
