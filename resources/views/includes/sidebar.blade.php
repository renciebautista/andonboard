<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
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
                    <li>
                        <a href="{{ route('lines.index')}}"><i class="fa fa-cubes"></i> Line Maintenance</a>
                    </li>
                    <li>
                        <a href="{{ route('shifts.index')}}"><i class="fa fa-list-alt"></i> Shift Maintenance</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>