$(document).ready(function() {

    $.ajax({
        url: 'http://localhost/health/main/homeWaterAPI',
        type: 'GET',
        dataType: 'json',
        async: false,
        success: function(data){
            console.log(data);
            if (data == "no water record") {
                $("#dehydrate").text('Unknown');
                $("#liters").text('0.0');
            }else{
                if(data.urine == "urine-one"){
                    $('.newColor').removeClass("normal medium low").addClass("high");
                    $('#dehydrate').text('Too Much Water!!!');
                }
                else if(data.urine == "urine-two"){
                    $('.newColor').removeClass("normal medium low").addClass("high");
                    $("#dehydrate").text("Lower A Bit Your Intake!");
                }
                else if(data.urine == "urine-three" || data.urine == "urine-four"){
                    $('.newColor').removeClass("low medium high").addClass("normal");
                    $("#dehydrate").text("Normal Dehydration");
                }
                else if(data.urine == "urine-five"){
                    $('.newColor').removeClass("high normal low").addClass("medium");
                    $("#dehydrate").text("Slightly Dehydrated");
                }else if (data.urine == "urine-six" || data.urine == "urine-seven"){
                    $('.newColor').removeClass("normal medium low").addClass("high");
                    $("#dehydrate").text("Highly Dehydrated!");
                }else{
                    $('.newColor').removeClass("normal medium low high");
                    $("#dehydrate").text("Dehydration Not Set");
                }
                $("#liters").text(data.water_amount);
            }
        }
    });
 });    