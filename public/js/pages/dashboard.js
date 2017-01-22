/* ------------------------------------------------------------------------------
 *
 *  # Dashboard configuration
 *
 *  Demo dashboard configuration. Contains charts and plugin inits
 *
 *  Version: 1.0
 *  Latest update: Aug 1, 2015
 *
 * ---------------------------------------------------------------------------- */

$(function() {    


    // Switchery toggles
    // ------------------------------

    var switches = Array.prototype.slice.call(document.querySelectorAll('.switch'));
    switches.forEach(function(html) {
        var switchery = new Switchery(html, {color: '#4CAF50'});
    });




    // Daterange picker
    // ------------------------------

    $('.daterange-ranges').daterangepicker(
        {
            startDate: moment().subtract('days', 29),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2016',
            dateLimit: { days: 60 },
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                'Last 7 Days': [moment().subtract('days', 6), moment()],
                'Last 30 Days': [moment().subtract('days', 29), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
            },
            opens: 'left',
            applyClass: 'btn-small bg-slate-600 btn-block',
            cancelClass: 'btn-small btn-default btn-block',
            format: 'MM/DD/YYYY'
        },
        function(start, end) {
            $('.daterange-ranges span').html(start.format('MMMM D') + ' - ' + end.format('MMMM D'));
        }
    );

    $('.daterange-ranges span').html(moment().subtract('days', 29).format('MMMM D') + ' - ' + moment().format('MMMM D'));




    // Traffic sources stream chart
    // ------------------------------

    trafficSources('#traffic-sources', 330); // initialize chart

    // Chart setup
    function trafficSources(element, height) {
    }




    // App sales lines chart
    // ------------------------------

    appSalesLines('#app_sales', 255); // initialize chart

    // Chart setup
    function appSalesLines(element, height) {}




    // App sales heatmap chart
    // ------------------------------

    salesHeatmap(); // initialize chart

    // Chart setup
    function salesHeatmap() {}




    // Monthly app sales area chart
    // ------------------------------

    monthlySalesArea("#monthly-sales-stats", 100, '#4DB6AC'); // initialize chart

    // Chart setup
    function monthlySalesArea(element, height, color) {}




    // Messages area chart
    // ------------------------------

    messagesArea("#messages-stats", 40, '#5C6BC0'); // initialize chart

    // Chart setup
    function messagesArea(element, height, color) {}




    // Sparklines
    // ------------------------------

    // Initialize chart
    sparkline("#new-visitors", "line", 30, 35, "basis", 750, 2000, "#26A69A");
    sparkline("#new-sessions", "line", 30, 35, "basis", 750, 2000, "#FF7043");
    sparkline("#total-online", "line", 30, 35, "basis", 750, 2000, "#5C6BC0");
    sparkline("#server-load", "area", 30, 50, "basis", 750, 2000, "rgba(255,255,255,0.5)");

    // Chart setup
    function sparkline(element, chartType, qty, height, interpolation, duration, interval, color) {}




    // Daily revenue line chart
    // ------------------------------

    dailyRevenue('#today-revenue', 50); // initialize chart

    // Chart setup
    function dailyRevenue(element, height) {}




    // Marketing campaigns progress pie chart
    // ------------------------------

    // Initialize chart
    progressMeter("#today-progress", 20, 20, '#7986CB');
    progressMeter("#yesterday-progress", 20, 20, '#7986CB');

    // Chart setup
    function progressMeter(element, width, height, color) {}




    // Marketing campaigns donut chart
    // ------------------------------

    // Initialize chart
    campaignDonut("#campaigns-donut", 42);

    // Chart setup
    function campaignDonut(element, size) {}



    // Campaign status donut chart
    // ------------------------------

    // Initialize chart
    campaignStatusPie("#campaign-status-pie", 42);

    // Chart setup
    function campaignStatusPie(element, size){}



    // Tickets status donut chart
    // ------------------------------

    // Initialize chart
    ticketStatusDonut("#tickets-status", 42);

    // Chart setup
    function ticketStatusDonut(element, size) {}



    // Bar charts with random data
    // ------------------------------

    // Initialize charts
    generateBarChart("#hours-available-bars", 24, 40, true, "elastic", 1200, 50, "#EC407A", "hours");
    generateBarChart("#goal-bars", 24, 40, true, "elastic", 1200, 50, "#5C6BC0", "goal");
    generateBarChart("#members-online", 24, 50, true, "elastic", 1200, 50, "rgba(255,255,255,0.5)", "members");

    // Chart setup
    function generateBarChart(element, barQty, height, animate, easing, duration, delay, color, tooltip) {}




    // Animated progress chart
    // ------------------------------

    // Initialize charts
    progressCounter('#hours-available-progress', 38, 2, "#F06292", 0.68, "icon-watch text-pink-400", 'Hours available', '64% average')
    progressCounter('#goal-progress', 38, 2, "#5C6BC0", 0.82, "icon-trophy3 text-indigo-400", 'Productivity goal', '87% average')

    // Chart setup
    function progressCounter(element, radius, border, color, end, iconClass, textTitle, textAverage) {}




    // Bullet charts
    // ------------------------------

    // Initialize chart
    bulletChart("#bullets", 80);

    // Chart setup
    function bulletChart(element, height) {}




    // Other codes
    // ------------------------------

    // Grab first letter and insert to the icon
    $(".table tr").each(function (i) {});

});
