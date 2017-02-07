$(document).ready(function(){
	//aba504a93d3df9db83a0753ce06b31c9
	
	$.ajax({
			type:"GET",
			url: "http://localhost/health/main/waterAPI",
			dataType: "json",
			success: function(data){
				console.log(data);
				if (typeof data["water_amount"] !=='undefined' && typeof data["gained_water"] !=='undefined') {
					$("#waterVal").text(data["water_amount"]);
					$("#glassVal").val(data["gained_water"]);
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
			$('.newColor').removeClass("normal").removeClass("medium").removeClass("low").addClass("high");
			$('#dehydrate').text('Too Much Water!!!');
		}
		else if(dataUrine == "urine-two"){
			$('.newColor').removeClass("normal").removeClass("medium").removeClass("low").addClass("high");
			$("#dehydrate").text("Lower A Bit Your Intake!");
		}
		else if(dataUrine == "urine-three"){
			$('.newColor').removeClass("low").removeClass("medium").removeClass("high").addClass("normal");
			$("#dehydrate").text("Normal Dehydration");
		}
		else if(dataUrine == "urine-four"){
			$('.newColor').removeClass("low").removeClass("medium").removeClass("high").addClass("normal");
			$("#dehydrate").text("Normal Dehydration");
		}
		else if(dataUrine == "urine-five"){
			$('.newColor').removeClass("high").removeClass("normal").removeClass("low").removeClass("high").addClass("medium");
			$("#dehydrate").text("Slightly Dehydrated");
		}else if (dataUrine == "urine-six" || dataUrine == "urine-seven"){
			$('.newColor').removeClass("normal").removeClass("medium").removeClass("low").addClass("high");
			$("#dehydrate").text("Highly!! Dehydrated");
		}else{
			$('.newColor').removeClass("normal").removeClass("medium").removeClass("low").removeClass("high");
			$("#dehydrate").text("Dehydration Unknown");
		}
	}

	$('#water-add').click(function(){
		var glassVal = $("#glassVal").val();
		var urineColor = $("input[name=urine_color]:checked").val();
		var configPos = "positive";
		console.log(glassVal);
		console.log(urineColor);
		
		$.ajax({
			type:"POST",
			url: "http://localhost/health/main/updatewaterIntake",
			dataType: "json",
			data: {
				glassVal: glassVal,
				urineColor: urineColor,
				configPos: configPos
			},
			success: function(data){
				console.log(data);
				$('#water-minus').attr("disabled", false);

				if (data["water_amount"] > 0) {
					$("#waterVal").text(data["water_amount"]);
					$("#glassVal").val(data["gained_water"]);
				}else{
					$("#waterVal").text("0.00");
					$('#water-add').attr("disabled", true);
					$("#glassVal").val(data["gained_water"]);
				}

				urineCondition(data["urine"]);

			}
		});
	});

	$('#water-minus').click(function(){
		var glassVal = $("#glassVal").val();
		var urineColor = $("input[name=urine_color]:checked").val();
		var configPos = "negative";

		$.ajax({
			type:"POST",
			url: "http://localhost/health/main/updatewaterIntake",
			dataType: "json",
			data: {
				glassVal: glassVal,
				urineColor: urineColor,
				configPos: configPos
			},
			success: function(data){
				console.log(data);
				var originalVal = $("#glassVal").val();
				$("#waterVal").text(data["water_amount"]);
				console.log(originalVal);

				$('#water-add').attr("disabled", false);

				if (data["gained_water"] <= originalVal) {
					$('#water-minus').attr("disabled", true);
				}
				
				urineCondition(data["urine"]);

			}
		});
	});
});