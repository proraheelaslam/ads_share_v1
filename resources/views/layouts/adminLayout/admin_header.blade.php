<script type="text/javascript" src="{{asset('js/backend_js/datatable/jquery-1.12.3.js')}}"></script>
<!--Confirm_Jquery_Popup-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="{{ url('/admin/home') }}" class="logo">
        <img src="{{asset('images/backend_images/logo.png')}}" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

{{-- <div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="{{asset('images/backend_images/avatar-mini.jpg')}}"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="{{asset('images/backend_images/avatar-mini-2.jpg')}}"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="{{asset('images/backend_images/avatar-mini-3.jpg')}}"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="{{asset('images/backend_images/avatar-mini.jpg')}}"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
--}}
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li> -->
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            @if(Auth::user())
                <img alt="" src="{{asset('images/backend_images/avatar1_small.jpg')}}">
                <span class="username">{{ Auth::user()->name }}</span>
                <b class="caret"></b>
            @else 
                <img alt="" src="{{asset('images/backend_images/user.png')}}">
                <b class="caret"></b>  
            @endif              
                
            </a>
         
            <ul class="dropdown-menu extended logout">
            @if (Auth::guest())
                <li><a href="{{ url('/admin/login') }}">Login</a></li>
                <li><a href="{{ url('/admin/register') }}">Register</a></li>
            @else  
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li>
                <a href="{{ url('/admin/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <i class="fa fa-key"></i> Log Out</a>
                                    </a>  
                                    <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>  
            @endif
            </ul>
        </li>
        <!-- user login dropdown end -->
        <!-- <li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li> -->
    </ul>
    <!--search & user info end-->


<ul style="padding-top:5px;" class="nav pull-right top-menu">
<li class="dropdown">
<a style="padding:5px; font-size:13px;" data-toggle="dropdown" class="dropdown-toggle" href="#">
@php $locale = session()->get('locale'); @endphp
        @switch($locale)
            @case('fr')
            <img src="{{asset('images/backend_images/flags/fr.png')}}" width="30px" height="20x"> French
            @break
            @case('es')
            <img src="{{asset('images/backend_images/flags/es.png')}}" width="30px" height="20x"> Spanish
            @break
            @default
            <img src="{{asset('images/backend_images/flags/us.png')}}" width="30px" height="20x"> English
        @endswitch
</a>

      <!-- Right Side Of Navbar -->
      <ul class="dropdown-menu extended logout">
            <!-- Authentication Links -->
                <li><a class="lang" data-lang="en" href="#"><img src="{{asset('images/backend_images/flags/us.png')}}" width="30px" height="20x"> English</a></li>
                <li><a class="lang" data-lang="fr" href="#"><img src="{{asset('images/backend_images/flags/fr.png')}}" width="30px" height="20x"> French</a></li>
                <li><a class="lang" data-lang="es" href="#"><img src="{{asset('images/backend_images/flags/es.png')}}" width="30px" height="20x"> Spanish</a></li>
                
        </ul>
</li>
</ul>


</div>


</header>


<script type="text/javascript">
// Switch languages
//$( document ).ready(function() {
    $(function(){
    //var currentLanguage = document.documentElement.lang;
    //alert(currentLanguage);
    $('.lang').on('click', function($event) {
        $event.preventDefault();
        var $selectedLang = $(this).data('lang');
        var $baseurl = {!! json_encode(url('/admin/switchLang/')) !!};
        var $base_url  = $baseurl + '/'+ $selectedLang;
        //alert($baseurl);
        $.ajax({
            url: $base_url,
            type: 'GET',
            success: function(response)
            {
                //console.log(response);
                location.href = window.location.href;
            }
        });
    });
});
//});
</script>