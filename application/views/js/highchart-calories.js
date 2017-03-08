$(document).ready(function() {
	Highcharts.chart('container-calories', {
        title: {
            text: 'Total Gained/Loss Calories'
        },
        xAxis: {
            categories: ['Mon', 'Tue', 'Wens', 'Thurs', 'Fri', 'Sat', 'Sun']
        },
        labels: {
            items: [{
                html: 'Total Calories consumption',
                style: {
                    left: '50px',
                    top: '18px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },
        series: [{
            type: 'column',
            name: 'gained',
            data: [60,81,82,100,45,60,70]
        }, {
            type: 'column',
            name: 'loss',
            data: [52,43,65,35,56,60,51]
        }, {
            type: 'pie',
            name: 'Total consumption',
            data: [{
                name: 'gained',
                y: 13,
                color: Highcharts.getOptions().colors[0] // Jane's color
            }, {
                name: 'loss',
                y: 19,
                color: Highcharts.getOptions().colors[2] // Joe's color
            }],
            center: [80, 80],
            size: 100,
            showInLegend: false,
            dataLabels: {
                enabled: false
            }
        }]
    });
});