<?php
	include_once "../load.php";
	delete_user($_GET['id']);
	echo "<script>alert('this user deleted succefully');</script>";
	header('refresh:1 url=admin_dashboard.php');
?>