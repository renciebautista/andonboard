@extends('layouts.layout')

@push('stylesheets')

@endpush

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        t_target = $('#t_target').FlipClock(9999, {
            clockFace: 'Counter'
        });

        t_actual = $('#t_actual').FlipClock(9999, {
            clockFace: 'Counter'
        });

        $('#s1').stepProgressBar({
            currentValue: 0,
            steps: [
                { value: 0 },
                { value: 2500 },
                { value: 5000 },
                { value: 7500 },
                { value: 9999 },
          ],
        });

        $('#s2').stepProgressBar({
            currentValue: 0,
            steps: [
                { value: 0 },
                { value: 2500 },
                { value: 5000 },
                { value: 7500 },
                { value: 9999 },
          ],
        });

        $('#s3').stepProgressBar({
            currentValue: 0,
            steps: [
                { value: 0 },
                { value: 2500 },
                { value: 5000 },
                { value: 7500 },
                { value: 9999 },
          ],
        });


        $(function() {
            function update() {
                $.getJSON("/api/line/{{ $line->slug }}", 
                    function(json){
                        t_target.setValue(json.target);
                        t_actual.setValue(json.actual);
                });
            }

            function shiftupdate() {
                $.getJSON("/api/lineshift/{{ $line->slug }}", 
                    function(json){
                        $('#s1').stepProgressBar('setCurrentValue', json.s1.value);
                        $('#s1').stepProgressBar('removeTarget');
                        $('#s1').stepProgressBar('addStep', json.s1.target);
                        $('#s1_actual').text(json.s1.value);

                        $('#s2').stepProgressBar('setCurrentValue', json.s2.value);
                        $('#s2').stepProgressBar('removeTarget');
                        $('#s2').stepProgressBar('addStep', json.s2.target);
                        $('#s2_actual').text(json.s2.value);

                        $('#s3').stepProgressBar('setCurrentValue', json.s3.value);
                        $('#s3').stepProgressBar('removeTarget');
                        $('#s3').stepProgressBar('addStep', json.s3.target);
                        $('#s3_actual').text(json.s3.value);
                });

                
            }

            update();
            shiftupdate();

            setInterval(update, 1000);
            setInterval(shiftupdate, 1000);
        });
    });
    
var chartData = generateChartData();

function generateChartData() {
  var chartData = [];
  var firstDate = new Date( 2012, 0, 1 );
  firstDate.setDate( firstDate.getDate() - 1000 );
  firstDate.setHours( 0, 0, 0, 0 );

  for ( var i = 0; i < 1000; i++ ) {
    var newDate = new Date( firstDate );
    newDate.setHours( 0, i, 0, 0 );

    var a = Math.round( Math.random() * ( 40 + i ) ) + 100 + i;
    var b = Math.round( Math.random() * 100000000 );

    chartData.push( {
      "date": newDate,
      "value": a,
      "volume": b
    } );
  }
  return chartData;
}

var chart = AmCharts.makeChart( "chartdiv", {
  "type": "stock",
  "theme": "light",
  "categoryAxesSettings": {
    "minPeriod": "mm"
  },

  "dataSets": [ {
    "color": "#b0de09",
    "fieldMappings": [ {
      "fromField": "value",
      "toField": "value"
    }, {
      "fromField": "volume",
      "toField": "volume"
    } ],

    "dataProvider": chartData,
    "categoryField": "date"
  } ],

  "panels": [ {
    "showCategoryAxis": false,
    "title": "Value",
    "percentHeight": 70,

    "stockGraphs": [ {
      "id": "g1",
      "valueField": "value",
      "type": "smoothedLine",
      "lineThickness": 2,
      "bullet": "round"
    } ],


    "stockLegend": {
      "valueTextRegular": " ",
      "markerType": "none"
    }
  }, {
    "title": "Volume",
    "percentHeight": 30,
    "stockGraphs": [ {
      "valueField": "volume",
      "type": "column",
      "cornerRadiusTop": 2,
      "fillAlphas": 1
    } ],

    "stockLegend": {
      "valueTextRegular": " ",
      "markerType": "none"
    }
  } ],

  "chartScrollbarSettings": {
    "graph": "g1",
    "usePeriod": "10mm",
    "position": "top"
  },

  "chartCursorSettings": {
    "valueBalloonsEnabled": true
  },

  "periodSelector": {
    "position": "top",
    "dateFormat": "YYYY-MM-DD JJ:NN",
    "inputFieldWidth": 150,
    "periods": [ {
      "period": "hh",
      "count": 1,
      "label": "1 hour",
      "selected": true
    }, {
      "period": "hh",
      "count": 2,
      "label": "2 hours"
    }, {
      "period": "hh",
      "count": 5,
      "label": "5 hour"
    }, {
      "period": "hh",
      "count": 12,
      "label": "12 hours"
    }, {
      "period": "MAX",
      "label": "MAX"
    } ]
  },

  "panelsSettings": {
    "usePrefixes": true
  },

  "export": {
    "enabled": true,
    "position": "bottom-right"
  }
} );
</script>

@endpush

@section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="row" >
                    <div class="col-lg-12">
                        <h1 class="text-center">{{ $line->line_name }} OVERVIEW</h1>
                    </div>
                </div>

                 <div class="row" style="border-top: 1px solid #eee;">
                    <div class="col-lg-4">
                        <div>
                            <h3>TARGET</h3>
                            <div id="t_target"></div>
                            <h3>ACTUAL</h3>
                            <div id="t_actual"></div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div>
                            <div class="row">
                                <div class="col-sm-2" style="padding:24px;">
                                    <span style="font-size:40px;">S1</span>
                                </div>
                                <div class="col-sm-8">
                                    <div id="s1"></div>
                                </div>
                                <div class="col-sm-2" style="padding:24px;">
                                    <span id="s1_actual" style="font-size:40px;">0000</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2" style="padding:24px;">
                                    <span style="font-size:40px;">S2</span>
                                </div>
                                <div class="col-sm-8">
                                    <div id="s2"></div>
                                </div>
                                <div class="col-sm-2" style="padding:24px;">
                                    <span id="s2_actual" style="font-size:40px;">0000</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2" style="padding:24px;">
                                    <span style="font-size:40px;">S3</span>
                                </div>
                                <div class="col-sm-8">
                                    <div id="s3"></div>
                                </div>
                                <div class="col-sm-2" style="padding:24px;">
                                    <span id="s3_actual" style="font-size:40px;">0000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
    

    <div class="row">
        <div class="col-md-12col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Trends</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id="chartdiv"></div>
                </div>
            </div>
        </div>
    </div>
    

</div>
<!-- /page content -->
@endsection