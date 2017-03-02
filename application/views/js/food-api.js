$(document).ready(function (){
	
	$.ajax({
			url: 'http://localhost/health/main/getPopularfood',
			type: 'GET',
			dataType: 'json',
			beforeSend : function(){
				console.log("Pls wait...");
				$("#fooditem").html("").text("Loading...");
			},
			success: function(data){
				setTimeout(function() {
		          delayPopularFood(data);
		        }, 1000);
			},
			error: function(){
				console.log('failed');
			}
		});
	
	function delayPopularFood(data){
		$('#fooditem').html("");
		var numPages = Math.ceil(data.length / 5);
		var i = 0;
		var j = 0;
		var k = 0;
		var y = 0;

		if (numPages <= 1) {
			for (i = 0; i < data.length; i++) {
				console.log(data[i].food_name);
				$('#fooditem').append("<li><input type='checkbox' id='check-1'><label for='check-1' id='food-"+i+"'></label></li>");
				$('#food-'+i+'').text(data[i].food_name);
			}
		}else{
			for (i = 0; i < 5; i++) {
				console.log(data[i].food_name);
				$('#fooditem').append("<li><input type='checkbox' id='check-1'><label for='check-1' id='food-"+i+"' ></label></li>");
				$('#food-'+i+'').text(data[i].food_name);
			}
			$('#pages').prepend('<a class="prev" id="page-prev" href="#">< Previous</a>');
			for (j = 1; j <= numPages; j++) {
				$('#pages').append('<a class="" id="page-'+j+'" href="#">'+j+'</a>');
				$('#page-'+j+'').click(function() {
					$('#fooditem').html('');

					for (k = y-5; k < y; k++) {

						console.log(data[k].food_name);
						$('#fooditem').append("<li><input type='checkbox' id='check-1'><label for='check-1' id='food-"+k+"' ></label></li>");
						$('#food-'+k+'').text(data[k].food_name);
					}
				});
				y = y+5;
			}
			$('#pages').append('<a class="next" id="page-next" href="#">Next ></a>');
			$('#page-1').addClass('active').attr("disabled",true);
		}
	}

	$("#foodlist").keyup(function(e) {
		e.preventDefault();
		var fkeyword = $("input[name=foodlist]").val();
		var fcat = $("input[type=foodcat]:checked").val();

		$.ajax({
			url: 'http://localhost/health/main/getFoodList',
			type: 'POST',
			dataType: 'json',
			data: {fkeyword: fkeyword},
			beforeSend : function(){
				console.log("Pls wait...");
				$("#output").html("").text("Pls wait");
			},
			success: function(data){
				setTimeout(function() {
		          delaySuccess(data);
		        }, 1000);
				
			}
		});
	});

	function delaySuccess(data) {
		console.log(data);
				$("#output").html("").text("Done");
	}

	$("input[name=foodcat]").change(function(e) {
		e.preventDefault();
		var fkeyword = $("input[name=foodlist]").val();
		var fcat = $("input[type=foodcat]:checked").val();

		$.ajax({
			url: 'http://localhost/health/main/getFoodList',
			type: 'POST',
			dataType: 'json',
			data: {
				fkeyword: fkeyword,
				fcat: fcat
			},
			beforeSend : function(){
				console.log("Pls wait...");
				$("#output").html("").text("Pls wait");
			},
			success: function(data){
				setTimeout(function() {
		          delaySuccess(data);
		        }, 1000);
				
			}
		});

	});
	
	$("#formfood").submit(function(e) {
		e.preventDefault();
		$.ajax({
			url: 'http://localhost/health/main/sleepAPI',
			type: 'POST',
			dataType: 'json',
			data: $(this).serialize(),
			success:function(data){
				console.log(data);
			}
		});
		
	});
});