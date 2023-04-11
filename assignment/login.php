<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}
		h2 {
			text-align: center;
			color: #333;
		}
		form {
			width: 50%;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}
		label {
			display: inline-block;
			width: 30%;
			margin-bottom: 10px;
			font-weight: bold;
			color: #666;
		}
		input[type="text"],
		input[type="password"] {
			width: 60%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-size: 16px;
			color: #333;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
	</style>
</head>
<body>
	<h2>Login</h2>
	<form method="post" action="log.php">
		<label>Username:</label>
		<input type="text" name="username"><br><br>
		<label>Password:</label>
		<input type="password" name="password"><br><br>
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>
