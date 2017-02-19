$(document).ready(function(){
	
	$.ajax({
			type:"GET",
			url: "http://localhost/health/main/profileAPI",
			dataType: "json",
			success: function(data){
				console.log(data);
				var gender = "Male";
				var user_name = "";
				var month = "";
				var bday = "";

				var str_name = data["patient_name"].split(" ");
				var str_date = data["birth_date"].split("-");

				for (var i = 0; i < str_name.length; i++) {
					var replaceLetter = str_name[i].charAt(0).toUpperCase();
					var res = str_name[i].replace(str_name[i].charAt(0), replaceLetter);
					user_name += res + " ";
				}

				if (data["gender"] == "M") {
					gender = "Male";
					$("#gender").removeClass("high normal").addClass("low");
				}
				else if(data["gender"] == "F"){
					gender = "Female";
					$("#gender").removeClass("low normal").addClass("high");
				}else{
					$("#gender").removeClass("high low").addClass("normal");
				}

				if (data["bmi_status"] == "Underweight") {
					$("#bmi_status").removeClass("low medium normal").addClass("high");
				}
				else if(data["bmi_status"] == "Normal"){
					$("#bmi_status").removeClass("high medium low").addClass("normal");
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

				switch(str_date[1]){
					case "01":
							month = "Jan.";
							break;
					case "02":
							month = "Feb.";
							break;
					case "03":
							month = "March";
							break;
					case "04":
							month = "April";
							break;
					case "05":
							month = "May";
							break;
					case "06":
							month = "June";
							break;
					case "07":
							month = "July";
							break;
					case "08":
							month = "Aug.";
							break;
					case "09":
							month = "Sept.";
							break;
					case "10":
							month = "Oct.";
							break;
					case "11":
							month = "Nov.";
							break;
					case "12":
							month = "Dec.";
							break;
					default:
							month = "N/A";
					
							
				}

				bday = month + " " + str_date[2] + ", " + str_date[0];

				$("#pname").prepend(user_name);
				$("#age").prepend(data["age"]);
				$("#gender").append(gender);
				$("#weight").prepend(data["weight"]);
				$("#height").prepend(data["height"]);
				$("#bmi").prepend(data["bmi"]);
				$("#bmi_status").prepend(data["bmi_status"]);
				$("#birthdate").prepend(bday);
			}
		});

});