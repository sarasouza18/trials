

'use strict';
/* global document */
// Load the fonts
Highcharts.createElement('link', {
    href: 'https://fonts.googleapis.com/css?family=Signika:400,700',
    rel: 'stylesheet',
    type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);

// Add the background image to the container
Highcharts.wrap(Highcharts.Chart.prototype, 'getContainer', function (proceed) {
    proceed.call(this);
    this.container.style.background =
        'url(http://www.highcharts.com/samples/graphics/sand.png)';
});


Highcharts.theme = {
    colors: ['#FF69B4', '#1E90FF'],


};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);

var categories = [
    'até 20', '21-25', '26-30', '31-35',
    '36-40', '41-45', '46-50', '51-55',
    '56-60', '61-65', '66-70', 'Acima de 70'
];

Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Pirâmide Etária Servidores'
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        }
    }, { // mirror axis on right side
        opposite: true,
        reversed: false,
        categories: categories,
        linkedTo: 0,
        labels: {
            step: 1
        }
    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value) + '%';
            }
        }
    },

       plotOptions: {
        series: {
            stacking: 'normal'

        }
    },


    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + ', idade ' + this.point.category + '</b><br/>' +
                'Servidores: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
        }
    },

    series: [{
        name: 'Mulheres',
        data: [ -4.4, -4.4, -3.6, -3.1, -2.4,
            -2.5, -2.3, -1.2, -0.6, -0.2, -0.0, -0.0],

    }, {
        name: 'Homens',
        data: [ 4.1, 4.3, 3.6, 3.4, 2.6, 2.9, 2.9,
            1.8, 1.2, 0.6, 0.1, 0.0],

    }]
});
