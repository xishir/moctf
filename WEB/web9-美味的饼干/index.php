<?php

header("Content-type: text/html; charset=utf-8");

$flag="moctf{Co0kie_is_1nter4sting}";
$echo=0;

if(isset($_POST['user'])&&isset($_POST['pass']))
{
	setcookie("login",base64_encode(md5('user')));
	echo "登录成功！欢迎".$_POST['user'];
	echo "<!--只有admin才有flag-->";
}

if(isset($_COOKIE['login']))
{
	$cookie = $_COOKIE['login'];
	if (base64_decode($cookie) === md5("admin"))
	{
	    echo "<!--".$flag."-->";
	    echo "<!--By:daoyuan-->";
	}
	else {
		$echo=1;
	}
}
else 
{
	$echo=1;
}


if($echo==1)
{
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Login</title>
	</head>
	<body>
		<br>
		<div class="container" align="center">
		  <form method="POST" action="./">
		    <p><input name="user" type="text" placeholder="Username"></p>
		    <p><input name="pass" type="password" placeholder="Password"></p>
		    <p><input value="Login" type="submit"/></p>
		  </form>
		</div>
	</body>
</html>

<?php
}
?>
