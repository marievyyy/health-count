$(document).ready(function (){

	$("#msform").submit(function(e){
		e.preventDefault();
		var dataform = $(this);
		

		$.ajax({
			url: "http://localhost/health/main/data_register",
			type:"POST",
			data: dataform.serialize(),
			dataType: "json",
			success: function(data){
				alert("success pass");
			}
		});
	});
});