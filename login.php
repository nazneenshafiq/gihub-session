<?php
	if (isset($_POST['username']) && isset($_POST['password'])) {
		session_start();
		// Database connection
		// Retrive user from database
		$credentials = ['username' => 'admin', 'password' => '123456'];
		// compare credentials
		if ($_POST['username'] === $credentials['username']) {
			// autheticate
			if ($_POST['password'] === $credentials['password']) {
				$_SESSION['logged_in'] = true;
				$_SESSION['name'] = $credentials['username'];
				header("Location: index.php");
			}
			else
			{
				echo "Password provided is incorrect";
			}
		}
		else
		{
			echo "User not registered.";
		}
	}
	// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Title Page</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<body>
			<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="username" id="inputEmail3" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Sign in</button>
					</div>
				</div>
			</form>

			<!-- jQuery -->
			<script src="//code.jquery.com/jquery.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
			<script src="Hello World"></script>
		</body>
		</html>