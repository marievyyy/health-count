$(document).ready(function(){
	
	$('#next1').hover(function(){
		var coffeeType = $("input[name=coffee_cup]:checked").val();
		
		if(coffeeType == "" || coffeeType == null){
			$('#next1').attr("disabled",true);
		}
	});

	$('#next1').keypress(function(){
		var coffeeType = $("input[name=coffee_cup]:checked").val();
		
		if(coffeeType == "" || coffeeType == null){
			$('#next1').attr("disabled",true);
		}
	});

	$('input[name=coffee_cup]').change(function(){
		var coffeeType = $("input[name=coffee_cup]:checked").val();

		$('#next1').attr("disabled",false);
		console.log(coffeeType);
	});

	$('#msform').submit(function(e){
		e.preventDefault();

		var coffeeType = $("input[name=coffee_cup]:checked").val();
		var coffeeCupVal = $("#coffeeCupVal").val();

		$.ajax({
			type:"POST",
			url: "http://localhost/health/main/getcoffeeAPI",
			data: {coffeeType: coffeeType, coffeeCupVal: coffeeCupVal},
			dataType: "json",
			success: function(data){
				console.log(data);
				$('#caffeineStatus').text(data["statusCaffeine"]);
				$('#caffeineTotal').text(data["total_gained"]);
				$('#caffeineAdded').text(data["totalcaffeine"]);
			}
		});
		console.log(coffeeType);
		console.log(coffeeCupVal);
	});
});