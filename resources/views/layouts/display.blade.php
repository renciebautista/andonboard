<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Display</title>

        <!-- Bootstrap -->
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{ asset("css/display.css") }}" rel="stylesheet">

        @stack('stylesheets')


    </head>

    <body class="nav-sm">
        <div class="container body">
            <div class="main_container">
                @yield('main_container')
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>

        <!-- Moment -->
        <script src="{{ asset("js/moment.js") }}"></script>
  

        @stack('scripts')

        <script type="text/javascript">
            $(document).ready(function() {
                var interval = setInterval(function() {
                    var momentNow = moment();
                    $('#date-part').html(momentNow.format('YYYY MMMM DD') + ' '
                                        + momentNow.format('dddd')
                                         .substring(0,3).toUpperCase());
                    $('#time-part').html(momentNow.format('A hh:mm:ss'));
                }, 100);
                
                $('#stop-interval').on('click', function() {
                    clearInterval(interval);
                });
            });
        </script>
        
    </body>
</html>