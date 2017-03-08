$(document).ready(function() {
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
            categories: ['Mon', 'Tue', 'Wen', 'Thur', 'Fri', 'Sat', 'Sun']
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
            data: [7.0, 10.9, 9.5, 4.5, 8.4, 7.5, 11.2]
        }]
    });
});