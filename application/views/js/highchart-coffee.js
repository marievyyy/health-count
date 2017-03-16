$(document).ready(function() {
	   
    var coffeeServs = [];
   $.ajax({
        url: 'http://localhost/health/main/homeCoffeePieAPI',
        type: 'GET',
        dataType: 'json',
        async: false,
        success: function(data){
            console.log(data);
            coffeeServs = data;
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
    Highcharts.chart('container-coffee', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'This Week Favorite Coffee'
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
                { name: 'Espresso', y: coffeeServs["espresso"] },
                { name: 'Cappuccino', y: coffeeServs["cappuccino"] },
                { name: 'Americano', y: coffeeServs["americano"] },
                { name: 'Caffe Latte', y: coffeeServs["cafelatte"] },
                { name: 'Mocha Cappuccino', y: coffeeServs["mocha"] },
                { name: 'Caramel Macchiato', y: coffeeServs["caramel"] },
                { name: 'Frappe', y: coffeeServs["frappe"] },
                { name: 'Instant Coffee', y: coffeeServs["instantcoffee"] }
            ]
        }]
    });	
});