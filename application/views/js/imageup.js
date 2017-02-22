$(document).ready(function(){
	
	$('#uploadImage').submit(function(e){
		e.preventDefault();
		
		var imageUpload = $('input[name=fileImage]').val();

		console.log(imageUpload);

		// $.ajax({
		// 	type:"POST",
		// 	url: "http://localhost/health/main/testUpload",
		// 	data: {imageUpload:imageUpload},
		// 	dataType: "json",
		// 	success: function(data){
		// 		console.log(data);
		// 	}
		// });

	});

});