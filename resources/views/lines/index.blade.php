@extends('layouts.layout')

@push('stylesheets')

@endpush

@section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <!-- <div class="page-title">
        </div> -->
          @include('includes/notifications')

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Company Lists</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div>
                        <a class="btn btn-success" href="{{ route('lines.create')}}">New Line</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Line Name</th>
                                    <th colspan="2" class="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($lines->count() > 0)
                                @foreach($lines as $line)
                                <tr>
                                    <td>{{ $line->line_name }}</td>
                                    <td>
                                        <a class="btn btn-success btn-xs" href="{{ route('lines.edit', $line->id)}}">Edit</a>
                                    </td>
                                    <td>
                                        {!! Form::open(array('route' => array('lines.destroy', $line->id), 'method' => 'DELETE')) !!}
                                            <button type="submit" class="btn btn-danger btn-xs confirm">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="3">No record found</td>
                                </tr>
                                @endif
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection