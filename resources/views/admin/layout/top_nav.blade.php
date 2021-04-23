<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">

                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                       id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img
                            src="{{ !empty(Auth::user()->image)?asset(Auth::user()->image):asset('assets/admin/images/img.png')}}"
                            alt="">{{Auth::user()->first_name." ".Auth::user()->last_name}}
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('admin/user/edit/'.Auth::user()->id)}}">
                            {{auth()->user()->role_id===5?"Company Profile":"My Profile"}}</a>

                        @if(in_array('updateSetting',\Request::get('permission')))
                            <a class="dropdown-item" href="javascript:void(0)">Settings</a>
                        @endif
                        <a class="dropdown-item" href="javascript:void(0)"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i
                                class="fa fa-sign-out pull-right"></i> Log Out</a>
                        <form id="logout-form" action="{{route('logout')}}" method="post"
                              style="display: none">@csrf</form>
                    </div>
                </li>
                @if(auth()->user()->role_id!==1)
                    <li id="google_translate_element"></li>
                @endif


            </ul>
        </nav>
    </div>
</div>
