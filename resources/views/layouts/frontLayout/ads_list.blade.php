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
                    	<h1><a href="{{url('/ads_list')}}">Advertising Site</a></h1>

                        <form id="search-form" method="post" enctype="multipart/form-data">
                        	
                        <fieldset>	
                            <div class="search-field">

                                <input name="search" type="text" value="Search..." onBlur="if(this.value=='') this.value='Search...'" onFocus="if(this.value =='Search...' ) this.value=''" />
                                
                                <a class="search-button" href="#" onClick="document.getElementById('search-form').submit()"></a>	
                            </div>	

                        </fieldset>
                         <!-- <li><a href="{{ url('/login') }}">Login</a></li> -->
                        <!-- <li><a href="{{ url('/register') }}">Register</a></li> -->
                       
                          <a href="{{ url('/login') }}"> <button type="button" class="btn btn-primary" id = "btn-login">Login</button></a> 
            					<a href="{{ url('/register') }}"><button type="button" class="btn btn-primary" id="btn-sign-up">Signup</button></a>

                    </form>
                    
                    </div>

                </div>
            </div>
            <div class="menu-row">
            	<div class="menu-bg">
                    <div class="main">
                        <nav class="indent-left">
                            <ul class="menu wrapper">
                                <li class="active"><a href="{{url('ads_list')}}">Advertising</a></li>
                                <li><a href="option.html">option</a></li>
                                <li><a href="Test3.html">Test3</a></li>
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
                            	<h3>Our Latest Ads</h3>
                                <div class="wrapper p3">
                                	<article class="grid_4 alpha">
                                    	<h4 class="p2">Advertisement 1</h4>
                                        
                                        <figure><a href="detail.html"><img class="img-border" src="images/care_1.jpg" alt="" width="200px" height="150px" alt="Carrefour Print Ad -  Nine Inch Nails" title="Advertisement by Publicis, Belgium" / /></a></figure>
                                        <a href="">ABC</a><br>
                                        <a href="">CDE</a><br>
                                        <h6>Agency Network    Public</h6>
                                        <a href="{{url('ads_detail')}}">View Dtails</a>
                                        <p> <span class="glyphicon glyphicon-heart"></span>40</p>
                                        <!-- <div class="box">
                                        	<div class="padding">
                                            	<a href="#">Read more</a>
                                            </div>
                                        </div> -->
                                    </article>
                                    <article class="grid_4">
                                    	<div class="indent-left4">
                                            <h4 class="p2">Advertisement 2</h4>
                                            <figure><a href="#"><img class="img-border" src="images/care_1.jpg" alt="" width="200px" height="150px" alt="Carrefour Print Ad -  Nine Inch Nails" title="Advertisement by Publicis, Belgium" / /></a></figure>
                                        <a href="">ABC</a><br>
                                        <a href="">CDE</a><br>
                                        <p>Agency Network    Public</p>
                                        <a href="{{url('ads_detail')}}">View Dtails</a>
                                        <p> <span class="glyphicon glyphicon-heart"></span>40</p>
                                        </div>
                                    </article>
                                    <article class="grid_4 omega">
                                    	<div class="indent-left3">
                                            <h4 class="p2">Advertisement 3</h4>
                                            <figure><a href="#"><img class="img-border" src="images/care_1.jpg" alt="" width="200px" height="150px" alt="Carrefour Print Ad -  Nine Inch Nails" title="Advertisement by Publicis, Belgium" / /></a></figure>
                                        <a href="">ABC</a><br>
                                        <a href="">CDE</a><br>
                                        <p>Agency Network    Public</p>
                                        <a href="{{url('ads_detail')}}">View Dtails</a>
                                        <p> <span class="glyphicon glyphicon-heart"></span>40</p>
                                            <!-- <div class="box">
                                                <div class="padding">
                                                    <a href="#">Read more</a>
                                                </div>
                                            </div> -->
                                        </div>
                                    </article>
                                </div>
                                <div class="wrapper">
                                	<article class="grid_4 alpha">
                                    	<h4 class="p2">Advertisement 4</h4>
                                        
                                        <figure><a href="#"><img class="img-border" src="images/care_1.jpg" alt="" width="200px" height="150px" alt="Carrefour Print Ad -  Nine Inch Nails" title="Advertisement by Publicis, Belgium" / /></a></figure>
                                        <a href="">ABC</a><br>
                                        <a href="">CDE</a><br>
                                        <p>Agency Network    Public</p>
                                        <a href="{{url('ads_detail')}}">View Dtails</a>
                                        <p> <span class="glyphicon glyphicon-heart"></span>40</p>
                                    </article>
                                    <article class="grid_4">
                                    	<div class="indent-left4">
                                            <h4 class="p2">Advertisement 5</h4>
                                            
                                            <figure><a href="#"><img class="img-border" src="images/care_1.jpg" alt="" width="200px" height="150px" alt="Carrefour Print Ad -  Nine Inch Nails" title="Advertisement by Publicis, Belgium" / /></a></figure>
                                        <a href="">ABC</a><br>
                                        <a href="">CDE</a><br>
                                        <p>Agency Network    Public</p>
                                        <a href="{{url('ads_detail')}}">View Dtails</a>
                                        <p> <span class="glyphicon glyphicon-heart"></span>40</p>
                                        </div>
                                    </article>
                                    <article class="grid_4 omega">
                                    	<div class="indent-left3">
                                            <h4 class="p2">Advertisement 6</h4>
                                            <figure><a href="#"><img class="img-border" src="images/care_1.jpg" alt="" width="200px" height="150px" alt="Carrefour Print Ad -  Nine Inch Nails" title="Advertisement by Publicis, Belgium" / /></a></figure>
                                        <a href="">ABC</a><br>
                                        <a href="">CDE</a><br>
                                        <p>Agency Network    Public</p>
                                        <a href="{{url('ads_detail')}}">View Dtails</a>
                                        <p> <span class="glyphicon glyphicon-heart"></span>40</p>
                                            
                                        </div>
                                    </article>
                                </div>
								



                                	<div class="wrapper">
                                	<article class="grid_4 alpha">
                                    	<h4 class="p2">Advertisement 4</h4>
                                        
                                        <figure><a href="#"><img class="img-border" src="images/care_1.jpg" alt="" width="200px" height="150px" alt="Carrefour Print Ad -  Nine Inch Nails" title="Advertisement by Publicis, Belgium" / /></a></figure>
                                        <a href="">ABC</a><br>
                                        <a href="">CDE</a><br>
                                        <p>Agency Network    Public</p>
                                        <a href="{{url('ads_detail')}}">View Dtails</a>
                                        <p> <span class="glyphicon glyphicon-heart"></span>40</p>
                                    </article>
                                    <article class="grid_4">
                                    	<div class="indent-left4">
                                            <h4 class="p2">Advertisement 5</h4>
                                            
                                            <figure><a href="#"><img class="img-border" src="images/care_1.jpg" alt="" width="200px" height="150px" alt="Carrefour Print Ad -  Nine Inch Nails" title="Advertisement by Publicis, Belgium" / /></a></figure>
                                        <a href="">ABC</a><br>
                                        <a href="">CDE</a><br>
                                        <p>Agency Network    Public</p>
                                        <a href="{{url('ads_detail')}}">View Dtails</a>
                                        <p> <span class="glyphicon glyphicon-heart"></span>40</p>
                                        </div>
                                    </article>
                                    <article class="grid_4 omega">
                                    	<div class="indent-left3">
                                            <h4 class="p2">Advertisement 6</h4>
                                            <figure><a href="#"><img class="img-border" src="images/care_1.jpg" alt="" width="200px" height="150px" alt="Carrefour Print Ad -  Nine Inch Nails" title="Advertisement by Publicis, Belgium" / /></a></figure>
                                        <a href="">ABC</a><br>
                                        <a href="">CDE</a><br>
                                        <p>Agency Network    Public</p>
                                        <a href="{{url('ads_detail')}}">View Dtails</a>
                                        <p> <span class="glyphicon glyphicon-heart"></span>40</p>
                                            <!-- <figure><a href="#"><img class="img-border" src="images/page4-img6.jpg" alt="" /></a></figure> -->
                                            <!-- <div class="box">
                                                <div class="padding">
                                                    <a href="#">Read more</a>
                                                </div>
                                            </div> -->
                                        </div>
                                    </article>
                                </div>
                                



                            </article>
                        </div>
                    </div>
                </div>
                <div class="block"></div>
            </div>
        </section>
    </div>