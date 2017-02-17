<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HMI</title>

        <!-- Bootstrap -->
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{ asset("css/custom.min.css") }}" rel="stylesheet">

        <link href="{{ asset("css/front.css") }}" rel="stylesheet">

        <link href="{{ asset("vendors/flipclock/flipclock.css") }}" rel="stylesheet">
        <link href="{{ asset("vendors/animatedprogress/jquery.stepProgressBar.css") }}" rel="stylesheet">

        @stack('stylesheets')

        <style type="text/css">

            #chartdiv {
              width : 100%;
              height  : 400px;
            }
            
        </style>

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                @include('includes/sidebar')

                @include('includes/topbar')

                @yield('main_container')

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Gentelella - Bootstrap Admin Template by <a ="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>

        <!-- Moment -->
        <script src="{{ asset("js/moment.js") }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset("vendors/bootstrap/dist/js/bootstrap.min.js") }}"></script>
  
        <!-- Amcharts -->
        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="https://www.amcharts.com/lib/3/serial.js"></script>
        <script src="https://www.amcharts.com/lib/3/amstock.js"></script>
        <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <script src="https://www.amcharts.com/lib/3/themes/none.js"></script>


        <!-- jquery.inputmask -->
        <script src="{{ asset("vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js") }} "></script>


        <!-- Custom Theme Scripts -->
        <script src="{{ asset("js/gentelella.min.js") }}"></script>
   
        <script src="{{ asset("vendors/justgage-1.2.2/raphael-2.1.4.min.js") }}"></script>
        <script src="{{ asset("vendors/justgage-1.2.2/justgage.js") }}"></script>

        <script src="{{ asset("vendors/flipclock/flipclock.min.js") }}"></script>
        <script src="{{ asset("vendors/animatedprogress/jquery.stepProgressBar.js") }}"></script>

        <style type="text/css">
        #g1 {

                width: 350px;
                height: 340px;
            }
        </style>
        

        <script>
          var hostname = 'http://' + $(location).attr('host');
          function getSelectedValues(select) {
            var foo = []; 
            select.each(function(i, selected){ 
              foo[i] = $(selected).val(); 
            });
            return foo;
          }

          $(document).ready(function() {
            @stack('inline-scripts')
          });

    

          
        </script>

        @stack('scripts')

        <script>
      
      </script>

      
    </body>
</html>