@extends('layouts.layout')

@push('stylesheets')

@endpush

@push('scripts')
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
                      color: '#000'
                    },
                    levelColors: ['#CE1B21', '#D0532A', '#FFC414', '#85A137'],
                    counter: true,
  
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
                      color: '#000'
                    },
                    levelColors: ['#CE1B21', '#D0532A', '#FFC414', '#85A137'],
                    counter: true,
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
                      color: '#000'
                    },
                    levelColors: ['#CE1B21', '#D0532A', '#FFC414', '#85A137'],
                    counter: true,
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
                    $('#time-part').html(momentNow.format('A hh:mm:ss'));
                    // if(cnt < 85){
                    //     g1.refresh(cnt++);
                    // }
                    
                }, 100);
                
                $('#stop-interval').on('click', function() {
                    clearInterval(interval);
                });

                

            });
        </script>

@endpush

@section('main_container')
<!-- page content -->
<div class="right_col" role="main">

    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="row" >
                <div class="col-lg-12">
                    <h1 class="text-center">{{ $line->line_name }}</h1>
                </div>
            </div>

             <div class="row" style="border-top: 1px solid #eee;">


                <div class="col-lg-4">
                    <h1 class="text-center">SHIFT 1</h1>
                    <div id="g2" class="gauge "></div>
                    <h1 class="text-center">3000 / 3000</h1>
                </div>

                <div class="col-lg-4">
                    <h1 class="text-center">SHIFT 2</h1>
                    <div id="g3" class="gauge "></div>
                    <h1 class="text-center">3000 / 3000</h1>
                </div>

                <div class="col-lg-4">
                    <h1 class="text-center">SHIFT 3</h1>
                    <div id="g4" class="gauge "></div>
                    <h1 class="text-center">1500 / 3000</h1>
                </div>
                
            </div>
        </div>
    </div>




    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Today Total</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div id="g1" class="gauge "></div>
                    <h1 class="text-center">7500 / 9000</h1>
            </div>
        </div>
    </div>

    <div class="col-md-8 col-sm-6 col-xs-12">
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
<!-- /page content -->
@endsection