<?php
	$hostname= '127.0.0.1';
	$username='root';
	$password='';
	$db='Sign_Up';
	
	mysql_connect($hostname,$username,$password) or die();
	mysql_select_db($db) or die();
?>	