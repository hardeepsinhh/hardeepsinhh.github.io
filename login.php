<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="container">
		<h1>Welcome to My Website</h1>

		<div class="form-container">
			<h2>Login</h2>
			<form action="validate.php" method="POST">
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" required><br><br>
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" required><br><br>
				<input type="submit" value="Login">
			</form>
		</div>

		<p>Don't have an account? <a href="signup.html">Sign up here</a></p>
	</div>
</body>
</html>
