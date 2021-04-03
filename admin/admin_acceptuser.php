<?php
	include_once "../load.php";
	accept_user($_GET['id']);
	echo "<script>alert('this user succefully accepted');</script>";
	header('refresh:1 url=admin_dashboard.php');
?>