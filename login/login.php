<?php 
session_start();
if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
 }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>SHIBUST - Login</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
	
		<!-- Fontfamily -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/plugins/feather/feather.css">
		
		<!-- Pe7 CSS -->
		<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="assets/img/login.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Welcome to SHIBUST</h1>
								<p class="account-subtitle">Need an account?  <a href="register.html">Sign Up</a></p>
								<h2>Sign in</h2>

								 <?php
        							if (isset($errors['user_exist'])) {
           								 echo '<div class="error-main">
                  							  <p>' . $errors['user_exist'] . '</p>
                    							</div>';
                   										 unset($errors['user_exist']);
        									}
       								 ?>
								<!-- Form -->
								<form action="index.html">
									<div class="form-group">
										<label >Username <span class="login-danger">*</span></label>
										<input class="form-control" type="text" name="name">
										<?php
												if (isset($errors['name'])){
													echo ' <div class="error">
													<p>' . $errors['name'] . '</p>
												</div>';
										
												}
												?>
										<span class="profile-views"><i class="fas fa-user-circle"></i></span>
									</div>
									<div class="form-group">
										<label >Password <span class="login-danger">*</span></label>
										<input class="form-control pass-input" type="text" name="password" required>
																			<?php
													if (isset($errors['password'])){
														echo ' <div class="error">
														<p>' . $errors['password'] . '</p>
													</div>';
											
													}
													?>
										<span class="profile-views feather-eye toggle-password"></span>
									</div>
									<div class="forgotpass">
										<div class="remember-me">
											<label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
											<input type="checkbox" name="radio">
											<span class="checkmark"></span>
											</label>
										</div>
										<a href="forgot-password.html">Forgot Password?</a>
										
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit">Login</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								  
								<!-- Social Login -->
								<div class="social-login">
									<a href="#" ><i class="fab fa-google-plus-g"></i></a>
									<a href="#" ><i class="fab fa-facebook-f"></i></a>
									<a href="#" ><i class="fab fa-twitter"></i></a>
									<a href="#" ><i class="fab fa-linkedin-in"></i></a>
								</div>
								<!-- /Social Login -->
								
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
    </body>
</html>