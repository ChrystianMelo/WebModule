<?php
	session_start();

	$connect = mysqli_connect("localhost","root","password", "webModule") OR DIE("Error connecting to the database");

	$mailGet = "SELECT email FROM login";
	$mailRow = mysqli_query($connect,$mailGet);
	$cpfGet = "SELECT cpf FROM login";
	$cpfRow = mysqli_query($connect,$cpfGet);
	$nickGet = "SELECT nickname FROM login";
	$nickRow = mysqli_query($connect,$nickGet);

	$success ="<div class='alert alert-success alert-dismissible fade show' role='alert'>
				  <strong>Logged Succesfully!</strong>
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>
				";
	$error ="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
				  <strong>Try Again!</strong>
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>
				";

	if(isset($_GET["log"])){
		$username = $_GET['username'];
		$userpass = $_GET['userpass'];

		$typeInput   = "";
		$found       = "";

		if( $username == "") $GETerror_name = "<p class='alert-danger'>Empty</p>";
		if( $userpass == "") $GETerror_pass = "<p class='alert-danger'>Empty</p>";


		while($line = mysqli_fetch_array($mailRow)){
			if($username == $line['email']){
				$typeInput = "email";
				$found     = $line['email'];
			}
		}
		if($found == ""){
			while($line = mysqli_fetch_array($nickRow)){
				if($username == $line['nickname']){
					$typeInput = "nickname";
					$found     = $line['nickname'];
				}
			}
		}
		if($found != ""){
			$passGet = "SELECT password FROM login WHERE ".$typeInput." = '".$found."'" ;
			$passRow = mysqli_query($connect,$passGet);
			$line = mysqli_fetch_array($passRow);
			if($userpass == $line['password']){
				$idGet = "SELECT id FROM login WHERE ".$typeInput." = '".$found."'" ;
				$idRow = mysqli_query($connect,$idGet);
				$line = mysqli_fetch_array($idRow);
				$_SESSION['userID'] = $line['id'];
				$status = "<script>window.location = 'profile.php';</script>";
			}
			else
				$status = $error;
		}
		mysqli_close($connect);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/patternStyle/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/myCodes/mainScreen.js"></script>
	<title>Company</title>
</head>

<body>
	<?php
		include('header.php');
	?>
	<?php
		echo $status;
	?>

	<div class="jumbotron">
	  	<form class="form" id="log" method="GET">
			<div class="mb-3">
				<svg class="bi bi-person-circle" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
				  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
				  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
				</svg>
			</div>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1">
			    	<svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg>
			    </span>
			  </div>
			  <input type="text" class="form-control" name="username"placeholder="Email or username">
			</div>
				  <?php echo $GETerror_name;?>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1">
			    	<svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <rect width="11" height="9" x="2.5" y="7" rx="2"/>
					  <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
					</svg>
			    </span>
			  </div>
			  <input type="password" class="form-control" name="userpass" placeholder="Password">
			</div>
			<div class="mb-3">
			  <?php echo $GETerror_pass;?>
			</div>
			<input class="btn btn-primary btn-lg" type="submit" name="log" value="Log-In">
			<p><a href="#">Forgot your password?</a></p>
		</form>
	</div>	
	<?php
		include('footer.php');
	?>	
	<?php
		include('modal.php');
	?>
</body>
</html>