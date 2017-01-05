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
                <!-- <footer>
                    <div class="pull-right">
                        Gentelella - Bootstrap Admin Template by <a ="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer> -->
                <!-- /footer content -->

            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>
        <!-- Bootstrap -->
  
        <!-- Amcharts -->
        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="https://www.amcharts.com/lib/3/serial.js"></script>
        <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <script src="https://www.amcharts.com/lib/3/themes/none.js"></script>


        <!-- Custom Theme Scripts -->
        <script src="{{ asset("js/gentelella.min.js") }}"></script>
        <script src="{{ asset("js/custom.js") }}"></script>
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

          });

    

          @stack('inline-scripts')
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
    </body>
</html>