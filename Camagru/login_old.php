<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<link href="login.css" rel="stylesheet">
		<title>LOGIN</title>
    </head>
    <body>
        <h1>LOGIN</h1>
        <div class="logcontainer">
            <form action="process.php" method="POST">
			  <div class="imgcontainer">
				<img src="Portrait_placeholder.png" alt="Avatar" class="avatar">
			  </div>
			
			  <div class="container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
                
                <label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<button type="submit"><strong>Login</strong></button>
				<input type="checkbox" checked="checked"> Remember me
			  </div>
			
			  <div class="container" style="background-color:rgb(61, 61, 61)">
				<button type="button" class="cancelbtn"><strong>Cancel</strong></button>
                <span class="psw"><strong>Forgot </strong><a href="#" class="pass">password?</a></span>
                <hr>
              </div>
            </form>
        </div>
        
    </body>
</html>