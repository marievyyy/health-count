$(document).ready(function() {
       
    var activityPop = [];
   $.ajax({
        url: 'http://localhost/health/main/activityPopular',
        type: 'GET',
        dataType: 'json',
        async: false,
        success: function(data){
            console.log(data);
            activityPop = data;
        }
    });

    Highcharts.getOptions().plotOptions.pie.colors = (function () {
        var colors = [],
            base = Highcharts.getOptions().colors[0],
            i;

        for (i = 0; i < 10; i += 1) {
            // Start out with a darkened base color (negative brighten), and end
            // up with a much brighter color
            colors.push(Highcharts.Color(base).brighten((i - 6) / 7).get());
        }
        return colors;
    }());

    // Build the chart
    Highcharts.chart('container-activity', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'This Week Activity Ratio'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Brands',
            data: [
                { name: 'Cycling', y: activityPop["cycling"] },
                { name: 'Run', y: activityPop["run"] },
                { name: 'Jog', y: activityPop["jog"] },
                { name: 'Walk', y: activityPop["walk"] },
                { name: 'Excercise', y: activityPop["excercise"] }
            ]
        }]
    }); 
});