@extends('web._masters.main')

@section('content')
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
                                        <p class="description"><a href="{{url('blog/'.$blogsMostWatched->id)}}">{{$blogsMostWatched->ar_title}}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       @endforeach
                        <div class="row">
                            
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMahmoud.M.abdelshafy%2F&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </div>
                    </div> {{--End Wast Watched--}}

                    <div class="col-md-9">
                        <div class="row">
                            @foreach($blogs as $blog)
                            <div  class="col-md-6"> {{--Article div--}}
                                <div class="article">
                                    <a href="{{url('blog/'.$blog->id)}}">
                                        <img alt="{{$blog->ar_title}}" src="{{asset($blog->img)}}" class="img-responsive">
                                    </a>
                                    <div class="content">
                                        <a href="{{url('blog/'.$blog->id)}}"><h3>{{$blog->ar_title}}</h3></a>
                                        <div class="details">
                                            <span class="author">{{$blog->owner}}</span>
                                            <span class="date">{{$blog->date}}</span>
                                        </div>
                                        <p><?php echo strip_tags(substr($blog->description , 0 , 100)) ?></p>
                                    </div>
                                </div> {{--End Article Div--}}
                            </div>{{--End Article div--}}
                            @endforeach
                        </div>{{--End row--}}
                    </div>
                    <div class="clearfix"></div>
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
  @endsection