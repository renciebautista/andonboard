@extends('layouts.layout')

@push('stylesheets')
@endpush

@section('main_container')
<!-- page content -->
<div class="right_col" role="main">

<div class="row tile_count">
            <div class="col-md-6 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Today Target Output</span>
              <div class="count">2500</div>
            </div>
           
            <div class="col-md-6 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Today Actual Output</span>
              <div class="count green">2,500</div>
            </div>
           
          </div>

  <div class="row">
    

    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>15 DAYS TREND</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div id="chartdiv"></div>
            </div>
        </div>
    </div>

  </div>
  

  <div class="row">


    @foreach($side_lines as $line)
                      <div class="col-md-2">
                        <div class="x_panel shift">
                          
                          <div class="x_title">
                            <h2>{{ $line->line_name }}</h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <span>Target Output</span>
                    <h2>231,809</h2>
                    <hr>
                    <span>Actual Output</span>
                    <h2 class="green">231,809</h2>
                            
                          </div>
                        </div>
                      </div>
                      @endforeach




                    </div>

            
</div>
<!-- /page content -->
@endsection