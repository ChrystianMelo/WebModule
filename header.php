<?php
	include('session.php');
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
	<link rel="shortcut icon" type="image/x-icon" href="media/icon.png" />
</head>
<body>
	<!--div class="masthead bg-dark">
	  <div class="container">
	    <a class="bs-docs-booticon" href="/" aria-label="Bootstrap">
	      <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" class="mb-3" viewBox="0 0 64 64" role="img"><path fill="currentColor" fill-rule="evenodd" d="M16 0h32c8.837 0 16 7.163 16 16v32c0 8.837-7.163 16-16 16H16C7.163 64 0 56.837 0 48V16C0 7.163 7.163 0 16 0zm18.14 49c7.22 0 11.555-3.633 11.555-9.586 0-4.406-3.047-7.664-7.617-8.133v-.398c3.328-.563 5.93-3.727 5.93-7.266 0-5.203-3.82-8.437-10.172-8.437H20.242V49h13.899zm-8.648-29.367h7.125c3.89 0 6.164 1.828 6.164 4.945 0 3.211-2.414 4.922-7.054 4.922h-6.235v-9.867zm0 24.914V33.648h7.29c4.945 0 7.546 1.852 7.546 5.391 0 3.586-2.508 5.508-7.242 5.508h-7.594z"></path></svg>

	      <h1 class="f2">The Bootstrap Blog</h1>
	    </a>
	    <p class="f5">
	      News and announcements for all things <a href="https://getbootstrap.com/" title="Visit the Bootstrap docs">Bootstrap</a>, including new releases, <a href="https://themes.getbootstrap.com/" title="Browse the official Bootstrap themes">Bootstrap Themes</a>, and <a href="https://icons.getbootstrap.com/" title="Official open source Bootstrap Icons">Bootstrap Icons</a>.
	    </p>
	  </div>
	</div-->
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="home.php">
			<svg class="bi bi-bootstrap" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M12 1H4a3 3 0 00-3 3v8a3 3 0 003 3h8a3 3 0 003-3V4a3 3 0 00-3-3zM4 0a4 4 0 00-4 4v8a4 4 0 004 4h8a4 4 0 004-4V4a4 4 0 00-4-4H4z" clip-rule="evenodd"/>
				  <path fill-rule="evenodd" d="M8.537 12H5.062V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396zM6.375 4.658v2.467h1.558c1.16 0 1.764-.428 1.764-1.23 0-.78-.569-1.237-1.541-1.237H6.375zm1.898 6.229H6.375V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377z" clip-rule="evenodd"/>
			</svg>
			Company
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="about.php">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="projects.php">Projects</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="contact.php">Contact</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#">Join Us</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<button type="button" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#exampleModal">
				<svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" >
				  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
				  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
				</svg>
			</button>
			<p style="padding-left: 10px;"></p>
			<div class="dropdown" style="float:right;">
				<button class="btn btn-outline-success my-2 my-sm-0 dropbtn" type="button">
					<svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
					</svg>
				</button>
				<div class="dropdown-content">
					<?php echo $accStatus;?>
				</div>
			</div>
			<!--p style="padding-left: 10px;"></p>
			<button class="btn btn-outline-success my-2 my-sm-0" type="button" >
				<svg class="bi bi-bag" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 001 1h10a1 1 0 001-1V5zM1 4v10a2 2 0 002 2h10a2 2 0 002-2V4H1z" clip-rule="evenodd"/>
				  <path d="M8 1.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
				</svg>
			</button-->
		</form>	
		</div>
	</nav>

</body>
</html>