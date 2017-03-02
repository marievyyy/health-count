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
				$("#output").html("").text("Done");
	}
});