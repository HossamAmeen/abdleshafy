<! DOCTYPE html>
<html>
    <head>
        <title>{{$title}}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">


        <link rel="stylesheet" href="{{asset('resources/assets/web/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/web/css/bootstrap-rtl.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/web/css/font-awesome.min.css')}}">

        <!--        our revolution slider-->
        <link rel="stylesheet" href="{{asset('resources/assets/web/css/settings.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/web/css/extralayers.css')}}">

        <!--        our video popup-->
        <link rel="stylesheet" href="{{asset('resources/assets/web/css/video.popup.css')}}">
        <!--        fonts-->
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">

        <!--        our main style-->
        <link rel="stylesheet" href="{{asset('resources/assets/web/css/style.css')}}">
        
    </head>
    <body>
        
<!--        facebook plugin-->
        <div id="fb-root"></div>
        <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
 <!-- navbar -->
 @include('web._masters.nav')
        
       <header class="single-header">
           <img src="{{asset('resources/assets/web/images/single-background.jpg')}}" class="img-responsive page-head">
        </header>
        
        <section class="articles-sec padding-sec">    
            <div class="container">
                <div class="row">
                    <div class="col-md-3 best-watch">

                        <h3 class="popular-head"> الاكتر مشاهده </h3>
                        @foreach($newsMostWatcheds as $newsMostWatched )
                            <div class="row popular">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-6">
                                            <img src="{{asset($newsMostWatched->img)}}" class="img-responsive" alt="article">
                                        </div>
                                        <div class="col-md-7 col-sm-6">
                                            <p class="description"><a href="{{url('show_blog/'.$newsMostWatched->id)}}">{{$newsMostWatched->ar_title}}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="row">

                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMahmoud.M.abdelshafy%2F&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="single">
				 	<h1 class="head">{{ $news->ar_title }}</h1>
					
					<div class="content-body">
						<img src="{{ asset($news->img) }}" alt="" class="img-responsive">
						<div class="info">
							<span class="pull-right date"><i class="fa fa-calendar"></i>{{ $news->date }}</span>
						</div>
						<div class="body">
							{{ $news->description }}
						</div>
					</div>
				 </div>
                     </div>
                  </div>
                </div>
        </section>
<!--        real estate image-->
        <section>
            <img src="images/before-footer.png" class="img-responsive" alt="real estate background">
        </section>
<footer class="">
    <div class="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="plinks">
                        <h3>مشروعاتنا </h3>
                        <ul class="list-unstyled">
                            @foreach($data['projects'] as $project)
                                <li><a href="{{$project->site}}" target="_blank">{{$project->ar_title}}</a></li>
                            @endforeach
                        </ul>

                    </div>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('resources/assets/web/images/logo.png')}}" class="img-responsive" alt="logo">
                    <ul class="icons list-unstyled list-inline">

                        <a href="{{$data['pref']->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="{{$data['pref']->youtube}}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        <a href="{{$data['pref']->instgram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="{{$data['pref']->instgram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="plinks">
                        <h3> اهم الصفحات </h3>
                        <ul class="list-unstyled">
                            <li> <a href="{{url('/blog')}}">المقالات </a></li>
                            <li> <a href="{{url('news')}}">الاخبار</a> </li>
                            <li> <a href="{{url('video')}}">الفيديوهات </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="copywrite">
    <div class="container text-center">
        <img src="{{asset('resources/assets/web/images/zedy-logo.png')}}" alt="logo" class="logo">
        <span>mahmoud abdle-shafy website powered by </span>
    </div>
</section>

<script src="{{asset('resources/assets/web/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('resources/assets/web/js/bootstrap.min.js')}}"></script>

<script src="{{asset('resources/assets/web/js/video.popup.js')}}"></script>
<script>
    $("#video1, #video2, #video3, #video4").videoPopup();

    $("#video1, #video2, #video3, #video4").videoPopup({
        autoplay: true,
        showControls: true,
        controlsColor: null,
        loopVideo: false,
        showVideoInformations: true,
        width: null
    });

</script>

<script src="{{asset('resources/assets/web/js/script.js')}}"></script>
    </body>
</html>