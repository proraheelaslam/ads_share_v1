<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{url('css/reset.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{url('css/style.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{url('css/grid.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
       
    <script src="{{url('js/jquery-1.6.3.min.js')}}" type="text/javascript"></script>
    <script src="{{url('js/cufon-yui.js')}}" type="text/javascript"></script>
    <script src="{{url('js/cufon-replace.js')}}" type="text/javascript"></script>
    <script src="{{url('js/NewsGoth_400.font.js')}}" type="text/javascript"></script>
    <script src="{{url('js/NewsGoth_700.font.js')}}" type="text/javascript"></script>
    <script src="{{url('js/NewsGoth_Lt_BT_italic_400.font.js')}}" type="text/javascript"></script>
    <script src="{{url('js/Vegur_400.font.js')}}" type="text/javascript"></script> 
    <script src="{{url('js/FF-cash.js')}}" type="text/javascript"></script>
    <script src="{{url('js/jquery.featureCarousel.js')}}" type="text/javascript"></script> 

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
    <script type="text/javascript">
      $(document).ready(function() {
        $("#carousel").featureCarousel({
            autoPlay:7000,
            trackerIndividual:false,
            trackerSummation:false,
            topPadding:50,
            smallFeatureWidth:.9,
            smallFeatureHeight:.9,
            sidePadding:0,
            smallFeatureOffset:0
        });
      });
    </script>
    <!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>
<body id="page1">
    <div class="extra">
        <!--==============================header=================================-->
        <header>
            <div class="row-top">
                <div class="main">
                    <div class="wrapper">
                        <h1><a href="index.html">Advertising Site</a></h1>
                        <form id="search-form" method="post" enctype="multipart/form-data">
                            
                        <fieldset>  
                            <div class="search-field">

                                <input name="search" type="text" value="Search..." onBlur="if(this.value=='') this.value='Search...'" onFocus="if(this.value =='Search...' ) this.value=''" />
                                
                                <a class="search-button" href="#" onClick="document.getElementById('search-form').submit()"></a>    
                            </div>  

                        </fieldset>
                        

                        @if (Auth::guest())
                        <!-- <li><a href="{{ url('/login') }}">Login</a></li> -->
                        <!-- <li><a href="{{ url('/register') }}">Register</a></li> -->
                        <a href="{{ url('/login') }}"> <button type="button" class="btn btn-primary" id = "btn-login">Login</button></a> 
                        <a href="{{ url('/register') }}"><button type="button" class="btn btn-primary" id="btn-sign-up">Signup</button></a>
                    
                    @endif


                    </form>
                    </div>
                </div>
            </div>
            <div class="menu-row">
                <div class="menu-bg">
                    <div class="main">
                        <nav class="indent-left">
                            <ul class="menu wrapper">
                                <li class="active"><a href="{{url('/ads_list')}}">Advertising</a></li>
                                <li><a href="option.html">option</a></li>
                                <li><a href="Test3.html">Test3</a></li>
                                @if (!Auth::guest())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                        @endif
                                <!-- <li><a href="projects.html">our projects</a></li>
                                <li><a href="contact.html">Contact Us</a></li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row-bot">
                <div class="center-shadow">
                    <div class="carousel-container">
                      <div id="carousel">
                        <div class="carousel-feature">
                          <a href="#"><img class="carousel-image" alt="" src="images/gallery-img1.png"></a>                          
                        </div>
                        <div class="carousel-feature">
                          <a href="#"><img class="carousel-image" alt="" src="images/gallery-img3.png"></a>
                        </div>
                        <div class="carousel-feature">
                          <a href="#"><img class="carousel-image" alt="" src="images/gallery-img2.png"></a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!--==============================content================================-->
        <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. December10, 2011!</div>
            <div class="content-bg">
                <div class="main">
                    <div class="container_12">
                        <div class="wrapper">
                            <article class="grid_12">
                            	<!-- <h3>Our Latest Ads</h3> -->
                                <div class="wrapper p3">
                                	<article class="grid_4 alpha">
                                    	<h4 class="p2">Advertisement 1</h4>
                                        <p>Agency Network: Publicis</p>
                                        <p>Published/Aired: April 2011</p>
                                        <p>Posted: June 09, 2011</p>
                                        <hr>
                                        <!-- <a><i class="fa fa-facebook-square" style="font-size:48px;color:red"></i></a> -->
                                        <a class="fb-share" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.manojyadav.co.in" target="_blank">
                                        Share on Facebook
                                        </a>
                                        <i class="fa fa-facebook-square" style="font-size:36px"></i>
                                        <!-- <i class="fa fa-google-plus" style="font-size:36px"></i> -->
                                        <figure><a href="#"><img class="img-border" src="images/care_1.jpg" alt="" width="300px" height="400px" alt="Carrefour Print Ad -  Nine Inch Nails" title="Advertisement by Publicis, Belgium" / /></a></figure>
                                        
                                        <p> <span class="glyphicon glyphicon-heart"></span>40</p>
                                        <!-- <div class="box">
                                        	<div class="padding">
                                            	<a href="#">Read more</a>
                                            </div>
                                        </div> -->
                                    </article>
                                    
                                </div>
                                <!-- <div class="wrapper">
                                	
                                    
                                    
                                </div> -->
                                

                            </article>
                        </div>
                    </div>
                </div>
                <div class="block"></div>
            </div>
        </section>
    </div>
	
	
</body>
</html>

