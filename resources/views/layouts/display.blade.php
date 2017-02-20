<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentellela Alela! | </title>

    <!-- Bootstrap -->
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{ asset("css/custom.min.css") }}" rel="stylesheet">

        <link href="{{ asset("css/style.css") }}" rel="stylesheet">
        <link href="{{ asset("vendors/flipclock/flipclock.css") }}" rel="stylesheet">
        <link href="{{ asset("vendors/animatedprogress/jquery.stepProgressBar.css") }}" rel="stylesheet">
        <style type="text/css">
          .gauge{
            
                width: 180px;
                height: 180px;
          }
          .w_55 {
            width: 75%
          }
          .counter{
            margin-top: -10px;
            margin-bottom: -5px;
            zoom: 1.4;
            -moz-transform: scale(1.4);
            }
            .progress {height: 40px; margin-top: 10px; margin-right: 10px;} // we increased it so the text is visible or change font size
            .progress .sr-only { position: relative; }
        </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- page content -->
        <div>
          <div class="">
           <!--  <div class="page-title">
              <div class="title_left">
                <h3>Plain Page</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="row">
        <div class="col-lg-2">
            <img src="/images/FrieslandCampina.png" class="left-logo">
        </div>

        <div class="col-lg-4">
            <h2 id="plant_name">PLANT NAME</h2>
        </div>

        <div class="col-lg-4">
            <!-- <div id='date-part' class="text-center"></div> -->
            <div id='time-part' class="text-center"></div>
        </div>

        <div class="col-lg-2">
            <img src="/images/Alaska_milk_logo_2016.png" class="pull-right right-logo">
        </div>
    </div>

            <div class="clearfix"></div>
            <hr>
            @yield('main_container')
          </div>
        </div>

      </div>
    </div>

     <!-- jQuery -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset("vendors/bootstrap/dist/js/bootstrap.min.js") }}"></script>

         <script src="{{ asset("js/moment.js") }}"></script>

    <script src="{{ asset("vendors/justgage-1.2.2/raphael-2.1.4.min.js") }}"></script>
    <script src="{{ asset("vendors/justgage-1.2.2/justgage.js") }}"></script>
    <script src="{{ asset("vendors/flipclock/flipclock.min.js") }}"></script>
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script src="{{ asset("vendors/animatedprogress/jquery.stepProgressBar.js") }}"></script>

    @stack('scripts')

    
  </body>
</html>
