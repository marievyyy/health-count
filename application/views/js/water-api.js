$(document).ready(function(){
	//aba504a93d3df9db83a0753ce06b31c9
	
	$('#water-add').click(function(){
		var glassVal = $("#glassVal").val();
		var urineColor = $("input[name=urine_color]").val();
		console.log(glassVal);
		console.log(urineColor);
		
		$.ajax({
			type:"GET",
			url: "http://localhost/health/main/waterAPI",
			dataType: "json",
			success: function(data){
				console.log(data);
			}
		});
	});

	$('#water-minus').click(function(){
		var glassVal = $("#glassVal").val();
		console.log(glassVal);
	});
});