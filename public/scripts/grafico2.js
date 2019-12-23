// Create the chart
Highcharts.theme1 = {
    colors: ['#8B8989'],


};

// Apply the theme
Highcharts.setOptions(Highcharts.theme1);

Highcharts.chart('container2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Distribuição por faixa etária'
    },

    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Servidores'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'servidores: <b>{point.y:.1f} mil</b>'
    },
    series: [{
        name: 'Population',
        data: [
            ['até 20', 23.7],
            ['21-25', 16.1],
            ['26-30', 14.2],
            ['31-35', 14.0],
            ['36-40', 12.5],
            ['41-45', 12.1],
            ['46-50', 11.8],
            ['51-55', 11.7],
            ['56-60', 11.1],
            [ '61-65', 11.1],
            ['66-70', 10.5],
            ['Acima de 70', 10.4],

        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});