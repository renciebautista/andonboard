@extends('layouts.layout')

@push('stylesheets')
@endpush

@section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ $line->line_name }}</h2>
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