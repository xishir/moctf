<?php
	include "flag.php";
	highlight_file(__FILE__);

	if (isset($_GET['money'])) {
		$money=$_GET['money'];
		if(strlen($money)<=4&&$money>time()&&!is_array($money))
		{
			echo $flag;
			echo "<!--By:daoyuan-->";
		}
		else echo "Wrong Answer!";
	}
	else echo "Wrong Answer!";
?>

