$(document).ready(function (){
$('#next1').attr("disabled", true);
	$("#next1").click(function(){
		var username = $('input[name=username]').val();
		var password = $('input[name=pass]').val();
		var conpass = $('input[name=cpass]').val();

		if (username != "" && password != "" && conpass != "") {
			$.ajax({
				type:"POST",
				url: "http://localhost/health/main/checkuserName",
				data: {username: username},
				dataType: "json",
				success: function(data){
					if (data == "No spacing") {
					console.log("No spacing");
					$('#errorUser').text("No spacing");
					$('#next1').attr("disabled", true);
					}else{
						if (data == "length invalid") {
							console.log("minimum of 6 maximum of 24 alphabet or numeric or both");
							$('#errorUser').text("minimum of 6 maximum of 24 alphabet or numeric or both");
							$('#next1').attr("disabled", true);
						}else{

							if(data == "Not a valid username"){
								console.log("Accept word, numeric and underscore only");
								$('#errorUser').text("Accept word, numeric and underscore only");
								$('#next1').attr("disabled", true);
							}else{

								if (data == "already exist") {
									console.log(data);
								 	console.log("Username already exist");
								 	$('#errorUser').text("Username already exist");
									$('#next1').attr("disabled", true);

								}else{//accept data if all validation passed
									console.log(data);
									$('#errorUser').text("Success");
									console.log("accepted");
								 	$('#next1').attr("disabled", false);
								}
							}
						}
					}
				},
				//if data cant get
				error: function(){
					result = "error value";
				}
			});
		}else{
			console.log("required field");
		}
	});
});