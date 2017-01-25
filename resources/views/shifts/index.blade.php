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
                        <h2>Shift Lists</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div>
                        <a class="btn btn-success" href="{{ route('shifts.create')}}">New Shift</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Shift</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th colspan="2" class="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($shifts->count() > 0)
                                @foreach($shifts as $shift)
                                <tr>
                                    <td>{{ $shift->shift }}</td>
                                    <td>{{ $shift->start }}</td>
                                    <td>{{ $shift->end }}</td>
                                    <td>
                                        <a class="btn btn-success btn-xs" href="{{ route('shifts.edit', $shift->id)}}">Edit</a>
                                    </td>
                                    <td>
                                        {!! Form::open(array('route' => array('shifts.destroy', $shift->id), 'method' => 'DELETE')) !!}
                                            <button type="submit" class="btn btn-danger btn-xs confirm">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5">No record found</td>
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