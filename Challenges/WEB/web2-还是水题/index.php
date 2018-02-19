<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<form action="./index.php" method="post">
	请输入moctf：
	<input type="password" value="" disabled="disabled" name="password" maxlength="4">
	<input type="submit" value="提交">
</form>
<?php
$flag="Flag: moctf{xxxxxxxxxx}";
if(isset($_POST[password])&&$_POST[password]==="moctf")
{
	echo $flag;
	echo "<!--By:daoyuan-->";
}
else {
	echo "Wrong Answer!";
}
?>
</html>
