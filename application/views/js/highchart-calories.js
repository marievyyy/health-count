$(document).ready(function() {

    var valuesGained = [];
    var valuesLoss = [];
    var dateVal = [];
    $.ajax({
        url: 'http://localhost/health/main/dailyCalorieGain',
        type: 'GET',
        dataType: 'json',
        async: false,
        success: function(data){
            console.log(data);
            valuesGained = data[0];
            dateVal = data[1].toString();
        }
    });

    $.ajax({
        url: 'http://localhost/health/main/dailyCalorieLoss',
        type: 'GET',
        dataType: 'json',
        async: false,
        success: function(data){
            console.log(data);
            valuesLoss = data[0];
        }
    });

    console.log(dateVal);
	Highcharts.chart('container-calories', {
        title: {
            text: 'Total Gained/Loss Calories'
        },
        xAxis: {
            type: 'date',
            categories: dateVal
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