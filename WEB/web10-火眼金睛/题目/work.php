<?php
	session_start();
	@$rand_demo = $_SESSION['rand'];
	@$answer = md5(md5((string)$_POST['answer']));
	if ($answer == $rand_demo) {
		echo "<script language='javascript'>alert('moctf{Programming_1s_important_!!}');window.location='index.php'</script>";
	}else{
		echo "<script language='javascript'>alert('Error!!!');window.location='index.php'</script>";
	}
	echo "<br><br>";
	session_unset();
	session_destroy();
 ?>