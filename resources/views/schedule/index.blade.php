@extends('layouts.layout')

@push('stylesheets')
@endpush

@section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">

        <div class="col-md-12 col-sm-6 col-xs-12">
            <a class="btn btn-success" href="{{ route('schedules.create')}}"><i class="fa fa-upload"></i> Upload Schedules</a>
            <div class="x_panel">
              <div class="x_title">
                <h2>Schedule List</h2>
                
                <div class="clearfix"></div>

              </div>
              <div class="x_content">

                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Line Description</th>
                      <th>Shift</th>
                      <th>Target</th>
                      <th>Run Date</th>
                      <th>SKU</th>
                      <th>SKU Description</th>
                      <th>Status</th>
                      <th>Date Uploaded</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($schedules->count() > 0)
                    @foreach($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->line->line_name }}</td>
                        <td>{{ $schedule->shift->shift }}</td>
                        <td>{{ $schedule->target }}</td>
                        <td>{{ $schedule->run_date }}</td>
                        <td>{{ $schedule->sku }}</td>
                        <td>{{ $schedule->description }}</td>
                        <td>{{ $schedule->status->status }}</td>
                        <td>{{ $schedule->created_at }}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="8">No record found</td>
                    </tr>
                    @endif
                    
                  </tbody>
                </table>

              </div>
            </div>
        </div>
    </div>
    
            
</div>
<!-- /page content -->
@endsection