$(document).ready(function (){
	
	var username = $('input[name=username]').val();
	var password = $('input[name=pass]').val();
	var conpass = $('input[name=cpass]').val();
	var fullname = $('input[name=fullname]').val();
	var age = $('input[name=age]').val();
	var birthday = $('input[name=birthday]').val();

	if (username == "" && password == "" && conpass == "") {
		console.log("required");
		$('.error').text("required field");
		$('#next1').attr("disabled", true);
	}
	if (fullname == "" && age == "") {
		console.log("required");
		$('.error').text("required field");
		$('#next2').attr("disabled", true);
	}
	if (birthday == "") {
		console.log("required");
		$('.error').text("required field");
		$('#next3').attr("disabled", true);
	}

	$("#inputUser").change(function(){
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

							}else{
								console.log(data);
								$('#errorUser').text("\n");
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

	$("#pass").change(function(){
		var password = $('input[name=pass]').val();

		if(password.length >= 6 && password.length <= 255){
			
			if (password.match(/\d/) != null || password.match(/\W/) != null){
				$('#errorPass').text("\n");

			}else{
				console.log("must contain numbers or special chars");
				$('#errorPass').text("must contain numbers or special chars");
				$('#next1').attr("disabled", true);
			}
		}else{
			console.log("password length minimum of 6 maximum of 255");
			$('#errorPass').text("password length minimum of 6 maximum of 255");
			$('#next1').attr("disabled", true);
		}
	});

	$("#cpass").change(function(){
		var password = $('input[name=pass]').val();
		var conpass = $('input[name=cpass]').val();

		if(password.length >= 6 && password.length <= 255){
			
			if (password.match(/\d/) != null || password.match(/\W/) != null){
				$('#errorPass').text("");

				if (password == conpass){
					$('#errorconPass').text("");
					console.log("accepted");
					$('#next1').attr("disabled", false);
				}else{
					console.log("Password doesnt Match");
					$('#errorconPass').text("Password doesnt Match");
					$('#next1').attr("disabled", true);
				}
			}else{
				console.log("must contain numbers or special chars");
				$('#errorconPass').text("Invalid Input");
				$('#next1').attr("disabled", true);
			}
		}else{
			console.log("password length minimum of 6 maximum of 255");
			$('#errorconPass').text("Invalid Input");
			$('#next1').attr("disabled", true);
		}
	});

	$("#cpass").keyup(function(){
		var password = $('input[name=pass]').val();
		var conpass = $('input[name=cpass]').val();

				if (password == conpass){
					$('#errorconPass').text("");
					console.log("accepted");
					$('#next1').attr("disabled", false);
				}else{
					console.log("Password doesnt Match");
					$('#errorconPass').text("Password doesnt Match");
					$('#next1').attr("disabled", true);
				}
	});

	$("#inputName").change(function(){
		var fullname = $('input[name=fullname]').val();
		fullname = fullname.trim();
		fullname = fullname.replace(/\s\s+/g, ' ');

		console.log(fullname);
		if (fullname.length >= 8 && fullname.length <= 255) {
			if (fullname.match(/\d/) == null && /[!@#$%^&&*(),'./;\"]/.test(fullname) == false) {
				$('#errorName').text("");
				console.log("accepted");
				$('#next2').attr("disabled", false);
			}else{
				console.log("contain numbers and non-word char");
				$('#errorName').text("Name like this dont exist");
				$('#next2').attr("disabled", true);
			}
		}else{
			console.log("name length minimum of 8 maximum of 255");
			$('#errorName').text("name length minimum of 8 maximum of 255");
			$('#next2').attr("disabled", true);
		}
	});


	$("#inputAge").change(function(){
		var age = $('input[name=age]').val();
		age = age.trim();

		if (age >= 6 && age <= 89) {
				age = parseInt(age);
				$('#errorAge').text("");
				console.log("accepted");
				$('#next2').attr("disabled", false);
		}else{
			console.log("your age is not a human age");
			$('#errorAge').text("age value not applicable");
			$('#next2').attr("disabled", true);
		}
	});
	
	$('input[type="date"]').change(function(){
	 	var age = $('input[name=age]').val();
	    var date = new Date(this.value);
		day = date.getDate();
		month = date.getMonth() + 1;
		year = date.getFullYear();
	  	
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0!
		var yyyy = today.getFullYear();

		var ageToday;

	  	yyyyToday = yyyy - 6;
	  if (year < yyyyToday) {
	  	
		if (month < mm && day > dd) {
			ageToday = yyyy - year;
		}else{
			ageToday = yyyy - year - 1;
		}

		console.log(ageToday);
		console.log(age);

		if(age == ageToday){
			$('#errorBirthday').text("");
			$('#next3').attr("disabled", false);
		}else{
			console.log("age and birthday not same");
			$('#errorBirthday').text("Age not same as birthday");
			$('#next3').attr("disabled", true);		}
	  }else{
	  	console.log("your age is not a human age");
		$('#errorBirthday').text("infant or time traveler");
		$('#next3').attr("disabled", true);
	  }
    });

	$("#height").keyup(function(){
		var height = $('input[name=height]').val();
		if (height != "") {
			$('.error').text("");
		}
	});

	$("#weight").keyup(function(){
		var weight = $('input[name=weight]').val();
		if (weight != "") {
			$('.error').text("");
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
				console.log(data);

				if (data == "Error Username") {
					console.log("Error Username");
					$('#errorHeight').text("Go back to Username");
				}
				else if (data == 'Error Password') {
					console.log("Error Password");
					$('#errorHeight').text("Go back to Password");
				}
				else if (data == 'Error Age') {
					console.log("Error Age");
					$('#errorHeight').text("Go back to Age");
				}
				else if (data == 'Error Birthday') {
					console.log("Error Birthday");
					$('#errorHeight').text("Go back to Birthday");
				}
				else if (data == "Invalid height input") {
					console.log("Invalid height input");
					$('#errorHeight').text("Invalid height input");
				}
				else if (data == "Invalid weight input") {
					console.log("Invalid weight input");
					$('#errorWeight').text("Invalid weight input");
				}else{
					console.log("Submitted");
					$('#errorHeight').text("");
					$('#errorWeight').text("");
					window.location = "http://localhost/health/main/login";
				}
			},
			error: function(data){
				console.log(data);
			}
		});
	});
});