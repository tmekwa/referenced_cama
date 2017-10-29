<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="css/sign.css" rel="stylesheet">
		<title>Sign Up</title>
	</head>
	<body>
        <h2>SIGN UP</h2>
		<form >
			<div class="container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>

				<label><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>

				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>

				<label><b>Repeat Password</b></label>
				<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
				<input type="checkbox" checked="checked"> Remember me
				<div class="clearfix">
					<button type="submit" class="signupbtn"><strong>Sign Up</strong></button>
                </div>
                <hr>
			</div>
        </form>
	</body>
</html>
