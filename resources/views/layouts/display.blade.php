<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentellela Alela! | </title>

    <!-- Bootstrap -->
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{ asset("css/custom.min.css") }}" rel="stylesheet">

        <link href="{{ asset("css/style.css") }}" rel="stylesheet">
        <link href="{{ asset("vendors/flipclock/flipclock.css") }}" rel="stylesheet">
        <link href="{{ asset("vendors/animatedprogress/jquery.stepProgressBar.css") }}" rel="stylesheet">
        <style type="text/css">
          .gauge{
            
                width: 180px;
                height: 180px;
          }
          .w_55 {
            width: 75%
          }
          .counter{
            margin-top: -10px;
            margin-bottom: -5px;
            zoom: 1.4;
            -moz-transform: scale(1.4);
            }
            .progress {height: 40px; margin-top: 10px; margin-right: 10px;} // we increased it so the text is visible or change font size
            .progress .sr-only { position: relative; }
        </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- page content -->
        <div>
          <div class="">
           <!--  <div class="page-title">
              <div class="title_left">
                <h3>Plain Page</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="row">
        <div class="col-lg-2">
            <img src="/images/FrieslandCampina.png" class="left-logo">
        </div>

        <div class="col-lg-4">
            <h2 id="plant_name">PLANT NAME</h2>
        </div>

        <div class="col-lg-4">
            <!-- <div id='date-part' class="text-center"></div> -->
            <div id='time-part' class="text-center"></div>
        </div>

        <div class="col-lg-2">
            <img src="/images/Alaska_milk_logo_2016.png" class="pull-right right-logo">
        </div>
    </div>

            <div class="clearfix"></div>
            <hr>
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
                      <div class="counter"></div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div>
                      <h3>ACTUAL</h3>
                      <div class="counter"></div>
                    </div>
                  </div>
                </div>
                  <div id='myChart'></div>
                </div>
                <hr style="margin-top:-160px;">
                <div class="row center">
                  <div class="x_content">
                 <!--  <div class="widget_summary">
                    <div style ="margin-right:10px;">
                      <span style="font-size:40px;">S1</span>
                    </div>
                    <div class="w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div style ="margin-right:10px;">
                      <span style="font-size:40px;">1000</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="widget_summary">
                    <div style ="margin-right:10px;">
                      <span style="font-size:40px;">S1</span>
                    </div>
                    <div class="w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div style ="margin-right:10px;">
                      <span style="font-size:40px;">1000</span>
                    </div>
                    <div class="clearfix"></div>
                  </div> -->

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
                      <div class="counter"></div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div>
                      <h3>ACTUAL</h3>
                      <div class="counter"></div>
                    </div>
                  </div>
                </div>
                  <div id='myChart2'></div>
                </div>
                
               <hr style="margin-top:-160px;">
                <div class="row center">
                  <div class="x_content">
                 <!--  <div class="widget_summary">
                    <div style ="margin-right:10px;">
                      <span style="font-size:40px;">S1</span>
                    </div>
                    <div class="w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div style ="margin-right:10px;">
                      <span style="font-size:40px;">1000</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="widget_summary">
                    <div style ="margin-right:10px;">
                      <span style="font-size:40px;">S1</span>
                    </div>
                    <div class="w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div style ="margin-right:10px;">
                      <span style="font-size:40px;">1000</span>
                    </div>
                    <div class="clearfix"></div>
                  </div> -->

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
          </div>
        </div>

      </div>
    </div>

     <!-- jQuery -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset("vendors/bootstrap/dist/js/bootstrap.min.js") }}"></script>

         <script src="{{ asset("js/moment.js") }}"></script>

    <script src="{{ asset("vendors/justgage-1.2.2/raphael-2.1.4.min.js") }}"></script>
    <script src="{{ asset("vendors/justgage-1.2.2/justgage.js") }}"></script>
    <script src="{{ asset("vendors/flipclock/flipclock.min.js") }}"></script>
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script src="{{ asset("vendors/animatedprogress/jquery.stepProgressBar.js") }}"></script>

    <script>
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

    <script type="text/javascript">
            $(document).ready(function() {

            $('#myGoal1').stepProgressBar({
              currentValue: 200,
              steps: [
                { value: 0 },
                { value: 500 },
                { value: 1000,
                   bottomLabel: "TARGET",
                   color: "#FF0000"
                 },
                { value: 1500 },
                { value: 2000 },
                
              ],
              // unit: '$'
            });

            $('#myGoal2').stepProgressBar({
              currentValue: 200,
              steps: [
                { value: 0 },
                { value: 500 },
                { value: 1000,
                   bottomLabel: "TARGET",
                   color: "#FF0000"
                 },
                { value: 1500 },
                { value: 2000 },
                
              ],
              // unit: '$'
            });

            $('#myGoal3').stepProgressBar({
              currentValue: 200,
              steps: [
                { value: 0 },
                { value: 00 },
                { 
                  value: 1000,
                  bottomLabel: "TARGET",
                  color: "#FF0000"
                 },
                { value: 1500 },
                { value: 2000 },
                
              ],
              // unit: '$'
            });

            $('#myGoal4').stepProgressBar({
              currentValue: 200,
              steps: [
                { value: 0 },
                { value: 500,
                  bottomLabel: "TARGET",
                  color: "#FF0000"
                 },
                { value: 1000
                 },
                { value: 1500 },
                { value: 2000 },
                
              ],
              // unit: '$'
            });

            $('#myGoal5').stepProgressBar({
              currentValue: 200,
              steps: [
                { value: 0 },
                { value: 500 },
                { value: 1000,
                   bottomLabel: "TARGET",
                   color: "#FF0000"
                 },
                { value: 1500 },
                { value: 2000 },
                
              ],
              // unit: '$'
            });

            $('#myGoal6').stepProgressBar({
              currentValue: 200,
              steps: [
                { value: 0 },
                { value: 500 },
                { value: 1000,
                   bottomLabel: "TARGET",
                   color: "#FF0000"
                 },
                { value: 1500 },
                { value: 2000 },
                
              ],
              // unit: '$'
            });

    
          var cnt = 1;
          setTimeout(function() {
           setInterval(function() {
             clock.increment();
              cnt++
             $('#myGoal1').stepProgressBar('setCurrentValue',cnt *10);
           }, 1000);
          });
              

              var clock = $('.counter').FlipClock(1000, {
                    clockFace: 'Counter'
                });

                var cnt = 1;


                var g1 = new JustGage({
                    id: 'g1',
                    value: 84,
                    min: 0,
                    max: 100,
                    symbol: '%',
                    donut: true,
                    pointer: true,
                    gaugeWidthScale: 0.4,
                    pointerOptions: {
                      toplength: 10,
                      bottomlength: 10,
                      bottomwidth: 8,
                      color: '#FFF'
                    },
                    levelColors: ['#CE1B21', '#D0532A', '#FFC414', '#85A137'],
                    counter: true,
                    // titleFontFamily: "Georgia",
                    titlePosition: "below",
                    valueFontColor: "white",
                    // valueFontFamily: "Georgia"
  
                  });

                var g2 = new JustGage({
                    id: 'g2',
                    value: 100,
                    min: 0,
                    max: 100,
                    symbol: '%',
                    donut: true,
                    pointer: true,
                    gaugeWidthScale: 0.4,
                    pointerOptions: {
                      toplength: 10,
                      bottomlength: 10,
                      bottomwidth: 8,
                      color: '#FFF'
                    },
                    levelColors: ['#CE1B21', '#D0532A', '#FFC414', '#85A137'],
                    counter: true,
                    // titleFontFamily: "Georgia",
                    titlePosition: "below",
                    valueFontColor: "white",
                    // valueFontFamily: "Georgia"
                   
                  });

                var g3 = new JustGage({
                    id: 'g3',
                    value: 150,
                    min: 0,
                    max: 100,
                    symbol: '%',
                    donut: true,
                    pointer: true,
                    gaugeWidthScale: 0.4,
                    pointerOptions: {
                      toplength: 10,
                      bottomlength: 10,
                      bottomwidth: 8,
                      color: '#FFF'
                    },
                    levelColors: ['#CE1B21', '#D0532A', '#FFC414', '#85A137'],
                    counter: true,
                    // titleFontFamily: "Georgia",
                    titlePosition: "below",
                    valueFontColor: "white",
                    // valueFontFamily: "Georgia"
                  });

                var g4 = new JustGage({
                    id: 'g4',
                    value: 50,
                    min: 0,
                    max: 100,
                    symbol: '%',
                    donut: true,
                    pointer: true,
                    gaugeWidthScale: 0.4,
                    pointerOptions: {
                      toplength: 10,
                      bottomlength: 10,
                      bottomwidth: 8,
                      color: '#000'
                    },
                    levelColors: ['#CE1B21', '#D0532A', '#FFC414', '#85A137'],
                    counter: true,
                  });

                var interval = setInterval(function() {
                    var momentNow = moment();
                    

                    $('#date-part').html(momentNow.format('YYYY MMMM DD') + ' '
                                        + momentNow.format('dddd')
                                         .substring(0,3).toUpperCase());
                    $('#time-part').html(momentNow.format('MM/DD/YYYY') + ' '+momentNow.format('HH:mm:ss'));
                    // if(cnt < 85){
                    //     g1.refresh(cnt++);
                    // }
                    
                }, 100);
                
                $('#stop-interval').on('click', function() {
                    clearInterval(interval);
                });

                

            });
        </script>
  </body>
</html>
