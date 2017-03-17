$(document).ready(function() {
    var valuesSleep = [0,0,0,0,0,0,0];

    $.ajax({
        url: 'http://localhost/health/main/homeSleepGraph',
        type: 'GET',
        dataType: 'json',
        async: false,
        success: function(data){
            console.log(data);
            valuesSleep = data;
        }
    });

    Highcharts.chart('container-sleep', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Weekly Sleep Condition'
        },
        subtitle: {
            text: 'Sleep Condition'
        },
        xAxis: {
            categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat']
        },
        yAxis: {
            title: {
                text: 'Time Duration (Hours)'
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
            name: 'Hours of Sleep',
            data: valuesSleep
        }]
    });
});