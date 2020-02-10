<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Student Register</title>
  </head>
  <body>
  <!--- <div class="alert alert-warning logauth">The password you entered was not valid. / No account found with that username.</div> --->
  <!--- <div class="alert alert-success logauth">Your account has been successfully verified.</div> --->
  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Register
					</span><br><br>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" id="username" name="username" placeholder="Username" required>
					</div>

          <div class="wrap-input100 validate-input">
						<input class="input100" type="email" id="email" name="email" placeholder="Email" required>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" id="password" name="password" placeholder="Password" required>
					</div>

          <div class="wrap-input100 validate-input">
						<input class="input100" type="password" id="password1" name="password1" placeholder="Password" required>
					</div>

					<button class="login100-form-btn" id="register" name="register" type="submit">Register</button>

					<div class="text-center newreg">
						<a href="">Login</a>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>