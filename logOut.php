<?php
	session_start();
	$_SESSION['userID'] = 0;
	echo "<script>window.location = 'index.php';</script>";
?>	