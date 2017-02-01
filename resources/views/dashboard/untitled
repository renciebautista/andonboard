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



          <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class=""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Home</a>
                        </li>
                        <li role="presentation" class="active"><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="true">SHIFT 1</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">SHIFT 2</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">SHIFT 3</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="tab_content1" aria-labelledby="home-tab">
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
        

    @foreach($shifts as $shift)
        <div class="col-lg-4">
            <div class="x_panel shift">
                <div class="x_title">
                    <h2>{{ $shift->shift }}</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <span>Target Output</span>
                    <h2>231,809</h2>
                    <span>Actual Output</span>
                    <h2 class="green">231,809</h2>
                    <hr>
                    <button type="button" class="btn btn-success btn-lg">Set Target</button>
                    <button type="button" class="btn btn-success btn-lg">Reset Actual</button>
                </div>
            </div>
        </div>
    @endforeach
    </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content2" aria-labelledby="profile-tab">
                           <div id="chartshift" style="width:100%; height:400px;"></div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk </p>
                        </div>
                      </div>
                    </div>


</div>
<!-- /page content -->
@endsection