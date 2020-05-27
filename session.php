<?php
	$connect = mysqli_connect("localhost","root","password", "webModule") OR DIE("Error connecting to the database");
	
	session_start();
	
	$logged = "		<a style='color:black;text-decoration: none;' href='profile.php'>Profile</a>
					<a style='color:black;text-decoration: none;' href='logOut.php'>Log Out</a>";
	$unlogged = "	<a style='color:black;text-decoration: none;' href='signup.php'>SignIn</a>
				    <a style='color:black;text-decoration: none;' href='signin.php'>LogIn </a>";

	$user_check = $_SESSION['userID'];

	if ($user_check == 0)
		$accStatus = $unlogged;
	else
		$accStatus = $logged;
	mysqli_close($connect);
?>