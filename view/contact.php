<?php?>
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
	<title>Contacts - Company</title>
</head>

<body>
	<?php
		include('../header.php');
	?>

	<div class="jumbotron">
		<section class="mb-4">
	    	<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
		    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
		        a matter of hours to help you.</p>
		    <div class="row">
		        <div class="col-md-9 mb-md-0 mb-5">
		            <form id="contact-form" name="contact-form" action="mail.php" method="POST">
		                <div class="row">
		                    <div class="col-md-6">
		                        <div class="md-form mb-0">
		                            <label for="name" class="">Name</label>
		                            <input type="text" id="name" name="name" class="form-control">
		                            <p class="alert-danger" id="name_error"></p>
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="md-form mb-0">
		                            <label for="email" class="">E-mail</label>
		                            <input type="text" id="email" name="email" class="form-control">
		                            <p class="alert-danger" id="mail_error"></p>
		                        </div>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-12">
		                        <div class="md-form">
		                            <label for="message">Message</label>
		                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
		                            <p class="alert-danger" id="msg_error"></p>
		                        </div>
		                    </div>
		                </div>
		            </form>
		            <div class="row justify-content-center">
		                <a class="btn btn-primary btn-lg" onclick="sendEmail();">Send</a>
		            </div>
		            <div class="status"></div>
		        </div>
		        <div class="col-md-3 text-center">
		            <ul class="list-unstyled mb-0">
		                <li>
		                	<svg class="bi bi-geo" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  <path d="M11 4a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
							  <path d="M7.5 4h1v9a.5.5 0 0 1-1 0V4z"/>
							  <path fill-rule="evenodd" d="M6.489 12.095a.5.5 0 0 1-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.382.655.246 1.593.408 2.653.408s1.998-.162 2.653-.408c.329-.123.56-.258.701-.382.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 1 1 .212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.336-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 0 1 .595.383z"/>
							</svg>
		                    <p>San Francisco, CA 94126, USA</p>
		                </li>

		                <li>
		                	<svg class="bi bi-phone" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
							  <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
							</svg>
		                    <p>+ 01 234 567 89</p>
		                </li>

		                <li>
		                	<svg class="bi bi-at" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
							</svg>
		                    <p>contact@mdbootstrap.com</p>
		                </li>
		            </ul>
		        </div>
		    </div>
	    </section>
	</div>

	<?php
		include('../footer.php');	
		include('modal.php');	
	?>
</body>
</html>
