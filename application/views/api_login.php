<!DOCTYPE html>
<html>
<head>
	<title>Health Login</title>
</head>

<body>
	<form method="post" id="loginForm" class="reg-form">
		<label>Username: </label><input type="text" name="log_username" required>
		<br><br>
		<label>Password: </label><input type="text" name="log_password" required>
		<br><br>
		<input type="submit" name="submit_login" id="submit_login">
		<p id="error-handler"></p>
	</form>

	<!-- jQuery Version 1.11.1 -->
    <script src="../application/views/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../application/views/js/bootstrap.min.js"></script>
    <script src="../application/views/js/app.js"></script>
</body>
</html>