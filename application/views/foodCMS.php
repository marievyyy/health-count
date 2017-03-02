<!DOCTYPE html>
<html>
<head>
	<title>Food Add</title>
</head>
<body>
<form id="submitform">
	<label>Food Name: </label><input type="text" name="foodname"><br>
	<label>Carbs: </label><input type="text" name="carbs"><br>
	<label>Protein: </label><input type="text" name="protein"><br>
	<label>Fats: </label><input type="text" name="fats"><br>
	<label>Calories: </label><input type="text" name="calories"><br>
	<label>Description: </label><input type="text" name="description"><br>
	<label>Category: </label><input type="text" name="categoryname"><br>
	<input type="submit" name="submitted" value="Submit">
</form>
	<p id="output"></p>

	<script src="../application/views/js/jquery.min.js"></script>
	<script src="../application/views/js/foodAdd.js"></script>
</body>
</html>