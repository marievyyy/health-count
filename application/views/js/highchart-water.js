$(document).ready(function() {

    var valuesWater = [0,0,0,0,0,0,0];

    $.ajax({
        url: 'http://localhost/health/main/homeWaterGraph',
        type: 'GET',
        dataType: 'json',
        async: false,
        success: function(data){
            console.log(data);
            valuesWater = data;
        }
    });

    Highcharts.chart('container-water', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Weekly Water Intake'
        },
        subtitle: {
            text: 'Water Intake'
        },
        xAxis: {
            categories: ['Sun','Mon', 'Tue', 'Wen', 'Thur', 'Fri', 'Sat']
        },
        yAxis: {
            title: {
                text: 'Water Level (Liters)'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'Water Intake',
            data: valuesWater
        }]
    });
});