@extends('layouts.frontLayout.app')

@section('content')

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


                                    <figure><a href="detail.html"><img class="img-border" src="{{asset('frontend_assets/images/care_1.jpg')}} " alt="" width="200px" height="150px" alt="Carrefour Print Ad -  Nine Inch Nails" title="Advertisement by Publicis, Belgium" / /></a></figure>
                                    <a href="">ABC</a><br>
                                    <a href="">CDE</a><br>
                                    <h6>Agency Network    Public</h6>
                                    <a href="{{url('ads_detail')}}">View Dtails</a>
                                    <p> <span class="glyphicon glyphicon-heart"></span>40</p>
                                    <div class="">
                                        <div id="button">sdfdsf</div>
                                        <script>

                                            (function(d, s, id){
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) {return;}
                                                js = d.createElement(s); js.id = id;
                                                js.src = "//connect.facebook.net/en_US/sdk.js";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));
                                        </script>
                                        <!-- Your share button code -->

                                </article>

                            </div>




                        </article>
                    </div>
                </div>
            </div>
            <div class="block"></div>
        </div>
    </section>

    <script>

        window.fbAsyncInit = function () {
            FB.init({
                appId  : '1111691635849690',
                status : true,
                xfbml  : true,
                version: 'v2.1'
            });
            window.facebookShare = function( callback ) {
                var options = ({
                        method : 'share',
                        href   : 'https://developers.facebook.com/docs/'
                    }),
                    status = '';
                FB.ui(options, function( response ){
                    if (response && !response.error_code) {
                        status = 'success';
                        $.event.trigger('fb-share.success');
                    } else {
                        status = 'error';
                        $.event.trigger('fb-share.error');
                    }
                    if(callback && typeof callback === "function") {
                        callback.call(this, status);
                    } else {
                        return response;
                    }
                });
            }
        };
        $('#button').on('click', function( e ) {
            alert("sss");
            e.preventDefault();
            facebookShare(function( response ) {
                // simple function callback
                console.log(response);
            });
        });
        // custom jQuery events
        $(document)
            .on('fb-share.success', function( e ) {
                alert("succeed");
            })
            .on('fb-share.error', function( e ) {
                alert("fail");
            });
    </script>
@endsection