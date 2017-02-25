$(document).ready(function (){
	
	var username = $('input[name=username]').val();
	var password = $('input[name=pass]').val();
	var conpass = $('input[name=cpass]').val();
	var fullname = $('input[name=fullname]').val();
	var age = $('input[name=age]').val();
	var birthday = $('input[name=birthday]').val();
	$('#next1').attr("disabled", true);
	$('#next2').attr("disabled", true);
	$('#next3').attr("disabled", true);
	$("form").attr('autocomplete', 'off');
	
	//first division required field (username, password, confirm password)
	if (username == "" || password == "" || conpass == "") {
		console.log("required");
		$('.error').text("required field");
	}
	//second division required field
	if (fullname == "" || age == "") {
		console.log("required");
		$('.error').text("required field");
	}
	//3rd division required field
	if (birthday == "") {
		console.log("required");
		$('.error').text("required field");
	}
	//username errorhandler
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
					$('#errorUser').text("No spacing");
				}else{

					if (data == "length invalid") {
						console.log("minimum of 6 maximum of 24 alphabet or numeric or both");
						$('#errorUser').text("minimum of 6 maximum of 24 alphabet or numeric or both");
					}else{

						if(data == "Not a valid username"){
							console.log("Accept word, numeric and underscore only");
							$('#errorUser').text("Accept word, numeric and underscore only");
						}else{

							if (data == "already exist") {
								console.log(data);
							 	console.log("Username already exist");
							 	$('#errorUser').text("Username already exist");
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
			error: function(data){
				console.log('no return value');
			}
		});
	});

	//password errorhandler
	$("#pass").keyup(function(){
		var password = $('input[name=pass]').val();

		if(password.length >= 6 && password.length <= 255){
			
			if (password.match(/\d/) != null || password.match(/\W/) != null && password != ""){
				$('#errorPass').text("Success");

			}else{
				console.log("must contain or is a number or special chars");
				$('#errorPass').text("must contain or is a number or special chars");
			}
		}else{
			console.log("password length minimum of 6 maximum of 255");
			$('#errorPass').text("password length minimum of 6 maximum of 255");
		}
	});

	//confirm password errorhandler per type
	$("#cpass").keyup(function(){
		var password = $('input[name=pass]').val();
		var conpass = $('input[name=cpass]').val();

				if (password == conpass && password != null && password != ""){//accept data if all validation passed
					$('#errorconPass').text("Success");
					console.log("accepted");
					$('#next1').attr("disabled", false);
				}else{
					console.log("Password doesnt Match");
					$('#errorconPass').text("Password doesnt Match");
				}
	});

	//confirm password errorhandler
	$("#cpass").keyup(function(){
		var password = $('input[name=pass]').val();
		var conpass = $('input[name=cpass]').val();

		if(password.length >= 6 && password.length <= 255){
			
			if (password.match(/\d/) != null || password.match(/\W/) != null && password != ""){

				if (password == conpass){
					$('#errorconPass').text("Success");
					console.log("accepted");
					$('#next1').attr("disabled", false);
				}else{
					console.log("Password doesnt Match");
					$('#errorconPass').text("Password doesnt Match");
				}
			}else{
				console.log("must contain numbers or special chars");
				$('#errorconPass').text("Invalid Input");
			}
		}else{
			console.log("password length minimum of 6 maximum of 255");
			$('#errorconPass').text("Invalid Input");
		}
	});
	//complete name errorhandler
	$("#inputName").keyup(function(){
		var fullname = $('input[name=fullname]').val();
		fullname = fullname.trim();
		fullname = fullname.replace(/\s\s+/g, ' ');

		console.log(fullname);
		if (fullname.length >= 8 && fullname.length <= 255) {
			if (fullname.match(/\d/) == null && /[!@#$%^&&*(),'./;\"]/.test(fullname) == false) {
			//if all validation passed
				$('#errorName').text("Success");
				console.log("accepted");
				$('#next2').attr("disabled", false);
			}else{
				console.log("contain numbers and non-word char");
				$('#errorName').text("Name like this dont exist");
			}
		}else{
			console.log("name length minimum of 8 maximum of 255");
			$('#errorName').text("name length minimum of 8 maximum of 255");
		}
	});

	//age errorhandler
	$("#inputAge").keyup(function(){
		var age = $('input[name=age]').val();
		age = age.trim();

		if (age >= 6 && age <= 89) {
			//if all validation passed
				age = parseInt(age);
				$('#errorAge').text("Success");
				console.log("accepted");
				$('#next2').attr("disabled", false);
		}else{
			console.log("your age is not a human age");
			$('#errorAge').text("age value not applicable");
		}
	});
	//date errorhandler
	$('input[type="date"]').change(function(){
	 	var age = $('input[name=age]').val();
	    var date = new Date(this.value);
		//parse birthdate
		day = date.getDate();
		month = date.getMonth() + 1;
		year = date.getFullYear();
	  	//get actual date
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0
		var yyyy = today.getFullYear();

		var ageToday;
		//applicable range of birthdate
	  	yyyyToday = yyyy - 6;
	  if (year < yyyyToday) {
	  	
		if (month < mm && day > dd) {
			ageToday = yyyy - year;
		}else{
			ageToday = yyyy - year - 1;
		}

		console.log(ageToday);
		console.log(age);

		//age must equal to its birthdate to be valid
		if(age == ageToday){
			$('#errorBirthday').text("Success");
			$('#next3').attr("disabled", false);
		}else{
			console.log("age and birthday not same");
			$('#errorBirthday').text("Age not same as birthday");
		}
	  }else{
	  	console.log("your age is not a human age");
		$('#errorBirthday').text("infant or time traveler");
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
				$('#errorHeight').text("Check your inputs go Back at the Beginning");
				console.log(data);
			}
		});
	});
});