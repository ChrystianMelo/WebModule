<?php
	$result = "nothing";

	$connect = mysqli_connect("localhost","root","password", "webModule") OR DIE("Error connecting to the database");

	$mailGet = "SELECT email FROM login";
	$mailRow = mysqli_query($connect,$mailGet);
	$cpfGet = "SELECT cpf FROM login";
	$cpfRow = mysqli_query($connect,$cpfGet);
	$nickGet = "SELECT nickname FROM login";
	$nickRow = mysqli_query($connect,$nickGet);

	if(isset($_POST["sign"])) {
		$name = $_POST['name'];
		$mail = $_POST['mail'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		$cpf = $_POST['cpf'];
		$nick = $_POST['nick'];

		$sql = "INSERT INTO login (name, email, password, cpf, nickname) VALUES ('$name','$mail','$pass','$cpf','$nick')";

		$verificated = true;
		while($line = mysqli_fetch_array($mailRow)){
			if($mail == $line['email']) $verificated=false;
		}
		while($line = mysqli_fetch_array($cpfRow)){
			if($cpf == $line['cpf']) $verificated=false;
		}
		while($line = mysqli_fetch_array($nickRow)){
			if($nick == $line['nickname']) $verificated=false;
		}
		if($pass != $cpass)
			$verificated = false;
		if( $name == "" || 
			$mail == "" ||
			$pass == "" ||
			$cpf  == "" ||
			$nick == "")
			$verificated = false;
		if (strpos($nick, '@') !== false) $verificated = false;

		if($verificated == true)
			mysqli_query($connect, $sql);

		mysqli_close($connect);
	}

	if(isset($_GET["log"])){
		$username = $_GET['username'];
		$userpass = $_GET['userpass'];

		$typeInput   = "";
		$found       = "";

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
				echo "<script>window.location = 'profile.php'</script>";
			}
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
	<div class="split left">
	    <img class="d-block w-100 h-100" src="media/slides/slide3.jpg" alt="Ads">
	</div>

	<div class="split right jumbotron">
		<div class="switch6">
			<label class="switch6-light">
					<input type="checkbox">
					<span>
						<span onclick="changeDisplay('sign','log');">Log-In</span>
						<span onclick="changeDisplay('log','sign');">Sign-In</span>
					</span>
					<a class="btn btn-primary"></a>
			</label>
		</div>
		<div class="acc">
		  	<form class="log" id="log" method="GET">
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
				<input class="btn btn-primary btn-lg" type="submit" name="log" value="Log-In">
				<p><a href="#">Forgot your password?</a></p>
			</form>
			<form class="sign" id="sign" method="POST">
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
				  <input type="name" id="name" name="name" class="form-control" placeholder="Name">
				</div>
				<div class="mb-3">
				  <p class="alert-danger" id="name_error"></p>
				</div>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1">
				    	<svg class="bi bi-briefcase-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
						  <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v1.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z"/>
						</svg>
				    </span>
				  </div>
				  <input type="email" id="mail" name="mail"class="form-control" placeholder="Email">
				</div>
				<div class="mb-3">
				  <p class="alert-danger" id="mail_error"></p>
				</div>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1">
				    	<svg class="bi bi-check2-all" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M12.354 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
						  <path d="M6.25 8.043l-.896-.897a.5.5 0 1 0-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 0 0 .708 0l7-7a.5.5 0 0 0-.708-.708L8.5 10.293l-.543-.543-.707.707z"/>
						</svg>
				    </span>
				  </div>
				  <input type="text" id="cpf" name="cpf"class="form-control cpf-mask" placeholder="CPF">
			    </div>
				<div class="mb-3">
				  <p class="alert-danger" id="cpf_error"></p>
				</div>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1">
				    	<svg class="bi bi-at" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
						</svg>
				    </span>
				  </div>
				  <input type="name" id="nick" name="nick"class="form-control" placeholder="Username">
				</div>
				<div class="mb-3">
				  <p class="alert-danger" id="nick_error"></p>
				</div>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1">
				    	<svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <rect width="11" height="9" x="2.5" y="7" rx="2"/>
						  <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
						</svg>
				    </span>
				  </div>
				  <input type="password" id="pass" name="pass"class="form-control" placeholder="Password">
				</div>
				<div class="mb-3">
				  <p class="alert-danger" id="pass_error"></p>
				</div>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1">
				    	<svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <rect width="11" height="9" x="2.5" y="7" rx="2"/>
						  <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
						</svg>
				    </span>
				  </div>
				  <input type="password" id="cpass" name="cpass"class="form-control" placeholder="Confirm Password">
				</div>
				<div class="mb-3">
				  <p class="alert-danger" id="cpass_error"></p>
				</div>
				<input class="btn btn-primary btn-lg" type="submit" name="sign" value="Sign-In">
				
			</form>
		</div>
	</div>
	
	<!--?php
		include('footer.php');
	?-->	
	<?php
		include('modal.php');
	?>
</body>
</html>