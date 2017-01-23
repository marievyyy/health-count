<!DOCTYPE html>
<html>
<head>
	<title>Health Register</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">
</head>

<body>
<form method="post" id="registerForm" class="reg-form">
	<label>Patient Name: </label><input type="text" name="patient_name" placeholder="Patient Name" required>
	<br><br>
	<label>Birth Date: </label><input type="date" name="birth_date" placeholder="BirthDate" required>
	<br><br>
	<label>Gender: </label><input type="char" name="gender" placeholder="Gender" required>
	<br><br>
	<label>Weight (POUNDS): </label><input type="text" name="weight" placeholder="00.00" required>
	<br><br>
	<label>Height (INCHES): </label><input type="text" name="height" placeholder="00.00" required>
	<br><br>
	<label>Profile Picture: </label><input type="file" name="image_file" >
	<br><br>
 <!--BMI GET-->
	<label>Username: </label><input type="text" name="username" placeholder="Username" required>
	<br><br>
	<label>Password: </label><input type="" name="password" placeholder="Password" required>
	<br><br>
	<label>Confirm Password: </label><input type="" name="conpassword" placeholder="Password" required>
	<br><br>
	<input type="submit" name="reg_submit" id="submit-form" value="Register">
	<br><br><br>
	<p id="error-handler"></p>
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
