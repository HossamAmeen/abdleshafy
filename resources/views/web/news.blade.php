@extends('web._masters.main')

@section('content')
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
                                             <a href="{{url('news/'.$newsMostWatched->id)}}"><img src="{{asset($newsMostWatched->img)}}" class="img-responsive" alt="article"></a>
                                         </div>
                                         <div class="col-md-7 col-sm-6">
                                             <p class="description"><a href="{{url('news/'.$newsMostWatched->id)}}">{{$newsMostWatched->ar_title}}</a></p>
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
                                     <a href="{{ url('news/'.$firstNews->id) }}"><img src="{{$firstNews->img}}" class="img-responsive"></a>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="content">
                           <h2> <a href="{{ url('news/'.$firstNews->id) }}">{{$firstNews->ar_title}}</a></h2>
                                     <p class="desc">{{$firstNews->description}}</p>
                                 </div>
                             </div>
                         </div>
                         <div class="row multi-post">
                            @foreach($newss as $news)
                                <div class="col-md-6">
                                    <div class="item">
                                        <a href="{{ url('news/'.$news->id) }}"><img src="{{$news->img}}" class="img-responsive" alt="article"></a>
                                        <div class="content">
                                <h2><a href="{{ url('news/'.$news->id) }}">{{ $news->ar_title }}</a></h2>
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
@endsection