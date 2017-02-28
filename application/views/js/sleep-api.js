$(document).ready(function (){
	
	$("#sleepForm").submit(function(e) {
		e.preventDefault();
		$.ajax({
			url: 'http://localhost/health/main/sleepAPI',
			type: 'POST',
			dataType: 'json',
			data: $(this).serialize(),
			success:function(data){
				console.log(data);

				if (data == "Already Slept") {
					$('#sleepStat').html("").text(data);
					$('#sleepVal').html("").text("");
					$('#calburn').html("").text("");
				}else{
					$('#sleepStat').html("").text(data.sleepDesc);
					$('#sleepVal').html("").text(data.sleepTotal + " hours");
					$('#calburn').html("").text(data.burnCal);
				}
			}
		});
		
	});
});