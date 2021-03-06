<?php include('./server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arinne</title>
    <?php include('./views/head.php') ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="./login/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="./login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="./login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="./login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="./login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="./login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="./login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="./login/css/util.css">
	<link rel="stylesheet" type="text/css" href="./login/css/main.css">
	<link rel="stylesheet" type="text/css" href="./login/css/errors.css">

</head>
<body>
    <header>
		<?php include('./views/header.php') ?>
	</header>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="register.php">
					<span class="login100-form-title p-b-32">
						Create new Account
					</span>

					<label class="txt1 p-b-11">
						Username
					</label>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
							<input class="input100" type="text" name="username" value="<?php echo $username; ?>">
							<?php if (isset($name_error)): ?>
								<span><?php echo $name_error; ?></span>
							<?php endif ?>
						</div>
                    </div>
                    <label class="txt1 p-b-11">
						Email
					</label>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
						<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?>>
							<input class="input100" type="text" name="email" value="<?php echo $email; ?>">
							<?php if (isset($email_error)): ?>
								<span><?php echo $email_error; ?></span>
							<?php endif ?>
						</div>
					</div>
					
					<label class="txt1 p-b-11">
						Password
					</label>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password_1">
						<span class="focus-input100"></span>
                    </div>
                    					
					<div class="flex-sb-m w-full p-b-48">
						<div>
							<a href="login.php" class="txt3">
								Already got an account? <br> Sign in here.
							</a>
						</div>
					</div>

					<div class="input100">
						<button type="submit" name="register" class="login100-form-btn">
							Register
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="./login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="./login/vendor/bootstrap/js/popper.js"></script>
	<script src="./login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="./login/vendor/daterangepicker/moment.min.js"></script>
	<script src="./login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="./login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="./login/js/main.js"></script>

</body>
</html>