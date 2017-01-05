@extends('layouts.layout')

@push('stylesheets')
@endpush

@section('main_container')
<!-- page content -->
<div class="right_col" role="main">

<!--   <div class="row ">
              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count">179</div>
                  <h3>Target Count</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count">179</div>
                  <h3>Actual Count</h3>
                </div>
              </div>
            </div> -->

  <div class="row">
    

    <div class="col-md-10 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>7 day daily trend</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div id="chartdiv"></div>
            </div>
        </div>
    </div>

    <!-- <div class="col-md-2 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Date Time</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content" style="text-align: center;">

                            <h1 class="name_title">10000</h1>
                            <p>Target Count</p>


                          </div>
        </div>
    </div> -->

  </div>
  

  <div class="row">


    @foreach($side_lines as $line)
                      <div class="col-md-2 col-xs-12 widget widget_tally_box">
                        <div class="x_panel ui-ribbon-container">
                          
                          <div class="x_title">
                            <h2>{{ $line->line_name }}</h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

                            <h3 class="name_title">2000</h3>
                            <p>Target Count</p>

                            <div class="divider"></div>

                            <h3 class="name_title green">100</h3>
                            <p>Actual Count</p>
                          </div>
                        </div>
                      </div>
                      @endforeach




                    </div>

            
</div>
<!-- /page content -->
@endsection