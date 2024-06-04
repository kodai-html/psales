

var data = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
    series: [
        chartData
    ]
};

var options = {
    seriesBarDistance: 10
};

var responsiveOptions = [
    ['screen and (max-width: 640px)', {
        seriesBarDistance: 5,
        axisX: {
            labelInterpolationFnc: function (value) {
                return value[0];
            }
        }
    }]
];

new Chartist.Bar('#chart', data, options, responsiveOptions);