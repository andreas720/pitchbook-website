<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	
	<!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
	
	    <link href="css/ContactSection.css" rel="stylesheet">
		
		<!-- link to css for About us Profile cards -->	
	    <link href="css/ProfileCard.css" rel="stylesheet">
	
		
    <!-- My Custom style theme -->
    <link href="css/custom.css" rel="stylesheet">

	  <!-- Main style theme -->
    <link href="main.css" rel="stylesheet">
	
</head>

<body>

			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href data-toggle="modal" data-target="#login-modal">Log in</a>
            </li>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			  <div class="modal-dialog">
					<div class="loginmodal-container">
						<form name="signupform" action="" method="post">
							<select name="name" id="name" required>
											<option value="">Select an option</option>
											<option value="Startup">Startup</option>
											<option value="Investor">Investor</option>
												
							</select>
									<input type="text" name="username" placeholder="enter username" required>
									<input type="password"  name="password" placeholder="enter password" required>
									<input type="submit" value="login">
						</form>
					  <div class="login-help">
						<a href data-toggle="modal" data-target="#register-modal">Register</a> - <a href="#">Forgot Password</a>
					  </div>
					</div>
				</div>
		  </div>

</body>
</html>