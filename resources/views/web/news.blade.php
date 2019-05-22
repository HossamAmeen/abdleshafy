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
       <!-- navbar -->
       @include('web._masters.nav')

       <header>
            <img src="{{asset('resources/assets/web/images/general.png')}}" class="img-responsive page-head">
         </header>
        
         <!--        our news-->
         <section class="news-page padding-sec">
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
                         <div class="row main">
                             <div class="col-md-6">
                                 <div class="img-sec">
                                     <img src="{{$firstNews->img}}" class="img-responsive">
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="content">
                           <h2> <a href="{{ url('show_news/'.$firstNews->id) }}">{{$firstNews->ar_title}}</a></h2>
                                     <p class="desc">{{$firstNews->description}}</p>
                                 </div>
                             </div>
                         </div>
                         <div class="row multi-post">
                            @foreach($newss as $news)
                                <div class="col-md-6">
                                    <div class="item">
                                        <img src="{{$news->img}}" class="img-responsive" alt="article">
                                        <div class="content">
                                <h2><a href="{{ url('show_news'.$news->id) }}">{{ $news->ar_title }}</a></h2>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                         </div>


                         <div class="row">
                             <div class="pagi text-center">

                                 {{ $newss->links() }}
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
        <footer class="">
            <div class="footer">
                <div class="container text-center">
                    <div class="row">
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