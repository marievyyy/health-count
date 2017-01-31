$(document).ready(function (){

	$("#inputUser").keyup(function(){
		var username = $('input[name=username]').val();
		var password = $('input[name=pass]').val();
		var conpass = $('input[name=cpass]').val();

		$.ajax({
			type:"POST",
			url: "http://localhost/health/main/checkuserName",
			data: {username: username},
			dataType: "json",
			success: function(data){
				console.log(data);
				
				if (data == "No spacing") {
					console.log("No spacing");
					$('#errorUser').html("No spacing");
					$('#next1').attr("disabled", true);
				}else{

					if (data == "minimum of 6 maximum of 24 alphabet or numeric or both") {
						console.log("minimum of 6 maximum of 24 alphabet or numeric or both");
						$('#errorUser').html("minimum of 6 maximum of 24 alphabet or numeric or both");
						$('#next1').attr("disabled", true);
					}else{

						if(data == "Not a valid username"){
							console.log("Accept word, numeric and underscore only");
							$('#errorUser').html("Accept word, numeric and underscore only");
							$('#next1').attr("disabled", true);
						}else{

							if (data == "already exist") {
								console.log(data);
							 	console.log("Username already exist");
							 	$('#errorUser').html("Username already exist");
								$('#next1').attr("disabled", true);

							}else{
								console.log(data);
								$('#errorUser').html("");
								console.log("accepted");
							 	$('#next1').attr("disabled", false);
							}
						}
					}
				}
			},
			error: function(data){
				console.log('no return value');
			}
		});
	});

	$("#pass").keyup(function(){
		if(password >= 6 && password <= 255){
			
			if ('/\W\d/' == true){
				
				if (password == conpass){

				}else{
					console.log();
				}
			}else{

			}
		}else{

		}
	});


	$("#msform").submit(function(e){
		e.preventDefault();
		var dataform = $(this);
		var row = '';
		

		$.ajax({
			type:"POST",
			url: "http://localhost/health/main/data_register",
			data: dataform.serialize(),
			dataType: "json",
			success: function(data){
				$.each(data, function(row, data){
					console.log(data);
				});
			},
			error: function(data){
				console.log('no return value');
			}
		});
	});
});