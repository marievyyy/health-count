<!DOCTYPE html>
<html>
<head>
	<title>Health</title>
</head>

<body>
<form method="post" id="registerForm" class="reg-form">
	<p><label>Patient ID: </label> <?php echo $token ?></p>
	<label>Patient Name: </label><input type="text" name="patient_name">
	<br><br>
	<label>Birth Date: </label><input type="date" name="birth_date">
	<br><br>
	<label>Gender: </label><input type="char" name="gender">
	<br><br>
	<label>Weight (POUNDS): </label><input type="text" name="weight">
	<br><br>
	<label>Height (INCHES): </label><input type="text" name="height">
	<br><br>
	<label>Profile Picture: </label><button>Attach Here!</button>
	<br><br>
 <!--BMI GET-->
	<label>Username: </label><input type="text" name="username">
	<br><br>
	<label>Password: </label><input type="" name="password">
	<br><br>
	<label>Confirm Password: </label><input type="" name="conpassword">
	<br><br>
	<input type="submit" name="submitted" id="submit-form">
	<br><br><br>
</form>
	<table id="row-data">
	</table>

	<!-- jQuery Version 1.11.1 -->
    <script src="../application/views/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../application/views/js/bootstrap.min.js"></script>
    <script src="../application/views/js/app.js"></script>
</body>
</html>
