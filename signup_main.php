<!DOCTYPE html>
<html>
    
<head>
    <title>SignUp Page</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>
	<div class="container-fluid cont">
		<div class="d-flex justify-content-center h-100 login">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container" style="margin-bottom: 50px; margin-top: 30px">
						<img src="https://cdn4.iconfinder.com/data/icons/green-shopper/1068/user.png" class="brand_logo avatar" height="100px" width="100px" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="signup.php" method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-user"></i></span>
							</div>
							<input type="text" name="name" class="form-control input_user"  placeholder="First Name">
                        </div>
                        <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-user"></i></span>
							</div>
							<input type="text" name="last" class="form-control input_user"  placeholder="Last Name">
                        </div>
                        <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-user"></i></span>
							</div>
							<input type="text" name="gender" class="form-control input_user"  placeholder="Gender">
                        </div>
                        <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-user"></i></span>
							</div>
							<input type="number" name="age" class="form-control input_user" max="100" min="18"  placeholder="Age">
                        </div>
                        <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input type="text" name="mail" class="form-control input_user"  placeholder="E-mail">
                        </div>
                        <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input type="text" name="rmail" class="form-control input_user"  placeholder="Repeat e-mail">
                        </div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="passwd" class="form-control input_pass"  placeholder="Password">
                        </div>
                        <div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="rpasswd" class="form-control input_pass"  placeholder="Repeat password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
							</div>
							<p class='data'>
							<?php
								if( isset($_GET['f']) ) {
									if( $_GET['f'] == 1 ) echo "<span style='color: red'>Please, check your data</span>";
								}
							?>
							</p>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" name="button" class="btn btn-primary">Sign Up</button>
						</div>
					</form>
				</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Already have an account? <a href="login_main.php" class="ml-2">Log In</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		document.querySelector('.ma').addEventListener('onfocus', delete);

		function delete() {
			document.querySelector('.data').innerHTML = '';
		}
	</script>
</body>
</html>
