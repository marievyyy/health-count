$(document).ready(function(){

	
	$('input[name=activityrun]').change(function() {
		var activityType = $("input[name=activityrun]:checked").val();
		if (activityType == "jog") {
			$('#distanceTrav').attr("disabled", true);
			$('#distanceTrav').focusout(function() {
				/* Act on the event */
			});
		}
		else{
			$('#distanceTrav').attr("disabled", false);
			$('#distanceTrav').focus(function() {
				/* Act on the event */
			});
		}
	});

	$('input[name=distance]').keyup(function() {

	});

	$('input[name=timedis]').keyup(function() {

	});

	$('#activityRun').submit(function(e){
		e.preventDefault();

		$.ajax({
			url: 'http://localhost/health/main/activitySpeed',
			type: 'POST',
			dataType: 'json',
			data: $(this).serialize(),
			success: function(data){
				console.log(data);
				if (data == "Invalid Speed") {
					$('#output').html("").text("Invalid Speed");
				}
				else if(data == "Invalid Time Duration"){
					$('#output').html("").text("Invalid Time");
				}
				else if(data == "No Activity"){
					$('#output').html("").text("No Activity");
				}
				else{
					$('#output').html("").text(data.toFixed(1));
				}
			}
		});
	});
});