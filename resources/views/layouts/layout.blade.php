<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HMI</title>

        <!-- Bootstrap -->
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{ asset("css/custom.min.css") }}" rel="stylesheet">

        <link href="{{ asset("css/style.css") }}" rel="stylesheet">

        @stack('stylesheets')

        <style type="text/css">

            #chartdiv {
              width : 100%;
              height  : 400px;
            }
            
        </style>

    </head>

    <body class="nav-sm">
        <div class="container body">
            <div class="main_container">

                @include('includes/sidebar')

                @include('includes/topbar')

                @yield('main_container')

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Gentelella - Bootstrap Admin Template by <a ="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset("vendors/bootstrap/dist/js/bootstrap.min.js") }}"></script>
  
        <!-- Amcharts -->
        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="https://www.amcharts.com/lib/3/serial.js"></script>
        <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <script src="https://www.amcharts.com/lib/3/themes/none.js"></script>


        <!-- jquery.inputmask -->
        <script src="{{ asset("vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js") }} "></script>


        <!-- Custom Theme Scripts -->
        <script src="{{ asset("js/gentelella.min.js") }}"></script>
        

        <script>
          var hostname = 'http://' + $(location).attr('host');
          function getSelectedValues(select) {
            var foo = []; 
            select.each(function(i, selected){ 
              foo[i] = $(selected).val(); 
            });
            return foo;
          }

          $(document).ready(function() {
            @stack('inline-scripts')
          });

    

          
        </script>

        @stack('scripts')

        <script>
      var chart = AmCharts.makeChart("chartdiv", {
        "type": "serial",
        "theme": "none",
        "dataDateFormat": "YYYY-MM-DD",
        "precision": 0,
        "valueAxes": [{
          "id": "v1",
          "title": "Count",
          "position": "left",
          "autoGridCount": false,
          "labelFunction": function(value) {
            return  Math.round(value);
          }
        }],
        "graphs": [
          {
          "id": "g4",
          "valueAxis": "v1",
          "lineColor": "#e1ede9",
          "fillColors": "#e1ede9",
          "fillAlphas": 1,
          "type": "column",
          "title": "Target Count",
          "valueField": "target",
          "clustered": false,
          "columnWidth": 0.5,
          "legendValueText": "[[value]]",
          "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
        },
        {
          "id": "g3",
          "valueAxis": "v1",
          "lineColor": "#62cf73",
          "fillColors": "#62cf73",

          "fillAlphas": 1,
          "type": "column",
          "title": "Actual Count",
          "valueField": "actual",
          "clustered": false,
          "columnWidth": 0.3,
          "legendValueText": "[[value]]",
          "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
        }],
        "chartScrollbar": {
          "graph": "g1",
          "oppositeAxis": false,
          "offset": 30,
          "scrollbarHeight": 50,
          "backgroundAlpha": 0,
          "selectedBackgroundAlpha": 0.1,
          "selectedBackgroundColor": "#888888",
          "graphFillAlpha": 0,
          "graphLineAlpha": 0.5,
          "selectedGraphFillAlpha": 0,
          "selectedGraphLineAlpha": 1,
          "autoGridCount": true,
          "color": "#AAAAAA"
        },
        "chartCursor": {
          "pan": true,
          "valueLineEnabled": true,
          "valueLineBalloonEnabled": true,
          "cursorAlpha": 0,
          "valueLineAlpha": 0.2
        },
        "categoryField": "date",
        "categoryAxis": {
          "parseDates": true,
          "dashLength": 1,
          "minorGridEnabled": true
        },
        "legend": {
          "useGraphSettings": true,
          "position": "top"
        },
        "balloon": {
          "borderThickness": 1,
          "shadowAlpha": 0
        },
        "export": {
         "enabled": true
        },
        "dataProvider": [{
          "date": "2013-01-16",
          "target": 5,
          "actual": 8
        }, {
          "date": "2013-01-17",
          "target": 4,
          "actual": 6
        }, {
          "date": "2013-01-18",
          "target": 5,
          "actual": 2
        }, {
          "date": "2013-01-19",
          "target": 8,
          "actual": 9
        }, {
          "date": "2013-01-20",
          "target": 9,
          "actual": 6
        }, {
          "date": "2013-01-21",
          "target": 3,
          "actual": 5
        }, {
          "date": "2013-01-22",
          "target": 5,
          "actual": 7
        }, {
          "date": "2013-01-23",
          "target": 7,
          "actual": 6
        }, {
          "date": "2013-01-24",
          "target": 9,
          "actual": 5
        }, {
          "date": "2013-01-25",
          "target": 5,
          "actual": 8
        }, {
          "date": "2013-01-26",
          "target": 4,
          "actual": 8
        }, {
          "date": "2013-01-27",
          "target": 3,
          "actual": 4
        }, {
          "date": "2013-01-28",
          "target": 5,
          "actual": 7
        }, {
          "date": "2013-01-29",
          "target": 5,
          "actual": 8
        }, {
          "date": "2013-01-30",
          "target": 4,
          "actual": 7
        }]
      });
      </script>

      <script>
            // note, we have townName field with a name specified for each datapoint and townName2 with only some of the names specified.
            // we use townName2 to display town names next to the bullet. And as these names would overlap if displayed next to each bullet,
            // we created this townName2 field and set only some of the names for this purpse.
            var chartData = [
                {
                    "date": "2012-01-01",
                    "distance": 227,
                    "townName": "New York",
                    "townName2": "New York",
                    "townSize": 25,
                    "latitude": 40.71,
                    "duration": 408
                },
                {
                    "date": "2012-01-02",
                    "distance": 371,
                    "townName": "Washington",
                    "townSize": 14,
                    "latitude": 38.89,
                    "duration": 482
                },
                {
                    "date": "2012-01-03",
                    "distance": 433,
                    "townName": "Wilmington",
                    "townSize": 6,
                    "latitude": 34.22,
                    "duration": 562
                },
                {
                    "date": "2012-01-04",
                    "distance": 345,
                    "townName": "Jacksonville",
                    "townSize": 7,
                    "latitude": 30.35,
                    "duration": 379
                },
                {
                    "date": "2012-01-05",
                    "distance": 480,
                    "townName": "Miami",
                    "townName2": "Miami",
                    "townSize": 10,
                    "latitude": 25.83,
                    "duration": 501
                },
                {
                    "date": "2012-01-06",
                    "distance": 386,
                    "townName": "Tallahassee",
                    "townSize": 7,
                    "latitude": 30.46,
                    "duration": 443
                },
                {
                    "date": "2012-01-07",
                    "distance": 348,
                    "townName": "New Orleans",
                    "townSize": 10,
                    "latitude": 29.94,
                    "duration": 405
                },
                {
                    "date": "2012-01-08",
                    "distance": 238,
                    "townName": "Houston",
                    "townName2": "Houston",
                    "townSize": 16,
                    "latitude": 29.76,
                    "duration": 309
                },
                {
                    "date": "2012-01-09",
                    "distance": 218,
                    "townName": "Dalas",
                    "townSize": 17,
                    "latitude": 32.8,
                    "duration": 287
                },
                {
                    "date": "2012-01-10",
                    "distance": 349,
                    "townName": "Oklahoma City",
                    "townSize": 11,
                    "latitude": 35.49,
                    "duration": 485
                },
                {
                    "date": "2012-01-11",
                    "distance": 603,
                    "townName": "Kansas City",
                    "townSize": 10,
                    "latitude": 39.1,
                    "duration": 890
                },
                {
                    "date": "2012-01-12",
                    "distance": 534,
                    "townName": "Denver",
                    "townName2": "Denver",
                    "townSize": 18,
                    "latitude": 39.74,
                    "duration": 810
                },
                {
                    "date": "2012-01-13",
                    "townName": "Salt Lake City",
                    "townSize": 12,
                    "distance": 425,
                    "duration": 670,
                    "latitude": 40.75,
                    "dashLength": 8,
                    "alpha":0.4
                },
                {
                    "date": "2012-01-14",
                    "latitude": 36.1,
                    "duration": 470,
                    "townName": "Las Vegas",
                    "townName2": "Las Vegas"
                },
                {
                    "date": "2012-01-15"
                },
                {
                    "date": "2012-01-16"
                },
                {
                    "date": "2012-01-17"
                },
                {
                    "date": "2012-01-18"
                },
                {
                    "date": "2012-01-19"
                }
            ];
            var chart;

            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = "date";
                chart.dataDateFormat = "YYYY-MM-DD";
                // chart.color = "#";
                chart.marginLeft = 0;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
                categoryAxis.minPeriod = "DD"; // our data is daily, so we set minPeriod to DD
                categoryAxis.autoGridCount = false;
                categoryAxis.gridCount = 50;
                categoryAxis.gridAlpha = 0.1;
                // categoryAxis.gridColor = "#FFFFFF";
                // categoryAxis.axisColor = "#555555";
                // we want custom date formatting, so we change it in next line
                categoryAxis.dateFormats = [{
                    period: 'DD',
                    format: 'DD'
                }, {
                    period: 'WW',
                    format: 'MMM DD'
                }, {
                    period: 'MM',
                    format: 'MMM'
                }, {
                    period: 'YYYY',
                    format: 'YYYY'
                }];

                // as we have data of different units, we create three different value axes
                // Distance value axis
                var distanceAxis = new AmCharts.ValueAxis();
                distanceAxis.title = "distance";
                distanceAxis.gridAlpha = 0;
                distanceAxis.axisAlpha = 0;
                chart.addValueAxis(distanceAxis);

                // latitude value axis
                var latitudeAxis = new AmCharts.ValueAxis();
                latitudeAxis.gridAlpha = 0;
                latitudeAxis.axisAlpha = 0;
                latitudeAxis.labelsEnabled = false;
                latitudeAxis.position = "right";
                chart.addValueAxis(latitudeAxis);

                // duration value axis
                var durationAxis = new AmCharts.ValueAxis();
                durationAxis.title = "duration";
                // the following line makes this value axis to convert values to duration
                // it tells the axis what duration unit it should use. mm - minute, hh - hour...
                durationAxis.duration = "mm";
                durationAxis.durationUnits = {
                    DD: "d. ",
                    hh: "h ",
                    mm: "min",
                    ss: ""
                };
                durationAxis.gridAlpha = 0;
                durationAxis.axisAlpha = 0;
                durationAxis.inside = true;
                durationAxis.position = "right";
                chart.addValueAxis(durationAxis);

                // GRAPHS
                // distance graph
                // var distanceGraph = new AmCharts.AmGraph();
                // distanceGraph.valueField = "distance";
                // distanceGraph.title = "distance";
                // distanceGraph.type = "column";
                // distanceGraph.fillAlphas = 0.9;
                // distanceGraph.valueAxis = distanceAxis; // indicate which axis should be used
                // distanceGraph.balloonText = "[[value]] miles";
                // distanceGraph.legendValueText = "[[value]] mi";
                // distanceGraph.legendPeriodValueText = "total: [[value.sum]] mi";
                // distanceGraph.lineColor = "#263138";
                // distanceGraph.dashLengthField = "dashLength";
                // distanceGraph.alphaField = "alpha";
                // chart.addGraph(distanceGraph);

                // latitude graph
                var latitudeGraph = new AmCharts.AmGraph();
                latitudeGraph.valueField = "latitude";
                latitudeGraph.title = "latitude/city";
                latitudeGraph.type = "line";
                latitudeGraph.valueAxis = latitudeAxis; // indicate which axis should be used
                latitudeGraph.lineColor = "#786c56";
                latitudeGraph.lineThickness = 1;
                latitudeGraph.legendValueText = "[[description]]/[[value]]";
                latitudeGraph.descriptionField = "townName";
                latitudeGraph.bullet = "round";
                latitudeGraph.bulletSizeField = "townSize"; // indicate which field should be used for bullet size
                latitudeGraph.bulletBorderColor = "#786c56";
                latitudeGraph.bulletBorderAlpha = 1;
                latitudeGraph.bulletBorderThickness = 2;
                latitudeGraph.bulletColor = "#000000";
                latitudeGraph.labelText = "[[townName2]]"; // not all data points has townName2 specified, that's why labels are displayed only near some of the bullets.
                latitudeGraph.labelPosition = "right";
                latitudeGraph.balloonText = "latitude:[[value]]";
                latitudeGraph.showBalloon = true;
                latitudeGraph.dashLengthField = "dashLength";
                chart.addGraph(latitudeGraph);

                // duration graph
                var durationGraph = new AmCharts.AmGraph();
                durationGraph.title = "duration";
                durationGraph.valueField = "duration";
                durationGraph.type = "line";
                durationGraph.valueAxis = durationAxis; // indicate which axis should be used
                durationGraph.lineColor = "#ff5755";
                durationGraph.balloonText = "[[value]]";
                durationGraph.lineThickness = 1;
                durationGraph.legendValueText = "[[value]]";
                durationGraph.bullet = "square";
                durationGraph.bulletBorderColor = "#ff5755";
                durationGraph.bulletBorderThickness = 1;
                durationGraph.bulletBorderAlpha = 1;
                durationGraph.dashLengthField = "dashLength";
                chart.addGraph(durationGraph);

                // CURSOR
                var chartCursor = new AmCharts.ChartCursor();
                chartCursor.zoomable = false;
                chartCursor.categoryBalloonDateFormat = "DD";
                chartCursor.cursorAlpha = 0;
                chartCursor.valueBalloonsEnabled = false;
                chart.addChartCursor(chartCursor);

                // LEGEND
                var legend = new AmCharts.AmLegend();
                legend.bulletType = "round";
                legend.equalWidths = false;
                legend.valueWidth = 120;
                legend.useGraphSettings = true;
                // legend.color = "#FFFFFF";
                chart.addLegend(legend);

                // WRITE
                chart.write("chartshift");
            });
        </script>
    </body>
</html>