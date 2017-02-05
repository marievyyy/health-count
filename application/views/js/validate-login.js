$(document).ready(function(){

	$("#formlogin").submit(function(e){
		e.preventDefault();
		var dataform = $(this);

		$.ajax({
			type:"POST",
			url: "http://localhost/health/main/getUser",
			data: dataform.serialize(),
			dataType: "json",
			success: function(data){
				if (data == "Valid") {
					console.log("Valid input");
					$('#error').html("Valid input");
					window.location = "http://localhost/health/main/home";
				}else{
					console.log("Invalid input");
					$('#error').html("Invalid input");
				}
			},
			error: function(data){
				console.log(data);
			}
		});
	});
});