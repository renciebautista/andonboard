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
    <!-- <hr> -->

    <div class="row" style="border-top: 1px solid #eee;">
        <div class="col-lg-12">
            <h1 class="text-center">{{ $line->line_name }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <h3 class="text-center">ACTUAL</h3>
            <h4 class="text-center">7500</h4>
        </div>

        <div class="col-lg-4">
            <div id="g1" class="gauge "></div>
        </div>

        <div class="col-lg-4">
            <h3 class="text-center">TARGET</h3>
            <h4 class="text-center">9000</h4>
        </div>

        
    </div>
    

    

    <!-- <hr> -->

    <div class="row" style="border-top: 1px solid #eee;">
        <div class="col-lg-4">
            <h3 class="text-center">SHIFT 1</h3>
            <div id="g2" class="gauge "></div>
            <h3 class="text-center">3000 / 3000</h3>

            
        </div>

        <div class="col-lg-4">
            <h3 class="text-center">SHIFT 2</h3>
            <div id="g3" class="gauge "></div>
            <h3 class="text-center">3000 / 3000</h3>

            
        </div>

        <div class="col-lg-4">
            <h3 class="text-center">SHIFT 3</h3>
            <div id="g4" class="gauge "></div>
            <h3 class="text-center">1500 / 3000</h3>
           
            
        </div>
    </div>
@endsection