$(document).ready(function(){
	//aba504a93d3df9db83a0753ce06b31c9
	
	$.ajax({
			type:"GET",
			url: "http://localhost/health/main/waterAPI",
			dataType: "json",
			success: function(data){
				console.log(data);
				$("#waterVal").text(data);
			}
		});


	$('#water-add').click(function(){
		var glassVal = $("#glassVal").val();
		var urineColor = $("input[name=urine_color]").val();
		console.log(glassVal);
		console.log(urineColor);
		
		$.ajax({
			type:"POST",
			url: "http://localhost/health/main/waterAPI",
			dataType: "json",
			data: {
				glassVal: glassVal,
				urineColor: urineColor,
			},
			success: function(data){
				console.log(data);
				$("#waterVal").text(data);
			}
		});
	});

	$('#water-minus').click(function(){
		var glassVal = $("#glassVal").val();
		var urineColor = $("input[name=urine_color]").val();

		$.ajax({
			type:"POST",
			url: "http://localhost/health/main/waterAPI",
			dataType: "json",
			data: {
				glassVal: glassVal,
				urineColor: urineColor,
			},
			success: function(data){
				console.log(data);
				$("#waterVal").text(data);
			}
		});
	});
});