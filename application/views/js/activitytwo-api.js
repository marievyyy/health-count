$(document).ready(function (){
	$("#activityExer").submit(function(e) {
		e.preventDefault();

		$.ajax({
			url: 'http://localhost/health/main/activityExcercise',
			type: 'POST',
			dataType: 'json',
			data: $(this).serialize(),
			success: function(data){
				if (data == "Required Activity Type") {
					$("#output").html("").text('Required Activity Type');
				}
				else if(data == "Invalid Duration"){
					$("#output").html("").text('Invalid Duration');
				}
				else if (data == "Invalid Input") {
					$("#output").html("").text('Invalid Input');
				}
				else{
					$("#output").html("").text(data);
				}
			}
		});
		
	});
});