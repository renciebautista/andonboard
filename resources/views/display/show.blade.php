@extends('layouts.display')

@push('stylesheets')
@endpush

@section('main_container')
    <div class="row">
        <div class="col-lg-4">
            <img src="/images/FrieslandCampina.png" class="left-logo">
        </div>

        <div class="col-lg-4">
            <div id='date-part' class="text-center"></div>
            <div id='time-part' class="text-center"></div>
        </div>

        <div class="col-lg-4">
            <img src="/images/Alaska_milk_logo_2016.png" class="pull-right right-logo">
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">{{ $line->line_name }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h1 class="text-center">TARGET</h1>
            <h2 class="text-center">2500</h2>
        </div>

        <div class="col-lg-6">
            <h1 class="text-center">ACTUAL</h1>
            <h2 class="text-center">2500</h2>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-lg-4">
            <h3 class="text-center">SHIFT 1 ACTUAL</h3>
            <h4 class="text-center">2500</h4>
        </div>

        <div class="col-lg-4">
            <h3 class="text-center">SHIFT 2 ACTUAL</h3>
            <h4 class="text-center">2500</h4>
        </div>

        <div class="col-lg-4">
            <h3 class="text-center">SHIFT 3 ACTUAL</h3>
            <h4 class="text-center">2500</h4>
        </div>
    </div>
@endsection