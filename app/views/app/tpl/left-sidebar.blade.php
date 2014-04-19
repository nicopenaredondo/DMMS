<div class="page-head">
    <ul class="page-head-elements">
        <li><a href="#" class="page-navigation-toggle"><span class="fa fa-bars"></span></a></li>
        <li class="search">
            <input type="text" class="form-control" placeholder="Search..."/>
        </li>
    </ul>
    <ul class="page-head-elements pull-right">

        <li><a href="#" class="page-sidebar-toggle"><span class="fa fa-tasks"></span></a></li>
    </ul>
</div>
<div class="page-navigation">

    <div class="page-navigation-info">
        <a href="">
            <img src="{{ asset('assets/img/logohs.png') }}" alt="">
        </a>
    </div>

    <div class="profile">
        <img src="{{ asset('assets/img/avatar.jpg') }}" style="width:40px;"/>
        <div class="profile-info">
            <a href="#" class="profile-title">Howdy, {{ Auth::user()->username }}</a>
            <span class="profile-subtitle">Administrator</span>
            <div class="profile-buttons">
                <div class="btn-group">
                    <a class="but dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation" class="dropdown-header">Profile Menu</li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="#">Statistics</a></li>
                        <li><a href="#">Changelog</a></li>
                        <li><a href="#">Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <ul class="navigation">
        @if(Request::segment(1) == 'dashboard')
        <li class="active">
        @else
        <li>
        @endif
            <a href="{{ URL::route('app.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
        </li>

        @if(Request::segment(1) == 'clients')
        <li class="active">
        @else
        <li>
        @endif
            <a href="{{ URL::route('app.clients.index') }}"><i class="fa fa-briefcase"></i> Clients </a>
        </li>

        @if(Request::segment(1) == 'users')
        <li class="active">
        @else
        <li>
        @endif
            <a href="index-2.html"><i class="fa fa-users"></i> Users </a>
        </li>

        @if(Request::segment(1) == 'reports')
        <li class="active">
        @else
        <li>
        @endif
            <a href="index-2.html"><i class="fa fa-bar-chart-o"></i>Reports</a>
        </li>

        @if(Request::segment(1) == 'websites')
        <li class="active">
        @else
        <li>
        @endif
            <a href="index-2.html"><i class="fa fa-files-o"></i>Websites</a>
        </li>

        @if(Request::segment(1) == 'settings')
        <li class="active">
        @else
        <li>
        @endif
            <a href="index-2.html"><i class="fa fa-cogs"></i>Settings</a>
        </li>
    </ul>
</div>