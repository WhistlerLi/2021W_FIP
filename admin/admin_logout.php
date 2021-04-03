<?php
	session_start();
	$_SESSION = array();
	session_destroy();
	header('refresh:1 url=../login.php');
?>