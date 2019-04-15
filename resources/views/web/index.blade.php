<! DOCTYPE html>
<html>
@include('web._masters.header')
@yield('header')
    <body>
        
        <!-- navbar -->
        @include('web._masters.nav')

        <header>
            <!--
            #################################
                - THEMEPUNCH BANNER -
            #################################
            -->
            <div class="bannercontainer">
                <div class="banner">
                    <ul>
                        <!-- THE BOXSLIDE EFFECT EXAMPLES  WITH LINK ON THE MAIN SLIDE EXAMPLE -->
                        <!--                        first slide-->
                        <li data-transition="random-premium" data-slotamount="7">
                            <img src="{{asset('resources/assets/web/images/head-first.png')}}"
                                 data-bgrepeat="no-repeat"
                                 data-bgfit="cover"
                                 data-bgposition="center center"
                            >

                            <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                                 data-x="0"
                                 data-y="210"
                                 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="600"
                                 data-start="1500"
                                 data-easing="Power3.easeInOut"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 8;"><img src="{{asset('resources/assets/web/images/typo.png')}}" alt="" >
                            </div>

                        </li>

                        <!--                        second slide-->
                        <li data-transition="random-premium" data-slotamount="7">
                            <img src="{{asset('resources/assets/web/images/Untitled-3.png')}}"
                                 data-bgrepeat="no-repeat"
                                 data-bgfit="cover"
                                 data-bgposition="center center">

                            <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                                 data-x="right"
                                 data-y="100"
                                 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="600"
                                 data-start="1000"
                                 data-easing="Power3.easeInOut"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 8;"><img src="{{asset('resources/assets/web/images/Untitled-4.png')}}" alt="" >
                            </div>

                            <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                                 data-x="700"
                                 data-y="100"
                                 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="600"
                                 data-start="2000"
                                 data-easing="Power3.easeInOut"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 8;"><img src="{{asset('resources/assets/web/images/Untitled-5.png')}}" alt="" >
                            </div>

                            <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                                 data-x="right"
                                 data-y="350"
                                 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="600"
                                 data-start="3000"
                                 data-easing="Power3.easeInOut"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 8;"><img src="{{asset('resources/assets/web/images/Untitled-5.png')}}" alt="" >
                            </div>

                            <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                                 data-x="700"
                                 data-y="350"
                                 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="600"
                                 data-start="4000"
                                 data-easing="Power3.easeInOut"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 8;"><img src="{{asset('resources/assets/web/images/Untitled-7.png')}}" alt="" >
                            </div>

                        </li>
                        <!--                        third slide-->
                        <li data-transition="random-premium" data-slotamount="7">
                            <img src="{{asset('resources/assets/web/images/video-head.png')}}"
                                 data-bgrepeat="no-repeat"
                                 data-bgfit="cover"
                                 data-bgposition="center center">

                            <div class="tp-caption sft customout"
                                 data-x="center"
                                 data-hoffset="134"
                                 data-y="200"
                                 data-voffset="-6"
                                 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="600"
                                 data-start="1000"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeOut"
                                 data-autoplay="true"
                                 data-autoplayonlyfirsttime="false"
                                 data-nextslideatend="true"
                            >
                                <iframe src='https://www.youtube.com/embed/zqFg6f-9UJE' width='640' height='360'
                                        style='width:640px;height:360px;'>
                                </iframe>

                            </div>
                        </li>
                    </ul>
                </div>
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

        @include('web._masters.footer')
        @yield('header')

    </body>
</html>