$(document).ready(function(){
	//weather API key
	//aba504a93d3df9db83a0753ce06b31c9
	
	$.ajax({
			type:"GET",
			url: "http://localhost/health/main/waterAPI",
			dataType: "json",
			success: function(data){
				console.log(data);
				if (typeof data["water_amount"] !=='undefined' && typeof data["gained_water"] !=='undefined') {
					$("#waterVal").text(data["water_amount"]);

				}else{
					$("#waterVal").text(data);
				}

				if (data["water_amount"] <= 0) {
					$('#water-add').attr("disabled", true);
				}

				urineCondition(data["urine"]);

			}
		});


	function urineCondition(dataUrine){
		if(dataUrine == "urine-one"){
			$('.newColor').removeClass("normal medium low").addClass("high");
			$('#dehydrate').text('Too Much Water!!!');
		}
		else if(dataUrine == "urine-two"){
			$('.newColor').removeClass("normal medium low").addClass("high");
			$("#dehydrate").text("Lower A Bit Your Intake!");
		}
		else if(dataUrine == "urine-three" || dataUrine == "urine-four"){
			$('.newColor').removeClass("low medium high").addClass("normal");
			$("#dehydrate").text("Normal Dehydration");
		}
		else if(dataUrine == "urine-five"){
			$('.newColor').removeClass("high normal low").addClass("medium");
			$("#dehydrate").text("Slightly Dehydrated");
		}else if (dataUrine == "urine-six" || dataUrine == "urine-seven"){
			$('.newColor').removeClass("normal medium low").addClass("high");
			$("#dehydrate").text("Highly!! Dehydrated");
		}else{
			$('.newColor').removeClass("normal medium low high");
			$("#dehydrate").text("Dehydration Not Set");
		}
	}

	$('.urine-six').click(function(){	
		$('#water-add').attr("disabled", false);
	});

	$('.urine-seven').click(function(){	
		$('#water-add').attr("disabled", false);
	});

	$('#msform').submit(function(){
		var glassVal = $("#glassVal").val();
		var urineColor = $("input[name=urine_color]:checked").val();
		console.log(glassVal);
		console.log(urineColor);
		
		$.ajax({
			type:"POST",
			url: "http://localhost/health/main/updatewaterIntake",
			dataType: "json",
			data: {
				glassVal: glassVal,
				urineColor: urineColor
			},
			success: function(data){
				console.log(data);
				$("#waterVal").text(data["water_amount"]);
				urineCondition(data["urine"]);
			}
		});
	});
});