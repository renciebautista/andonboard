<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Display</title>

        <!-- Bootstrap -->
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{ asset("css/display.css") }}" rel="stylesheet">
        <link href="{{ asset("vendors/donut/doughnutit.css") }}" rel="stylesheet">


        @stack('stylesheets')

        <style type="text/css">
            #g1 {

                width: 350px;
                height: 300px;
            }
        </style>


    </head>

    <body class="nav-sm">
        <div class="container body">
            <div class="main_container">
                @yield('main_container')
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>

        <!-- Moment -->
        <script src="{{ asset("js/moment.js") }}"></script>

        <script src="{{ asset("vendors/justgage-1.2.2/raphael-2.1.4.min.js") }}"></script>
        <script src="{{ asset("vendors/justgage-1.2.2/justgage.js") }}"></script>

        @stack('scripts')

        <script type="text/javascript">
            $(document).ready(function() {
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
                      color: '#FFF'
                    },
                    levelColors: ['#CE1B21', '#D0532A', '#FFC414', '#85A137'],
                    counter: true,
                    // titleFontFamily: "Georgia",
                    titlePosition: "below",
                    valueFontColor: "white",
                    // valueFontFamily: "Georgia"
                  });

                var interval = setInterval(function() {
                    var momentNow = moment();
                    

                    $('#date-part').html(momentNow.format('YYYY MMMM DD') + ' '
                                        + momentNow.format('dddd')
                                         .substring(0,3).toUpperCase());
                    $('#time-part').html(momentNow.format('A hh:mm:ss'));
                    if(cnt < 85){
                        //g1.refresh(cnt++);
                    }
                }, 100);
                
                $('#stop-interval').on('click', function() {
                    clearInterval(interval);
                });

                

            });
        </script>
        
    </body>
</html>