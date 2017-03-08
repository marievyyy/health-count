$(document).ready(function() {
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
            categories: ['Mon', 'Tue', 'Wen', 'Thur', 'Fri', 'Sat', 'Sun']
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
            data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.26]
        }]
    });
});