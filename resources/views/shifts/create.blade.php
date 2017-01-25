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
                        <h2>New Shift</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        {!! Form::open(array('route' => 'shifts.store','class' => 'form-horizontal form-label-left')) !!}


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Shift Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('shift', null, ['required' => 'required', 'class' => 'form-control col-md-7 col-xs-12']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Start Time <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('start', null, ['required' => 'required', 'class' => 'time form-control col-md-7 col-xs-12', 'data-inputmask' => "'mask': '99:99:99'"]) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">End Time <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('end', null, ['required' => 'required', 'class' => 'time form-control col-md-7 col-xs-12', 'data-inputmask' => "'mask': '99:99:99'"]) !!}
                                </div>
                            </div>

                           
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <a class="btn btn-primary" href="{{ route('shifts.index')}}">Cancel</a>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
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

@push('inline-scripts')
$(":input").inputmask();
@endpush