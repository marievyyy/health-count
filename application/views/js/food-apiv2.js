$(document).ready(function (){

	var pageintial = 0;
	var checkVal = [];
	var valueBox;

	$.ajax({
		url: 'http://localhost/health/main/firstFood',
		type: 'GET',
		dataType: 'json',
		async: false,
		success: function(data){
			console.log(data);
			valueBox = data;
			$("#fooditem").html("");
			if (data == "no food item" || data == false) {
				$("#fooditem").append("<li><label for='check-1' id='food-"+i+"'>"+data+"</label></li>");
			}else{
				for (var i = 0; i < data.length && i < 5; i++) {
				$("#fooditem").append("<li><input type='checkbox' id='check-1' value='"+data[i].food_name+"'><label for='check-1' id='food-"+i+"'>"+data[i].food_name+"</label></li>");
				}
			}
			inputBox();
			checkValueBox();
		},
		error: function(){
			console.log('failed');
		}
	});

	$.ajax({
		url: 'http://localhost/health/main/tallyFood',
		type: 'GET',
		dataType: 'json',
		async: false,
		success: function(data){
			console.log(data);
			pageintial = data;
			$('#pageNum').html("");
			if (data > 1 && data <= 5) {
				for (var i = 1; i <= 5 && i <= data; i++) {
					$("#pageNum").append('<input type="button" name="pagenum" class="pagenum" id="page-'+i+'" value="'+i+'">');
				}
			}
			else if (data > 5) {
				for (var i = 1; i <= 5 && i <= data; i++) {
					$("#pageNum").append('<input type="button" name="pagenum" class="pagenum" id="page-'+i+'" value="'+i+'">');
				}
				$("#pageNum").prepend('<input type="button" class="next" id="prev-btn" value="< Previous">');
				$("#pageNum").append('........');
				$("#pageNum").append('<input type="button" name="pagenum" class="pagenum" id="page-'+data+'" value="'+data+'">');
				$("#pageNum").append('<input type="button" class="next" id="next-btn" value="Next >">');
				$("#prev-btn").attr('disabled', true);
				nextButton();
				prevButton();
				pageNumList();
				checkValueBox();
			}
			else{
				console.log('less than 5 rows');
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

	function pageNumList(){
		$("input.pagenum").click(function() {
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
					valueBox = data;
					$("#fooditem").html("");
					if (data == "no food item" || data == false) {
						$("#fooditem").append("<label for='check-1' id='food-"+i+"'>"+data+"</label>");
					}else{
						for (var i = 0; i < data.length && i < 5; i++) {
						$("#fooditem").append("<li><input type='checkbox' id='check-1' value='"+data[i].food_name+"'><label for='check-1' id='food-"+i+"'>"+data[i].food_name+"</label></li>");
						}
					}
					inputBox();
					checkValueBox();
				},
				error: function(){
					console.log('failed');
				}
			});
		});
	}

	function nextButton(){
		$("#next-btn").click(function() {
			$("#prev-btn").attr('disabled', false);
			var pageadd = 1;
			var a = 0;

			$.ajax({
				url: 'http://localhost/health/main/pageValNumAdd',
				type: 'POST',
				dataType: 'json',
				data:{
					pageadd: pageadd
				},
				success:function(data){
					console.log(data);

					$('#pageNum').html("");
					$("#pageNum").prepend('<input type="button" class="next" id="prev-btn" value="< Previous">');
					
					if (parseInt(data) >= pageintial - 5) {
						var lastpage = 5 - (parseInt(data) - pageintial);
						for (var i = 0; i < 6; i++) {
							a = i + parseInt(data);
							$("#pageNum").append('<input type="button" name="pagenum" class="pagenum" id="page-'+a+'" value="'+a+'">');
						}
						$("#pageNum").append('<input type="button" class="next" id="next-btn" value="Next >">');
						$("#next-btn").attr('disabled', true);
					}
					else{
						for (var i = 0; i < 5; i++) {
							a = i + parseInt(data);
							$("#pageNum").append('<input type="button" name="pagenum" class="pagenum" id="page-'+a+'" value="'+a+'">');
						}
						$("#pageNum").append('........');
						$("#pageNum").append('<input type="button" name="pagenum" class="pagenum" id="page-'+pageintial+'" value="'+pageintial+'">');
						$("#pageNum").append('<input type="button" class="next" id="next-btn" value="Next >">');
						$("#next-btn").attr('disabled', false);
					}
					nextButton();
					prevButton();
					pageNumList();
				},
				error: function(){
					console.log("failed");
				}
			});
		});
	}

	function prevButton(){
		$("#prev-btn").click(function() {
			$("#next-btn").attr('disabled', false);
			var pageadd = 1;
			var a = 0;

			$.ajax({
				url: 'http://localhost/health/main/pageValNumMinus',
				type: 'POST',
				dataType: 'json',
				data:{
					pageadd: pageadd
				},
				success:function(data){
					console.log(data);
					console.log(pageintial);
					$('#pageNum').html("");
					
					y = parseInt(data) - 1;
					if (data <= 1) {
						for (var x = 5; x > 0; x--) {
							a = x + y;
							$("#pageNum").prepend('<input type="button" name="pagenum" class="pagenum" id="page-'+a+'" value="'+a+'">');
						}
					$("#pageNum").append('........');
					$("#pageNum").append('<input type="button" name="pagenum" class="pagenum" id="page-'+pageintial+'" value="'+pageintial+'">');
					$("#pageNum").append('<input type="button" class="next" id="next-btn" value="Next >">');
					$("#pageNum").prepend('<input type="button" class="next" id="prev-btn" value="< Previous">');
					$("#prev-btn").attr('disabled', true);
					}
					else{
						for (var x = 5; x > 0; x--) {
							a = x + y;
							$("#pageNum").prepend('<input type="button" name="pagenum" class="pagenum" id="page-'+a+'" value="'+a+'">');
						}
						$("#prev-btn").attr('disabled', false);
						$("#pageNum").append('........');
						$("#pageNum").append('<input type="button" name="pagenum" class="pagenum" id="page-'+pageintial+'" value="'+pageintial+'">');
						$("#pageNum").append('<input type="button" class="next" id="next-btn" value="Next >">');
						$("#pageNum").prepend('<input type="button" class="next" id="prev-btn" value="< Previous">');	
					}
					prevButton();
					nextButton();
					pageNumList();
				},
				error: function(){
					console.log("failed");
				}
			});
		});
	}

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
				$("#fooditem").html('<div class="spinner"><span class="ball-1"></span><span class="ball-2"></span><span class="ball-3"></span><span class="ball-4"></span><span class="ball-5"></span><span class="ball-6"></span><span class="ball-7"></span><span class="ball-8"></span></div>');
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
				$("#fooditem").html('<div class="spinner"><center><span class="ball-1"></span><span class="ball-2"></span><span class="ball-3"></span><span class="ball-4"></span><span class="ball-5"></span><span class="ball-6"></span><span class="ball-7"></span><span class="ball-8"></span></center></div>');
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
				pageintial = data;
				console.log(data);
				$('#pageNum').html("");
				if (data > 1 && data <= 5) {
					for (var i = 1; i <= 5 && i <= data; i++) {
						$("#pageNum").append('<input type="button" name="pagenum" class="pagenum" id="page-'+i+'" value="'+i+'">');
					}
					$("#pageNum").prepend('<input type="button" class="next" id="prev-btn" value="< Previous">');
					$("#pageNum").append('<input type="button" class="next" id="next-btn" value="Next >">');
					$("#prev-btn").attr('disabled', true);
					$("#next-btn").attr('disabled', true);
				}
				else if (data > 5) {
					for (var i = 1; i <= 5 && i <= data; i++) {
						$("#pageNum").append('<input type="button" name="pagenum" class="pagenum" id="page-'+i+'" value="'+i+'">');
					}
					$("#pageNum").prepend('<input type="button" class="next" id="prev-btn" value="< Previous">');
					$("#pageNum").append('........');
					$("#pageNum").append('<input type="button" name="pagenum" class="pagenum" id="page-'+data+'" value="'+data+'">');
					$("#pageNum").append('<input type="button" class="next" id="next-btn" value="Next >">');
					$("#prev-btn").attr('disabled', true);
				}
				else{
					console.log('less than 5 rows');
				}
				nextButton();
				prevButton();
				pageNumList();
			},
			error: function(){
				console.log('failed');
			}
		});
		valueBox = data;
		$("#fooditem").html("");
		if (data == "no food item" || data == false) {
			$("#fooditem").append("<label for='check-1' id='food-"+i+"'>"+data+"</label>");
		}else{
			for (var i = 0; i < data.length && i < 5; i++) {
			$("#fooditem").append("<li><input type='checkbox' id='check-1' value='"+data[i].food_name+"'><label for='check-1' id='food-"+i+"'>"+data[i].food_name+"</label></li>");
			}
		}
		inputBox();
		checkValueBox();
	}

	function inputBox(){
		$("input:checkbox").change(function (){
			console.log($(this).val());
			if($(this).is(":checked")) {
	         	checkVal.push($(this).val());
	         	console.log(checkVal);
	        }
	        else{
	        	console.log('no value ' + $(this).val());
	        	var a = checkVal.indexOf($(this).val());
	        	checkVal[a] = "";
	        }
		});
	}

	function checkValueBox(){
		if (checkVal.length != 0) {
	    	for (var x = 0; x < valueBox.length; x++) {
	        	for (var y = 0; y < checkVal.length; y++) {
	        		if (checkVal[y] == valueBox[x].food_name) {
	        			$("input[value='"+valueBox[x].food_name+"']").prop('checked', true);
	        		}	
	        	}
	        }
	    }
	}

	$("#formfood").submit(function(e) {
		e.preventDefault();
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