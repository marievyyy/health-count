$(document).ready(function (){
	
	var username = $('input[name=username]').val();
	var password = $('input[name=pass]').val();
	var conpass = $('input[name=cpass]').val();
	if (username == "" && password == "" && conpass == "") {
		console.log("required");
		$('.error').html("required field");
		$('#next1').attr("disabled", true);
	}

	$("#inputUser").keyup(function(){
		var username = $('input[name=username]').val();

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
		var password = $('input[name=pass]').val();

		console.log(password);
		if(password.length >= 6 && password.length <= 255){
			
			if (password.match(/\d/) != null || password.match(/\W/) != null){
				$('#errorPass').html("");

			}else{
				console.log("must contain numbers or special chars");
				$('#errorPass').html("must contain numbers or special chars");
				$('#next1').attr("disabled", true);
			}
		}else{
			console.log("password length minimum of 6 maximum of 255");
			$('#errorPass').html("password length minimum of 6 maximum of 255");
			$('#next1').attr("disabled", true);
		}
	});

	$("#cpass").keyup(function(){
		var password = $('input[name=pass]').val();
		var conpass = $('input[name=cpass]').val();

		console.log(password);
		console.log(conpass);
		if(password.length >= 6 && password.length <= 255){
			
			if (password.match(/\d/) != null || password.match(/\W/) != null){
				$('#errorPass').html("");

				if (password == conpass){
					$('#errorconPass').html("");
					console.log("accepted");
					$('#next1').attr("disabled", false);
				}else{
					console.log("Password doesnt Match");
					$('#errorconPass').html("Password doesnt Match");
					$('#next1').attr("disabled", true);
				}
			}else{
				console.log("must contain numbers or special chars");
				$('#errorconPass').html("Invalid Input");
				$('#next1').attr("disabled", true);
			}
		}else{
			console.log("password length minimum of 6 maximum of 255");
			$('#errorconPass').html("Invalid Input");
			$('#next1').attr("disabled", true);
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