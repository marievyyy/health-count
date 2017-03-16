$(document).ready(function() {

    $.ajax({
        url: 'http://localhost/health/main/homeCoffeeAPI',
        type: 'GET',
        dataType: 'json',
        async: false,
        success: function(data){
            console.log(data);
            if (data == "no caffeine record") {
                $("#caffeineStatus").text('Unknown');
                $("#caffeineTotal").text('0.0');
            }else{
                $("#caffeineStatus").text(data.status);
                $("#caffeineTotal").text(data.total_gained);
            }
        }
    });
 });    