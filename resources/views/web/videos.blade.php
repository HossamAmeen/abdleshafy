@extends('web._masters.main')

@section('content')
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
  @endsection