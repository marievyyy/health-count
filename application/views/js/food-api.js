$(document).ready(function (){
	
	$.ajax({
			url: 'http://localhost/health/main/tallyFood',
			type: 'GET',
			dataType: 'json',
			async: false,
			success: function(data){
				console.log(data);
				$('#pageNum').html("");

				if (data > 1) {
					$("#pageNum").prepend('<input type="button" class="next" value="< Previous">');
					for (var i = 1; i <= data; i++) {
						$("#pageNum").append('<input type="button" name="pagenum" class="pagenum" id="page-'+i+'" value="'+i+'">');
					}
					$("#pageNum").append('<input type="button" class="next" value="Next >">');
				}else{
					console.log('less than 5 rows');
				}
			},
			error: function(){
				console.log('failed');
			}
		});

	$.ajax({
			url: 'http://localhost/health/main/firstFood',
			type: 'GET',
			dataType: 'json',
			async: false,
			success: function(data){
				console.log(data);
				$("#fooditem").html("");
				for (var i = 0; i < data.length && i < 5; i++) {
					$("#fooditem").append("<li><input type='checkbox' id='check-1'><label for='check-1' id='food-"+i+"'>"+data[i].food_name+"</label></li>");
				}
			},
			error: function(){
				console.log('failed');
			}
		});

	$("input:button").click(function() {
		var pageVal = $(this).val();
		console.log(pageVal);
		$.ajax({
			url: 'http://localhost/health/main/paginateFood',
			type: 'POST',
			dataType: 'json',
			async: false,
			data: {pageVal: pageVal},
			success: function(data){
				console.log(data);
				$("#fooditem").html("");
				for (var i = 0; i < data.length; i++) {
					$("#fooditem").append("<li><input type='checkbox' id='check-1'><label for='check-1' id='food-"+i+"'>"+data[i].food_name+"</label></li>");
				}
			},
			error: function(){
				console.log('failed');
			}
		});

	});

	$("#foodlist").keyup(function(e) {
		e.preventDefault();
		var fkeyword = $("input[name=foodlist]").val();
		var fcat = $("input[name=foodcat]:checked").val();

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
				$("#fooditem").html("").text("Pls wait");
			},
			success: function(data){
				setTimeout(function() {
		          delaySuccess(data);
		        }, 1000);
				
			}
		});
	});

	
	$("input[name=foodcat]").change(function(e) {
		e.preventDefault();
		var fkeyword = $("input[name=foodlist]").val();
		var fcat = $("input[name=foodcat]:checked").val();

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
				$("#fooditem").html("").text("Pls wait");
			},
			success: function(data){
				setTimeout(function() {
		          delaySuccess(data);
		        }, 1000);
				
			}
		});

	});
	
	function delaySuccess(data) {
		var fkeyword = $("input[name=foodlist]").val();
		var fcat = $("input[name=foodcat]:checked").val();

		$.ajax({
			url: 'http://localhost/health/main/foodListPage',
			type: 'POST',
			dataType: 'json',
			async: false,
			data:{
				fkeyword:fkeyword,
				fcat:fcat
			},
			success: function(data){
				console.log(data);
				$('#pageNum').html("");

				if (data > 1) {
					$("#pageNum").prepend('<input type="button" class="next" value="< Previous">');
					for (var i = 1; i <= data; i++) {
						$("#pageNum").append('<input type="button" name="pagenum" class="pagenum" id="page-'+i+'" value="'+i+'">');
					}
					$("#pageNum").append('<input type="button" class="next" value="Next >">');
				}else{
					console.log('less than 5 rows');
				}
			},
			error: function(){
				console.log('failed');
			}
		});

		$("#fooditem").html("");
		for (var i = 0; i < data.length && i < 5; i++) {
			$("#fooditem").append("<li><input type='checkbox' id='check-1'><label for='check-1' id='food-"+i+"'>"+data[i].food_name+"</label></li>");
		}
	}


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