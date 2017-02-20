@extends('layouts.display')

@push('stylesheets')

@endpush

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        var l1_target = $('#l1_target').FlipClock(9999, {
            clockFace: 'Counter'
        });

        var l1_actual = $('#l1_actual').FlipClock(9999, {
            clockFace: 'Counter'
        });


        var l2_target = $('#l2_target').FlipClock(9999, {
            clockFace: 'Counter'
        });

        var l2_actual = $('#l2_actual').FlipClock(9999, {
            clockFace: 'Counter'
        });

        // $('#s1').stepProgressBar({
        //     currentValue: 0,
        //     steps: [
        //         { value: 0 },
        //         { value: 2500 },
        //         { value: 5000 },
        //         { value: 7500 },
        //         { value: 9999 },
        //   ],
        // });

        // $('#s2').stepProgressBar({
        //     currentValue: 0,
        //     steps: [
        //         { value: 0 },
        //         { value: 2500 },
        //         { value: 5000 },
        //         { value: 7500 },
        //         { value: 9999 },
        //   ],
        // });

        // $('#s3').stepProgressBar({
        //     currentValue: 0,
        //     steps: [
        //         { value: 0 },
        //         { value: 2500 },
        //         { value: 5000 },
        //         { value: 7500 },
        //         { value: 9999 },
        //   ],
        // });


        // $(function() {
            function update() {
                $.getJSON("/api/line/{{ $line->slug }}", 
                    function(json){
                        l1_target.setValue(json.target);
                        l1_actual.setValue(json.actual);
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
        // });
    });
    
    // var chartData = generateChartData();

    // function generateChartData() {
    //   var chartData = [];
    //   var firstDate = new Date( 2012, 0, 1 );
    //   firstDate.setDate( firstDate.getDate() - 1000 );
    //   firstDate.setHours( 0, 0, 0, 0 );

    //   for ( var i = 0; i < 1000; i++ ) {
    //     var newDate = new Date( firstDate );
    //     newDate.setHours( 0, i, 0, 0 );

    //     var a = Math.round( Math.random() * ( 40 + i ) ) + 100 + i;
    //     var b = Math.round( Math.random() * 100000000 );

    //     chartData.push( {
    //       "date": newDate,
    //       "value": a,
    //       "volume": b
    //     } );
    //   }
    //   return chartData;
    // }

    // var chart = AmCharts.makeChart( "chartdiv", {
    //   "type": "stock",
    //   "theme": "light",
    //   "categoryAxesSettings": {
    //     "minPeriod": "mm"
    //   },

    //   "dataSets": [ {
    //     "color": "#b0de09",
    //     "fieldMappings": [ {
    //       "fromField": "value",
    //       "toField": "value"
    //     }, {
    //       "fromField": "volume",
    //       "toField": "volume"
    //     } ],

    //     "dataProvider": chartData,
    //     "categoryField": "date"
    //   } ],

    //   "panels": [ {
    //     "showCategoryAxis": false,
    //     "title": "Value",
    //     "percentHeight": 70,

    //     "stockGraphs": [ {
    //       "id": "g1",
    //       "valueField": "value",
    //       "type": "smoothedLine",
    //       "lineThickness": 2,
    //       "bullet": "round"
    //     } ],


    //     "stockLegend": {
    //       "valueTextRegular": " ",
    //       "markerType": "none"
    //     }
    //   }, {
    //     "title": "Volume",
    //     "percentHeight": 30,
    //     "stockGraphs": [ {
    //       "valueField": "volume",
    //       "type": "column",
    //       "cornerRadiusTop": 2,
    //       "fillAlphas": 1
    //     } ],

    //     "stockLegend": {
    //       "valueTextRegular": " ",
    //       "markerType": "none"
    //     }
    //   } ],

    //   "chartScrollbarSettings": {
    //     "graph": "g1",
    //     "usePeriod": "10mm",
    //     "position": "top"
    //   },

    //   "chartCursorSettings": {
    //     "valueBalloonsEnabled": true
    //   },

    //   "periodSelector": {
    //     "position": "top",
    //     "dateFormat": "YYYY-MM-DD JJ:NN",
    //     "inputFieldWidth": 150,
    //     "periods": [ {
    //       "period": "hh",
    //       "count": 1,
    //       "label": "1 hour",
    //       "selected": true
    //     }, {
    //       "period": "hh",
    //       "count": 2,
    //       "label": "2 hours"
    //     }, {
    //       "period": "hh",
    //       "count": 5,
    //       "label": "5 hour"
    //     }, {
    //       "period": "hh",
    //       "count": 12,
    //       "label": "12 hours"
    //     }, {
    //       "period": "MAX",
    //       "label": "MAX"
    //     } ]
    //   },

    //   "panelsSettings": {
    //     "usePrefixes": true
    //   },

    //   "export": {
    //     "enabled": true,
    //     "position": "bottom-right"
    //   }
    // } );


    window.feed = function(callback) {
      var tick = {};
      tick.plot0 = Math.ceil(350 + (Math.random() * 500));
      callback(JSON.stringify(tick));
    };

    var myConfig = {
      type: "gauge",
      alpha: 0,
      globals: {
        fontSize: 25
      },
      plotarea: {
        marginTop: 80
      },
      plot: {
        csize:"5%",
        size: '100%',
        valueBox: {
          placement: 'center',
          text: '%v', //default
          fontSize: 35,
          rules: [{
            rule: '%v >= 700',
            // text: '%v<br>EXCELLENT'
          }, {
            rule: '%v < 700 && %v > 640',
            text: '%v<br>Good'
          }, {
            rule: '%v < 640 && %v > 580',
            // text: '%v<br>Fair'
          }, {
            rule: '%v <  580',
            // text: '%v<br>Bad'
          }]
        }
      },
      tooltip: {
        borderRadius: 5
      },
      scaleR: {
        aperture: 180,
        minValue: 0,
        maxValue: 2000,
        step: 500,
        center: {
          visible: false,
        },
        tick: {
          visible: false
        },
        item: {
          "font-color":"white",
          "font-size":30,
          offsetR: 0,
          rules: [{
            rule: '%i == 9',
            offsetX: 15
          }]
        },
        // labels: ['0', '', '800', '', '1500','2000'],
        ring: {
          size: 50,
          rules: [
            {
              "rule":"%v >= 0 && %v <= 400",
              "background-color":"red"
            },
            {
              "rule":"%v >= 400 && %v <= 800",
              "background-color":"orange"
            },
            {
              "rule":"%v >= 800 && %v <= 1000",
              "background-color":"yellow"
            },
            {
              "rule":"%v >= 1000 && %v <= 1500",
              "background-color":"green"
            },
            {
              "rule":"%v >= 1500 && %v <=2000",
              "background-color":"blue"
            }
          ]
        },
        guide:{ //Specify your gauge chart's background color(s).
        // "background-color":"#66CCFF #FFCCFF",
        alpha:0
      }
      },
      refresh: {
        type: "feed",
        transport: "js",
        url: "feed()",
        interval: 1500,
        resetTimeout: 1000
      },
      series: [{
        values: [755], // starting value
        backgroundColor: 'white',
        indicator: [10, 10, 10, 10, 0.75],
        animation: {
          effect: 2,
          method: 1,
          sequence: 4,
          speed: 900
        },
      }]
    };

    var myConfig2 = {

      type: "gauge",
      alpha: 0,
      globals: {
        fontSize: 25
      },
      plotarea: {
        marginTop: 80
      },
      plot: {
        csize:"5%",
        size: '100%',
        valueBox: {
          placement: 'center',
          text: '%v', //default
          fontSize: 35,
          rules: [{
            rule: '%v >= 700',
            text: '%v<br>EXCELLENT'
          }, {
            rule: '%v < 700 && %v > 640',
            text: '%v<br>Good'
          }, {
            rule: '%v < 640 && %v > 580',
            text: '%v<br>Fair'
          }, {
            rule: '%v <  580',
            text: '%v<br>Bad'
          }]
        }
      },
      tooltip: {
        borderRadius: 5
      },
      scaleR: {
        aperture: 180,
        minValue: 0,
        maxValue: 2000,
        step: 500,
        center: {
          visible: false,
        },
        tick: {
          visible: false
        },
        item: {
          "font-color":"white",
          "font-size":30,
          offsetR: 0,
          rules: [{
            rule: '%i == 9',
            offsetX: 15
          }]
        },
        // labels: ['0', '', '', '', '', '', '', '750', '1000', '1250', '1500', '2000'],
        ring: {
          size: 10,
          rules: [
            {
              "rule":"%v >= 0 && %v <= 400",
              "background-color":"red"
            },
            {
              "rule":"%v >= 400 && %v <= 800",
              "background-color":"orange"
            },
            {
              "rule":"%v >= 800 && %v <= 1000",
              "background-color":"yellow"
            },
            {
              "rule":"%v >= 1000 && %v <= 1500",
              "background-color":"green"
            },
            {
              "rule":"%v >= 1500 && %v <=2000",
              "background-color":"blue"
            }
          ]
        },
        guide:{ //Specify your gauge chart's background color(s).
        // "background-color":"#66CCFF #FFCCFF",
        alpha:0
      }
      },
      refresh: {
        type: "feed",
        transport: "js",
        url: "feed()",
        interval: 1500,
        resetTimeout: 1000
      },
      series: [{
        values: [755], // starting value
        backgroundColor: 'white',
        indicator: [10, 10, 10, 10, 0.75],
        animation: {
          effect: 2,
          method: 1,
          sequence: 4,
          speed: 900
        },
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: 500,
      width: '100%'
    });

    zingchart.render({
      id: 'myChart2',
      data: myConfig,
      height: 500,
      width: '100%'
    });

    zingchart.render({
      id: 'myChart3',
      data: myConfig,
      height: 500,
      width: '100%'
    });



    zingchart.render({
      id: 'myChart1_1',
      data: myConfig2,
      height: 200,
      width: '100%'
    });

    zingchart.render({
      id: 'myChart1_2',
      data: myConfig2,
      height: 200,
      width: '100%'
    });

    zingchart.render({
      id: 'myChart1_3',
      data: myConfig2,
      height: 200,
      width: '100%'
    });
</script>

@endpush

@section('main_container')
<div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12 b-right">
                <div class="center">
                  <h2 class="line_header">LINE 1</h2>
                  
                  <h3>Alaska Powdered Milk </h3>
                  <hr>
                  <div class="row center">
                  <div class="col-sm-6">
                    <div>
                      <h3>TARGET</h3>
                      <div id="l1_target" class="counter"></div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div>
                      <h3>ACTUAL</h3>
                      <div id="l1_actual" class="counter"></div>
                    </div>
                  </div>
                </div>
                  <div id='myChart'></div>
                </div>
                <hr style="margin-top:-160px;">
                <div class="row center">
                  <div class="x_content">


                  <div>
                    <div class="row">
                       <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">S1</span>
                       </div>
                       <div class="col-sm-8">
                        <div id="myGoal1"></div>
                       </div>
                       <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">1000</span>
                       </div>
                    </div>

                    <div class="row">
                       <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">S2</span>
                       </div>
                       <div class="col-sm-8">
                        <div id="myGoal2"></div>
                       </div>
                       <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">1000</span>
                       </div>
                    </div>

                    <div class="row">
                       <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">S3</span>
                       </div>
                       <div class="col-sm-8">
                        <div id="myGoal3"></div>
                       </div>
                       <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">1000</span>
                       </div>
                    </div>
              
                  </div>
                  

   

                </div>

                </div>
              </div>

              <div class="col-md-6 col-sm-12 col-xs-12 b-right">
                <div class="center">
                  <h2 class="line_header">LINE 2</h2>
                  
                  <h3>Alaska Condensed Milk </h3>
                  <hr>
                  <div class="row center">
                  <div class="col-sm-6">
                    <div>
                      <h3>TARGET</h3>
                      <div id="l2_target" class="counter"></div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div>
                      <h3>ACTUAL</h3>
                      <div id="l2_actual" class="counter"></div>
                    </div>
                  </div>
                </div>
                  <div id='myChart2'></div>
                </div>
                
               <hr style="margin-top:-160px;">
                <div class="row center">
                  <div class="x_content">
                 
                  <div>
                    <div class="row">
                       <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">S1</span>
                       </div>
                       <div class="col-sm-8">
                        <div id="myGoal4"></div>
                       </div>
                       <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">1000</span>
                       </div>
                    </div>

                    <div class="row">
                       <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">S2</span>
                       </div>
                       <div class="col-sm-8">
                        <div id="myGoal5"></div>
                       </div>
                       <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">1000</span>
                       </div>
                    </div>

                    <div class="row">
                       <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">S3</span>
                       </div>
                       <div class="col-sm-8">
                        <div id="myGoal6"></div>
                       </div>
                       <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">1000</span>
                       </div>
                    </div>
              
                  </div>
                  

   

                </div>

                </div>
              </div>

            

            </div>
@endsection