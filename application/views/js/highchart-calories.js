$(document).ready(function() {

    var valuesGained = [0,0,0,0,0,0,0];
    var valuesLoss = [0,0,0,0,0,0,0];
    $.ajax({
        url: 'http://localhost/health/main/dailyCalorieGain',
        type: 'GET',
        dataType: 'json',
        async: false,
        success: function(data){
            console.log(data);
            valuesGained = data;
        }
    });

    $.ajax({
        url: 'http://localhost/health/main/dailyCalorieLoss',
        type: 'GET',
        dataType: 'json',
        async: false,
        success: function(data){
            console.log(data);
            valuesLoss = data;
        }
    });

    console.log(valuesGained);
    console.log(valuesLoss);
	Highcharts.chart('container-calories', {
        title: {
            text: 'Total Gained/Loss Calories'
        },
        xAxis: {
            categories: ['Sun', 'Mon', 'Tues', 'Wens', 'Thurs', 'Fri', 'Sat']
        },
        series: [{
            type: 'column',
            name: 'gained',
            data: valuesGained,
            color: 'green'  // gained color
        }, {
            type: 'column',
            name: 'loss',
            data: valuesLoss,
            color: 'black'  // loss color
        }]
    });
});