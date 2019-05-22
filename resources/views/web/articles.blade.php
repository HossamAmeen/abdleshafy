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
        
        <style>
            .bannercontainer {
                width:100%;
                position:relative;
                padding:0;
            }

            .banner{
                width:100%;
                position:relative;
            }
        </style>
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

<header>
           <img src="{{asset('resources/assets/web/images/general.png')}}" class="img-responsive page-head">
        </header>
        
        <section class="articles-sec padding-sec">    
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="popular-head"> الاكتر مشاهده </h3>
                        @foreach($blogsMostWatcheds as $blogsMostWatched )
                        <div class="row popular">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-5 col-sm-6">
                                        <img src="{{asset($blogsMostWatched->img)}}" class="img-responsive" alt="article">
                                    </div>
                                    <div class="col-md-7 col-sm-6">
                                        <p class="description"><a href="{{url('show_blog/'.$blogsMostWatched->id)}}">{{$blogsMostWatched->ar_title}}</a></p>
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
                        <div class="row">
                            @foreach($blogs as $blog)
                            <div class="col-sm-6">
                                <div class="article">
                                    <a href="#">
                                        <img src="{{asset($blog->img)}}" class="img-responsive">
                                    </a>
                                    <div class="content">
                                        <a href="{{url('show_blog/'.$blog->id)}}"><h3>{{$blog->ar_title}}</h3></a>
                                        <div class="details">
                                            <span class="author">{{$blog->owner}}</span>
                                            <span class="date">{{$blog->date}}</span>
                                        </div>
                                        <p><?php echo substr($blog->description , 0 , 100) ?></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="pagi text-center">

                            {{ $blogs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--        real estate image-->
        <section>
            <img src="{{asset('resources/assets/web/images/before-footer.png')}}" class="img-responsive" alt="real estate background">
        </section>
        <footer class="">
            <div class="footer">
                <div class="container text-center">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('resources/assets/web/images/logo.png')}}" class="img-responsive" alt="logo">
                        <ul class="icons list-unstyled list-inline">

                          <a href="{{$data['pref']->youtube}}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                               <a href="{{$data['pref']->instgram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                               <a href="{{$data['pref']->instgram}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                               <a href="{{$data['pref']->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
        </footer>
        <section class="copywrite">
            <div class="container text-center">
                <img src="{{asset('resources/assets/web/images/zedy-logo.png')}}" alt="logo" class="logo">
                <span>powered by </span>
                
            </div>
        </section>
        
        <script src="{{asset('resources/assets/web/js/jquery-2.2.4.min.js')}}"></script>
        <script src="{{asset('resources/assets/web/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('resources/assets/web/js/script.js')}}"></script>
    </body>
</html>