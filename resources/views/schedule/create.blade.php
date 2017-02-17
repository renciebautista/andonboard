@extends('layouts.layout')

@push('stylesheets')

@endpush

@section('main_container')

 <!-- page content -->
<div class="right_col" role="main">

    <div class="">
        @include('includes/notifications')

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Upload Schedules</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        {!! Form::open(array('route' => 'schedules.store','class' => 'form-horizontal form-label-left', 'files'=>true)) !!}


                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" name="file" id="file">
                                </div>
                            </div>

                           
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <a class="btn btn-primary" href="{{ route('schedules.index')}}">Back</a>
                                    <button type="submit" class="btn btn-success">Submit</button>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
    
@endsection

@push('scripts')
@endpush