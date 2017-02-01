<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <div >
                <img  class="location_image" src="/images/FrieslandCampina.png" >
            </div>
            
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
          <!-- <div class="profile_pic">
            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
          </div> -->
          
        </div>
        <!-- /menu profile quick info -->
         <div class="clearfix"></div>

        <br />
        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ route('dashboard.index')}}"><i class="fa fa-line-chart"></i> Dashboard</a>
                    </li>
                    @foreach($side_lines as $line)
                    <li><a href="{{ route('dashboard.show', ['slug' => $line->slug ])}}"> <i class="fa fa-cube"></i> {{ $line->line_name }}</a></li>
                    @endforeach
                    
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>