$(document).ready(function() {

    var values;
    $.ajax({
        url: 'http://localhost/health/main/dailyCalorieGain',
        type: 'GET',
        dataType: 'json',
        success: function(data){
            console.log(data);
        }
    });


    
	Highcharts.chart('container-calories', {
        title: {
            text: 'Total Gained/Loss Calories'
        },
        xAxis: {
            categories: ['Sun','Mon', 'Tue', 'Wens', 'Thurs', 'Fri', 'Sat']
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
            data: [60,81,82,100,45,60,70],
            color: 'green'  // gained color
        }, {
            type: 'column',
            name: 'loss',
            data: [52,43,65,35,56,60,51],
            color: 'black'  // loss color
        }, {
            type: 'pie',
            name: 'Total consumption',
            data: [{
                name: 'gained',
                y: 13,
                color: 'green' // gained color
            }, {
                name: 'loss',
                y: 19,
                color: 'black' // loss color
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