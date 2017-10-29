<?php
	session_start();
	$_SESSION['message'] = '';
	$mysqli = mysqli_connect('localhost', 'root', 'Tumisho45', 'login');

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if ($_POST['password'] == $_POST['confirmpassword'])
		{
			$username = $mysqli->real_escape_string($_POST['username']);
			$password = md5($_POST['password']);//md5 hash password
			$email = $mysqli->real_escape_string($_POST['email']);
			
			$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
			if ($mysqli->query($sql) == true)
			{
				$to = $email;
				$subject = "Verifying user email address";
				$message = "Email verified!!!       click link: http://localhost:8080/Camagru/login.php";
				mail($to, $subject, $message);
				echo 'Registration successful! Added $username to the database';
				header("location: login.php");
			}else
			{
				$_SESSION['message'] = "User could not be added to database";
			}
		}
		else
			{
				$_SESSION['message'] = "Two passwords dont match";
			}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="sign.css" rel="stylesheet">
		<title>Sign Up</title>
	</head>
	<body>
        <h2>SIGN UP</h2>
		<form action="sign_up.php" method="POST" enctype="multipart/from-data" autocomplete="off">
			<div class="container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>

				<label><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>

				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>

				<label><b>Repeat Password</b></label>
				<input type="password" placeholder="Repeat Password" name="confirmpassword" required>
				<input type="checkbox" checked="checked"> Remember me
				<div class="clearfix">
					<button type="submit" class="signupbtn"><strong>Sign Up</strong></button>
                </div>
                <hr>
			</div>
        </form>
	</body>
</html>
