<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload Image</title>
</head>

<body>
<h1>Upload Image Here</h1>
	<form id="uploadImage" method="post" enctype="multipart/form-data">
		<input type="file" id="uploadFile" name="fileImage" accept="image/*">
		<button type="submit">Ok</button>
	</form>
	

	<div id="output">
		
	</div>
	<script src='../application/views/js/jquery.min.js'></script>
	<script src="../application/views/js/imageup.js"></script>
</body>
</html>