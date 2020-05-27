<?php
	$connect = mysqli_connect("localhost","root","password", "webModule") OR DIE("Error connecting to the database");
	
	session_start();


	$nameGet = "SELECT name FROM login WHERE id = '".$_SESSION['userID']."'" ;
	$nameRow = mysqli_query($connect,$nameGet);
	$line = mysqli_fetch_array($nameRow);
	
	$logged = "		<p style='color:black;text-decoration: none;'> Welcome, <br>".$line['name']."!!</p>
					<a style='color:black;text-decoration: none;' href='profile.php'>Profile</a>
					<a style='color:black;text-decoration: none;' href='../logOut.php'>Log Out</a>";
	$unlogged = "	<a style='color:black;text-decoration: none;' href='signup.php'>SignUp</a>
				    <a style='color:black;text-decoration: none;' href='signin.php'>LogIn </a>";

	$user_check = $_SESSION['userID'];

	if ($user_check == 0)
		$accStatus = $unlogged;
	else
		$accStatus = $logged;
	mysqli_close($connect);
?>