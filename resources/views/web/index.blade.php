<! DOCTYPE html>
<html>
{{-- 
{{asset('resources/assets/web/ --}}
<head>
        <title>abdel shafy</title>
         <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        
        <link rel="stylesheet" href="{{asset('resources/assets/web/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/web/css/bootstrap-rtl.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/web/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/web/css/imagehover.min.css')}}">
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
           <!--        header-->
      
            <!--
            #################################
                - THEMEPUNCH BANNER -
            #################################
            -->
            <div class="banner1">

                   <img src="{{asset('resources/assets/web/images/index.jpg')}}"  >
                     
 
            </div>
        </header> 
      

        <section class="about padding-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('resources/assets/web/images/about.png')}}" class="img-responsive">
                    </div>
                    <div class="col-md-8">
                        <div class="desc">
                           <p> 
                                تخرج فى كلية الحقوق عام 2008 وعمل بالمحاماة ، قرر أن يكون لديه مشروعه الخاص ، فإنطلق فى مجال ريادة الاعمال وأسس شركة للاستثمار للتسويق العقارى. صاحب مبادرة تنمويه لخدمة المجتمع هى مبادرة "بيتك بإيدك" وصاحب فكرة مشروع "Golden Assuit". يرى أن من حق كل مواطن أن يكون لديه عقار "بسعر التكلفة" وأن هذا العقار قد يصبح مشروعاً يعود عليه بالنفع، وأن استغلال السماسرة وتجار العقارات هو أحد الأسباب الرئيسية فى تضاعف أسعار العقارات
                            </p>
                        </div>    
                    </div>
                </div>
            </div>
        </section>
        
        
<!--        our projects -->
        <section class="projects">
            <div class="container">
                <h2 class="head-sec text-center">مشروعاتنا</h2>
                 <span class="after-head"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>
                <?php $i=0 ?>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                            @foreach($projects as $project)
                           @if($i%2==0)
                            <?php $i=1; ?>
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-0 col-xs-offset-2 col-xs-8">
                                        <div class="img-sec">
                                            <img src="{{$project->img}}" class="img-responsive">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-sm-offset-0 col-xs-offset-2 col-xs-8">
                                        <div class="content text-center">
                                            <h2>{{$project->ar_title}} </h2>
                                            <p>{{$project->description}}</p>
                                            <div class="icons">
                                                <a href="{{$project->video}}}" class="pull-right">
                                                    <span class="icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
                                                    <span class="icon-work">فيديو </span>
                                                </a>
                                                <a href="{{$project->site}}" class="pull-left">
                                                    <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                                    <span class="icon-work">الموقع </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                            <?php  $i=0; ?>
                                <div class="row">

                                <div class="col-sm-6 col-sm-push-6 col-sm-offset-0 col-xs-offset-2 col-xs-8">
                                    <div class="img-sec">
                                        <img src="{{$project->img}}" class="img-responsive">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-sm-pull-6 col-sm-offset-0 col-xs-offset-2 col-xs-8">
                                    <div class="content text-center">
                                        <h2>{{$project->ar_title}} </h2>
                                        <p>{{$project->description}}</p>
                                        <div class="icons">
                                            <a href="{{$project->video}}" class="pull-right">
                                                <span class="icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
                                                <span class="icon-work">فيديو </span>
                                            </a>
                                            <a href="{{$project->site}}" class="pull-left">
                                                <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                                <span class="icon-work">الموقع </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach


                    </div>
                </div>
                
            </div>
        </section>
            
        <!--        videos sections-->
        <section class="videos padding-sec">
            <div class="container">
                <div class="row item">
                    <div class="col-md-4">
                        <div class="title">
                            <h2>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل </h2>
                            <div class="text-center">
                                <a src="#" class="btn" >
                                    <span class="icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
                                    <span class="icon-work">شاهد الفيديوهات </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="video">
                            <img src="{{asset('resources/assets/web/images/video1.PNG')}}" class="img-responsive" alt="video-img">
                            <div class="icon">
                                <a class="symbol"><i class="fa fa-3x fa-youtube-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
<!--        our article-->
        <section class="article padding-sec">
            <div class="container">
                <h2 class="head-sec text-center">احدث المقالات</h2>
                <span class="after-head"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                
                <div class="row">
                    @foreach( $blogs as $blog)
                    <div class="col-sm-4  col-xs-8 col-xs-offset-2 col-sm-offset-0">
                        <div class="item">
                            <img src="{{$blog->img}}" class="img-responsive" alt="article">
                            <div class="content">


                                <h3 class="title"><a href="{{url('show_blog/'.$blog->id)}}">{{$blog->ar_title}}</a></h3>
                                <p class="abbrav">  <?php echo substr( $blog->description , 0 , 240 ) ?>  </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        
        
<!--        our news-->
        <section class="news">
            <div class="container">
                <h2 class="head-sec text-center">احدث الاخبار</h2>
                <span class="after-head"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                
                <div class="row">
                    @foreach($newss as $news)
                    <div class="col-sm-4  col-xs-8 col-xs-offset-2 col-sm-offset-0">
                        <div class="item">
                            <img src="{{$news->img}}" class="img-responsive" alt="article">
                            <div class="content">
                                <h3 class="title"><a href="{{url('show_news/'.$blog->id)}}">{{$news->ar_title}} </a></h3>
                                <p class="abbrav">  <?php echo substr( $news->description , 0 , 240 ) ?>  </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        
        <!--        our quate -->
        <section class="qout">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-6"> 
                        <p class="text-center">
                            <span class="qoat"><i class="fa fa-quote-right fa-2x" aria-hidden="true"></i></span>
                            العميل ليتصور طريقه وضع النصوص بالتصاميم سواء  العميل ليتصور طريقه وضع النصوص بالتصاميم سواء
                            العميل ليتصور طريقه وضع النصوص بالتصاميم سواء  العميل ليتصور طريقه وضع النصوص بالتصاميم سواء
                            <span class="qoat"><i class="fa fa-quote-left fa-2x" aria-hidden="true"></i></span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

            <script src="{{asset('resources/assets/web/js/jquery-2.2.4.min.js')}}"></script>
        <script src="{{asset('resources/assets/web/js/bootstrap.min.js')}}"></script>
<!--        our revolution slider-->
        <script src="{{asset('resources/assets/web/js/jquery.themepunch.tools.min.js')}}"></script>
        
        
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