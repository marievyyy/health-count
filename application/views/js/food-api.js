$(document).ready(function (){
	
	var checkVal = [];

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
				if (data == "no food item" || data == false) {
					$("#fooditem").append("<li><label for='check-1' id='food-"+i+"'>"+data+"</label></li>");
				}else{
					for (var i = 0; i < data.length && i < 5; i++) {
					$("#fooditem").append("<li><input type='checkbox' id='check-1' value='"+data[i].food_name+"'><label for='check-1' id='food-"+i+"'>"+data[i].food_name+"</label></li>");
					}
					disableInput();
				}
			},
			error: function(){
				console.log('failed');
			}
		});

	$.ajax({
		url: 'http://localhost/health/main/getTotalCal',
		type: 'GET',
		dataType: 'json',
		async: false,
		success:function(data){
			console.log(data);
			$("#totalcal").text(data);
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
					if (data == "no food item" || data == false) {
						$("#fooditem").append("<label for='check-1' id='food-"+i+"'>"+data+"</label>");
					}else{
						for (var i = 0; i < data.length && i < 5; i++) {
						$("#fooditem").append("<li><input type='checkbox' id='check-1' value='"+data[i].food_name+"'><label for='check-1' id='food-"+i+"'>"+data[i].food_name+"</label></li>");
						}
						disableInput();
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
				$('#pageNum').html("");
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
				$('#pageNum').html("");
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
		if (data == "no food item" || data == false) {
			$("#fooditem").append("<label for='check-1' id='food-"+i+"'>"+data+"</label>");
		}else{
			for (var i = 0; i < data.length && i < 5; i++) {
			$("#fooditem").append("<li><input type='checkbox' id='check-1' value='"+data[i].food_name+"'><label for='check-1' id='food-"+i+"'>"+data[i].food_name+"</label></li>");
			}
			disableInput();
		}
	}

	function disableInput(){
		 $("input:checkbox").change(function() {
		 	 console.log("value");
	         if($(this).is(":checked")) {
	         	console.log(checkVal);
	        	$("input:button").attr('disabled', true);
	        	$("#foodlist").attr('disabled', true);
	        	$("input:radio").attr('disabled', true);  
	        }
	        else{
	        	console.log('no value');
	        	$("input:button").attr('disabled', false);
	        	$("#foodlist").attr('disabled', false);
	        	$("input:radio").attr('disabled', false);
	        }
		 });
	}

	$("input[type=checkbox]").change(function() {
		
	});

	$("#formfood").submit(function(e) {
		e.preventDefault();
        $('input:checkbox:checked').each(function(i){
          checkVal[i] = $(this).val();
        });
        $('input:button').attr('disabled', false);
        $("#foodlist").attr('disabled', false);
        $("input:radio").attr('disabled', false);
        console.log(checkVal);     
				$.ajax({
					url: 'http://localhost/health/main/getFoodCal',
					type: 'POST',
					dataType: 'json',
					data: {checkVal: checkVal},
					success:function(data){
						console.log(data);
						$.ajax({
							url: 'http://localhost/health/main/getTotalCal',
							type: 'GET',
							dataType: 'json',
							async: false,
							success:function(data){
								console.log(data);
								$("#totalcal").text(data);
							}
						});
			}
		});
		
	});
});