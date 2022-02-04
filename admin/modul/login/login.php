<?php
ob_start();
session_start();
?>

<body class="authentication">

		<!-- Container start -->
		<div class="container">
			
			<form action="modul/login/in_login.php" method="post">
				<div class="row justify-content-md-center">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
                            <center>
								<a href="#" class="login-logo">
									<img src="img/Logo.png" alt="weiskei" />
								</a>
                                </center>
                                <br>
								<h5>Welcome back,<br />Please Login to your Account.<?php echo $_SESSION['wk_uname']; ?></h5>
                                <br>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Email Address" name="username"/>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Password" name="passwd"/>
								</div>
								<div class="actions mb-4">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="remember_pwd">
										<label class="custom-control-label" for="remember_pwd">Remember me</label>
									</div>
									<button type="submit" class="btn btn-primary">Login</button>
								</div>
								<!--<div class="forgot-pwd">
									<a class="link" href="forgot-pwd.html">Forgot password?</a>
								</div>-->
								<hr>
								<!--<div class="actions align-left">
									<span class="additional-link">New here?</span>
									<a href="signup.html" class="btn btn-dark">Create an Account</a>
								</div>-->
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
		<!-- Container end -->

	</body>