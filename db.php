<?php
	session_start();

	$server = "localhost";
	$user   = "root";
	$pass   = "password";
	$db     = "webModule";
	
	$connect = mysqli_connect($server,$user,$pass,$db);

	$mailGet = "SELECT email FROM login";
	$mailRow = mysqli_query($connect,$mailGet);
	$cpfGet = "SELECT cpf FROM login";
	$cpfRow = mysqli_query($connect,$cpfGet);
	$nickGet = "SELECT nickname FROM login";
	$nickRow = mysqli_query($connect,$nickGet);

	$success ="<div class='alert alert-success alert-dismissible fade show' role='alert'>
				  <strong>Succesfully Connected!</strong>
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>
				";
	$error ="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				  <strong>Try Again!</strong>
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>
				";

	mysqli_close($connect);

?>