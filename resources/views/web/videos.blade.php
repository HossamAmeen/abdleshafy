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
        
        
        <section class="videos-page padding-sec">
            <div class="container">    
                <div class="row">
                    @foreach($videos as $video)
                    <div class="col-md-3">
                        <div class="item">
                            <div class="img-sec">
                                <img src="http://img.youtube.com/vi/{{$video->img}}/mqdefault.jpg" class="img-responsive" alt="video-img">
                                <div class="icons">
                                    <a video-url="{{$video->link}}" class="video"><span class="icon"><i class="fa fa-play" aria-hidden="true"></i></span>
                                        <span class="play">play</span></a>
                                </div>
                            </div>
                            <div class="content">
                                <p class="title">{{$video->description}} </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="row">
                    <div class="channel text-center">
                        <a href="{{$data['pref']->youtube}}" class="btn">
                            <span class="icon"><i class="fa fa-youtube-play" aria-hidden="true"></i> </span>
                            <span class="content">قناتنا على اليوتيوب</span>
                        </a>
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
        <script src= "{{asset('resources/assets/web/js/bootstrap.min.js')}}"></script>
        
        <script src= "{{asset('resources/assets/web/js/video.popup.js')}}"></script>
        <script>
            //$("#video1, #video2, #video3, #video4").videoPopup();
            
            $(".video").videoPopup({
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