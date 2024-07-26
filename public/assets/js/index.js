$(function() {
    "use strict";

    // chart 1
    $('#chart1').sparkline([5, 8, 7, 10, 9, 10, 8, 6, 4, 6, 8, 7, 6, 8], {
        type: 'bar',
        height: '35',
        barWidth: '3',
        resize: true,
        barSpacing: '3',
        barColor: '#fff'
    });


    // chart 2
    $("#chart2").sparkline([0, 5, 3, 7, 5, 10, 3, 6, 5, 10], {
        type: 'line',
        width: '80',
        height: '40',
        lineWidth: '2',
        lineColor: '#fff',
        fillColor: 'transparent',
        spotColor: '#fff',
    })


    // chart 3
    $("#chart3").sparkline([2, 3, 4, 5, 4, 3, 2, 3, 4, 5, 6, 5, 4, 3, 4, 5], {
        type: 'discrete',
        width: '75',
        height: '40',
        lineColor: '#fff',
        lineHeight: 22

    });


    // chart 4
    $("#chart4").sparkline([5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7], {
        type: 'line',
        width: '100',
        height: '25',
        lineWidth: '2',
        lineColor: '#ffffff',
        fillColor: 'transparent'

    });

});
