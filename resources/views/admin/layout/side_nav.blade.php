<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">

            <a href="{{ url('/') }}" class="site_title"><img width="200" src="{{ asset($setting->logo) }}" class="img-fluid" alt="logo"></a>
        </div>
        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img
                    src="{{asset(!empty(Auth::user()->image) ? Auth::user()->image : 'assets/admin/images/boy.png')}}"
                    alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->first_name." ".Auth::user()->last_name}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        <br/>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Dashboard</h3>
                <ul class="nav side-menu">
                    <li><a href="{{ url('/admin')}}"><i class="fa fa-home"></i> Dashboard </a>
                    </li>

                </ul>
            </div>


            @if(in_array('viewBanner',\Request::get('permission')))
                <div class="menu_section">
                    <h3>CMS</h3>
                    <ul class="nav side-menu">
                        <li><a><i class="fa fa-clone"></i> CMS <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                @if(in_array('viewPage',\Request::get('permission')))
                                    <li><a href="{{ route('page') }}">Pages</a>
                                @endif
                                @if(in_array('updateHome',\Request::get('permission')))
                                    <li><a href="{{ route('home.index') }}">Home</a>
                                @endif
                            </ul>
                        </li>

                    </ul>
                </div>
            @endif

            @if (in_array('viewContact',\Request::get('permission')))
                <div class="menu_section">
                    <h3>My Contacts</h3>
                    <ul class="nav side-menu">
                        <li><a><i class="fa fa-phone"></i> Contacts <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                @if(in_array('viewContact',\Request::get('permission')))
                                    <li><a href="javascript:void(0)">Contacts</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            @endif

            @if(in_array('viewRole',\Request::get('permission')) || in_array('viewUser',\Request::get('permission')) || in_array('updateSetting',\Request::get('permission')))
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                        <li><a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                @if(in_array('viewRole',\Request::get('permission')))
                                    <li><a href="{{ route('role') }}">Roles</a></li>
                                @endif
                                @if(in_array('viewUser',\Request::get('permission')))
                                    <li><a href="{{ route('users') }}">Users</a></li>
                                @endif
                                @if(in_array('updateSetting',\Request::get('permission')))
                                    <li><a href="{{ route('setting') }}">Settings</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            @endif

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            @if(in_array('updateSetting',\Request::get('permission')))

                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
            @endif
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="javascript:void(0)"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
