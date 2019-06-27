@extends('web._masters.main')

@section('content')

        <header class="home-header">
	    		<img src="{{asset('resources/assets/web/images/header.png')}}" class="img-responsive" alt="background-img">
	    </header>
       

        <section class="about padding-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('resources/assets/web/images/about.png')}}" class="img-responsive">
                    </div>
                    <div class="col-md-8">
                        <div class="desc">
                           <p class="wow bounceInUp" data-wow-duration="1s">
                               محمود عبدالشافي، مطور عقاري ومقدم برامج، يُعد واحد من أشهر المطوريين العقاريين في مصر وصاحب مبادرة بيتك بإيدك حيث حققت نجاح كبير في مجال العقارات، تخرج من كلية حقوق عام 2008 وعمل بالمحاماة ثم قرر ان يكون لديه مشورعه الخاص وسعى كثيراً لان يكون له بصمة في مجال ريادة الأعمال.
                               "من رحم المعاناة يولد النجاح، ومن وجع الألم يولد الأمل، ومن باطن الغيوم السوداء ينشق النور" هي مقولة
                                طبقها محمود عبدالشافي عندما أراد ان يكون له شقة وواجه العديد من العقبات وجاءت له فكرة شقتك بسعر التكلفة من خلال معاناتة لذلك يرى محمود ان من حق كل مواطن أن يكون لديه عقار "بسعر التكلفة" و وأن هذا العقار قد يصبح مشروعاً يعود عليه بالنفع، وأن استغلال السماسرة وتجار العقارات هو أحد الأسباب الرئيسية فى تضاعف أسعار العقارات.
                               وعمل كمقدم برامج في برنامج أصول اللعبة لتوعية الناس حول سوق العقارات من حيث العوائد المادية والأضرار المحتملة والأخطاء الشائعة لتجنب عمليات السماسرة والنصب.

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
                                                <a href="{{$project->video}}}" class="pull-right" target="_blank">
                                                    <span class="icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
                                                    <span class="icon-work">فيديو </span>
                                                </a>
                                                <a href="{{$project->site}}" target="_blank" class="pull-left">
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
                                            <a href="{{$project->video}}" class="pull-right" target="_blank">
                                                <span class="icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
                                                <span class="icon-work">فيديو </span>
                                            </a>
                                            <a href="{{$project->site}}" target="_blank"  class="pull-left">
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
                            <h2>بالفيديو فكرة مبادرة بيتك بأيدك لتوفير الشقق بسعر التكلفة</h2>
                            <div class="text-center">
                                <a href="{{$data['pref']->youtube}}" class="btn" >
                                    <span class="icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
                                    <span class="icon-work">شاهد الفيديوهات </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/zqFg6f-9UJE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </section>
        
<!--        our article-->
        <section class="article padding-sec">
            <div class="container">
                <h2 class="head-sec text-center">أحدث المقالات</h2>
                <span class="after-head"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                
                <div class="row">
                    @foreach( $blogs as $blog)
                    <div class="col-sm-4  col-xs-8 col-xs-offset-2 col-sm-offset-0">
                        <div class="item">
                            <a href="{{url('blog/'.$blog->id)}}"><img src="{{$blog->img}}" class="img-responsive" alt="article"></a>
                            <div class="content">


                                <h3 class="title"><a href="{{url('blog/'.$blog->id)}}">{{$blog->ar_title}}</a></h3>
                                <p class="abbrav"> {{ strip_tags(substr( $blog->description , 0 , 240 )) }} </p>
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
                <h2 class="head-sec text-center">أحدث الأخبار</h2>
                <span class="after-head"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                
                <div class="row">
                    @foreach($newss as $news)
                    <div class="col-sm-4  col-xs-8 col-xs-offset-2 col-sm-offset-0">
                        <div class="item">
                            <a href="{{url('news/'.$news->id)}}"><img src="{{$news->img}}" class="img-responsive" alt="article"></a>
                            <div class="content">
                                <h3 class="title"><a href="{{url('news/'.$news->id)}}">{{$news->ar_title}} </a></h3>
                                <p class="abbrav">  {{ strip_tags(substr( $news->description , 0 , 240 ) ) }}  </p>
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
                          
                           نسعي الي الإحسان في العقارات
                            <span class="qoat"><i class="fa fa-quote-left fa-2x" aria-hidden="true"></i></span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

    @endsection