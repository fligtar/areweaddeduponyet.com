function selectQuarter(a) {
    $(a).closest('.initiatives').attr('class', 'initiatives selected-' + $(a).attr('class'));
    return false;
}
function selectView(a) {
    $(a).closest('section').attr('class', 'selected-' + $(a).attr('class'));
    return false;
}

$(document).ready(function() {
    $('.chart').each(function(i, div) {
        new Highcharts.Chart({
            chart: {
                renderTo: $(div).attr('id'),
                defaultSeriesType: 'spline',
                height: 200,
                width: 450,
                backgroundColor: 'transparent'
            },
            title: { text: '' },
            tooltip: {
                formatter: function() {
                    var s = '<b>' + this.x + '</b><br/>';
                    $.each(this.points, function(i, point) {
                        s += '<span style="color: ' + point.series.color + ';">' + point.series.name + ':</span> ' + Highcharts.numberFormat(point.y, 0) +' extensions<br/>';
                    });
                    return s;
                },
                shared: true,
                crosshairs: [ { width: 3 }]
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: { text: '' },
                min: 0
            },
            credits: {
                enabled: false
            },
            series: eval($(div).attr('data-series'))
        });
    });
});