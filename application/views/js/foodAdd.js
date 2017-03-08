$(document).ready(function() {
	
	$("#submitform").submit(function(e) {
		e.preventDefault();

		$.ajax({
			url: 'http://localhost/health/main/foodAdd',
			type: 'POST',
			dataType: 'json',
			data: $(this).serialize(),
			beforeSend : function(){
				console.log("Pls wait...");
				$("#output").html("").text("Pls wait");
			},
			success: function(data){
				setTimeout(function() {
		          delaySuccess(data);
		        }, 1000);
			},
			error: function() {
				setTimeout(function() {
		          delaySuccess("error submit");
		        }, 1000);
			}
		});

	});

	function delaySuccess(data) {
		console.log(data);
				$("#output").html('<p> Food Name: <span>'data.food_name'<span></p><p> Carbs: <span>'data.carbs'<span></p><p> Fats: <span>'data.fats'<span></p><p> Protein: <span>'data.protein'<span></p><p> Calories: <span>'data.calories'<span></p><p> Description: <span>'data.description'<span></p><p> Category Name: <span>'data.category_name'<span></p>');
	}
});