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
					if(data["urine"] == "very high"){
						$('#low').attr("id","very_high");
					}
					else if(data["urine"] == "high"){
						$('#low').attr("id","high");
					}
					else if(data["urine"] == "medium"){
						$('#low').attr("id","medium");
					}
					else if(data["urine"] == "low"){
						$('#low').attr("id","low");
					}
					else if(data["urine"] == "normal"){
						$('#low').attr("id","normal");
					}else{
						$('#low').attr("id","high");
					}
				}else{
					$("#waterVal").text(data);
				}
			}
		});


	$('#water-add').click(function(){
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
				urineColor: urineColor,
			},
			success: function(data){
				console.log(data);
				$("#waterVal").text(data["water_amount"]);

			}
		});
	});

	$('#water-minus').click(function(){
		var glassVal = $("#glassVal").val();
		var urineColor = $("input[name=urine_color]:checked").val();

		$.ajax({
			type:"POST",
			url: "http://localhost/health/main/updatewaterIntake",
			dataType: "json",
			data: {
				glassVal: glassVal,
				urineColor: urineColor,
			},
			success: function(data){
				console.log(data);
				$("#waterVal").text(data["water_amount"]);
			}
		});
	});
});