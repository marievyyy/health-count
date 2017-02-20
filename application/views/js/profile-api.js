$(document).ready(function(){
	
	$.ajax({
			type:"GET",
			url: "http://localhost/health/main/profileAPI",
			dataType: "json",
			success: function(data){
				console.log(data);
				var gender = "Male";
				
				if (data["gender"] == "M") {
					gender = "Male";
					$("#gender").removeClass("high normal").addClass("low");
				}
				else if(data["gender"] == "F"){
					gender = "Female";
					$("#gender").removeClass("low normal").addClass("female");
				}else{
					$("#gender").removeClass("high low").addClass("normal");
				}

				if (data["bmi_status"] == "Underweight") {
					$("#bmi_status").removeClass("low medium normal").addClass("high");
				}
				else if(data["bmi_status"] == "Normal"){
					$("#bmi_status").removeClass("high medium low").addClass("normalbmi");
				}
				else if(data["bmi_status"] == "Overweight"){
					$("#bmi_status").removeClass("high normal low").addClass("medium");
				}
				else if(data["bmi_status"] == "Obese"){
					$("#bmi_status").removeClass("normal medium low").addClass("high");
				}
				else{
					$("#bmi_status").removeClass("high medium low").addClass("normal");
				}

				$("#pname").prepend(data["patient_name"]);
				$("#age").prepend(data["age"]);
				$("#gender").append(gender);
				$("#weight").prepend(data["weight"]);
				$("#height").prepend(data["height"]);
				$("#bmi").prepend(data["bmi"]);
				$("#bmi_status").prepend(data["bmi_status"]);
				$("#birthdate").prepend(data["birth_date"]);
			}
		});

});