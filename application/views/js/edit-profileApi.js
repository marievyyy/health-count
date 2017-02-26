$(document).ready(function(){
	var tmp;
	$.ajax({
			type:"GET",
			url: "http://localhost/health/main/profileAPI",
			dataType: "json",
			async: false,
			success: function(data){
				tmp = data;
			}
		});
	var profileData = function () {
    var tmp = null;
	    $.ajax({
		        'async': false,
		        type:"GET",
				url: "http://localhost/health/main/profileAPI",
				dataType: "json",
		        success: function (data) {
		            tmp = data;
		        }
		    });
		    return tmp;
		}();
	console.log(profileData);

	var username = $('#inputUser').val(profileData.username);
	var nameInput = $('#inputName').val(profileData.patient_name);
	var ageInput = $('#inputAge').val(profileData.age);
	var bday = $('#inputBirthday').val(profileData.birth_date);
	var height = $('#height').val(profileData.height);
	var weight = $('#weight').val(profileData.weight);

	$('#inputUser').keyup(function(){
		var username = $('input[name=username]').val();

		console.log(username);
	 if (username == profileData.username) {
	 	console.log("did not change username");
	 }
	 else{
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
			error: function(data){
				$('#next1').attr("disabled", true);
				console.log('no return value');
			}
		});
	 	console.log("username change");
	 }
	});

	$('#oldPass').keyup(function(){
		var oldPass = $('#oldPass').val();
		
		$.ajax({
			type:"POST",
			url: "http://localhost/health/main/confirmOldPassword",
			data: {oldPass: oldPass},
			dataType: "json",
			success: function(data){
				if (data == "Valid") {
					$('#errorOldPass').text("Success");
					$('#next1').attr("disabled", false);
				}else{
					$('#errorOldPass').text("Incorrect Password");
					$('#next1').attr("disabled", true);
				}
			}
		});
	});

	$('#pass').keyup(function(){
		var password = $('input[name=pass]').val();

		if(password.length >= 6 && password.length <= 255){
			
			if (password.match(/\d/) != null || password.match(/\W/) != null && password != ""){
				$('#errorPass').text("Success");
				$('#next1').attr("disabled", false);

			}else{
				console.log("must contain or is a number or special chars");
				$('#errorPass').text("must contain or is a number or special chars");
				$('#next1').attr("disabled", true);
			}
		}else{
			console.log("password length minimum of 6 maximum of 255");
			$('#errorPass').text("password length minimum of 6 maximum of 255");
			$('#next1').attr("disabled", true);
		}

	});

	$('#cpass').keyup(function(){

		var password = $('input[name=pass]').val();
		var conpass = $('input[name=cpass]').val();

		if (password == conpass && password != null && password != ""){//accept data if all validation passed
			$('#errorconPass').text("Success");
			console.log("accepted");
			$('#next1').attr("disabled", false);
		}else{
			console.log("Password doesnt Match");
			$('#errorconPass').text("Password doesnt Match");
			$('#next1').attr("disabled", true);
		}
		
	});

	$('#inputName').keyup(function(){
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
				$('#next2').attr("disabled", true);
			}
		}else{
			console.log("name length minimum of 8 maximum of 255");
			$('#errorName').text("name length minimum of 8 maximum of 255");
			$('#next2').attr("disabled", true);
		}
	});

	$('#inputAge').keyup(function(){
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
			$('#next2').attr("disabled", true);
		}
	});

	$('#inputBirthday').keyup(function(){
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

	$("#msform").submit(function(e){
		e.preventDefault();
		var dataform = $(this);

		$.ajax({
			type:"POST",
			url: "http://localhost/health/main/editprofileAPI",
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
					//window.location = "http://localhost/health/main/profile";
				}
			},
			error: function(data){
				$('#errorHeight').text("Check your inputs go Back at the Beginning");
				console.log(data);
			}
		});
	});
});