<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Food Add</title>

		<link rel="shortcut icon" href="../application/views/img/favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../application/views/css/bootstrap.min.css"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="../application/views/css/foodAdd.css">

	</head>

	<body>

        <div>

            <!-- For the banner section -->
            <div>
                <figure>
                    <div class="main-banner">
                    </div>
                </figure>
                <figure>
                    <div class="main-banner two">
                    </div>
                </figure>
                <figure>
                    <div class="main-banner three">
                    </div>
                </figure>
                <figure>
                    <div class="main-banner four">
                    </div>
                </figure>
            </div>
            <!-- End of the banner section -->

            <div class="add-container" align="center">
                <h1>Add food</h1>
                <div class="col-md-6">
                    <form id="submitform" align="left">
                        <label>Food Name: </label><input type="text" name="foodname"><br>
                        <label>Carbs: </label><input type="text" name="carbs"><br>
                        <label>Protein: </label><input type="text" name="protein"><br>
                        <label>Fats: </label><input type="text" name="fats"><br>
                        <label>Calories: </label><input type="text" name="calories"><br>
                        <label>Description: </label><input type="text" name="description"><br>
                        <label>Category: </label><input type="text" name="categoryname"><br>
                        <input type="submit" name="submitted" value="Submit">
                    </form>
                </div>
                <div class="col-md-6 border">
                    <div id="output"></div>
                </div>
               
            </div>


        </div>

		

		<script src="../application/views/js/jquery.min.js"></script>
		<script src="../application/views/js/foodAdd.js"></script>

	</body>
</html>