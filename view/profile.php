<?php
	include('../session.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/patternStyle/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/myCodes/mainScreen.js"></script>
	<title>Profile - Company</title>
</head>

<body>
	<?php
		include('../header.php');
	?>

	<div class="jumbotron">
		<h3>Welcome: <i><?php echo $user_check;?></i></h3>
		<button name="LOGOUT" onclick="location.href='../logOut.php'">Log Out</button>
	</div>

	<?php
		include('../footer.php');	
		include('modal.php');	
	?>
</body>
</html>
