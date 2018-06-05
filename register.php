<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>

<html>
<head>
	<title>Flacmusix</title>
	<link rel="stylesheet" href="assets/css/register.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>

	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	<?php

	if(isset($_POST['registerButton'])){
		echo '<script>
		$(document).ready(function(){
			$("#loginForm").hide();
			$("#registerForm").show();
		});

		</script>';
	}
	else{
		echo '<script>
		$(document).ready(function(){
			$("#loginForm").show();
			$("#registerForm").hide();
		});

		</script>';

	}

	 ?>

<div class="background">
	<div class="loginContainer">


	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<div class = "form-group">
				<?php echo $account->getError(Constants::$loginFailed); ?>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" class="form-control" name="loginUsername" type="text" placeholder="e.g. bartSimpson" value="<?php getInputValue('loginUsername') ?>" required>
			</div>
			</p>
			<p>
				<div class = "form-group">
				<label for="loginPassword">Password</label>
				<input id="loginPassword" class="form-control" name="loginPassword" type="password" placeholder="Your password" required>
				</div>
			</p>

			<button type="submit" class="btn btn-primary btn-lg btn-block" name="loginButton">LOG IN</button>
<br>
			<div class="hasAccountText">
				<span id="hideLogIn">Don't have an account yet? SignUp here.</span>
			</div>
		</form>



		<form id="registerForm" action="register.php" method="POST">
			<h2>Create your free account</h2>
			<p>
				<div class = "form-group">
				<?php echo $account->getError(Constants::$usernameCharacters); ?>
				<?php echo $account->getError(Constants::$usernameTaken); ?>
				<label for="username">Username</label>
				<input id="username" name="username" class="form-control" type="text" placeholder="e.g. bartSimpson" value="<?php getInputValue('username') ?>" required>
				</div>
			</p>

			<p>
				<div class = "form-group">
				<?php echo $account->getError(Constants::$firstNameCharacters); ?>
				<label for="firstName">First name</label>
				<input id="firstName" name="firstName" class="form-control" type="text" placeholder="e.g. Bart" value="<?php getInputValue('firstName') ?>" required>
				</div>
			</p>

			<p>
				<div class = "form-group">
				<?php echo $account->getError(Constants::$lastNameCharacters); ?>
				<label for="lastName">Last name</label>
				<input id="lastName" name="lastName" class="form-control" type="text" placeholder="e.g. Simpson" value="<?php getInputValue('lastName') ?>" required>
				</div>
			</p>

			<p>
				<div class = "form-group">
				<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
				<?php echo $account->getError(Constants::$emailInvalid); ?>
				<?php echo $account->getError(Constants::$emailTaken); ?>
				<label for="email">Email</label>
				<input id="email" name="email" class="form-control" type="email" placeholder="e.g. bart@gmail.com" value="<?php getInputValue('email') ?>" required>
				</div>
			</p>

			<p>
				<div class = "form-group">
				<label for="email2">Confirm email</label>
				<input id="email2" name="email2" class="form-control" type="email" placeholder="e.g. bart@gmail.com" value="<?php getInputValue('email2') ?>" required>
				</div>
			</p>

			<p>
				<div class = "form-group">
				<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
				<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
				<?php echo $account->getError(Constants::$passwordCharacters); ?>
				<label for="password">Password</label>
				<input id="password" class="form-control" name="password" type="password" placeholder="Your password" required>
				</div>
			</p>

			<p>
				<div class = "form-group">
				<label for="password2">Confirm password</label>
				<input id="password2" name="password2" class="form-control" type="password" placeholder="Your password" required>
				</div>
			</p>

			<button type="submit" class="btn btn-primary btn-lg btn-block" name="registerButton">SIGN UP</button>
<br>
			<div class="hasAccountText">
				<span id="hideRegister">Already have an account? LogIn here.</span>
			</div>

		</form>


	</div>

	<div class="loginText">
		<h1>Get great music, right now</h1>
		<h2>Listen or download loads of songs for free </h2>
		<ul>
			<li>FLAC(Free Lossless Audio Codec) format.</li>
			<li>1411kbps Bitrate.</li>
			<li>5.1 surround sound.</li>
		</ul>

	</div>
	</div>
</div>
</body>
</html>
