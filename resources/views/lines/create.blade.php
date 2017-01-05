@extends('layouts.layout')

@push('stylesheets')

@endpush

@section('main_container')

 <!-- page content -->
<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
        </div>

        @include('includes/notifications')

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>New Line</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        {!! Form::open(array('route' => 'lines.store','class' => 'form-horizontal form-label-left')) !!}


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Line Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('line_name', null, ['required' => 'required', 'class' => 'form-control col-md-7 col-xs-12']) !!}
                                </div>
                            </div>

                           
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <a class="btn btn-primary" href="{{ route('lines.index')}}">Cancel</a>
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

@push('scripts')
@endpush