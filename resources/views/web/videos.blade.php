@extends('web._masters.main')

@section('content')
       <header>
           <img src="{{asset('resources/assets/web/images/general.png')}}" class="img-responsive page-head">
        </header>
        
        
        <section class="videos-page padding-sec">
            <div class="container">    
                
                 @foreach($videos as $video)
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <div class="img-sec">
                                <img src="http://img.youtube.com/vi/{{$video->img}}/mqdefault.jpg" class="img-responsive" alt="video-img">
                                <div class="icons">
                                    <a href="{{$video->link}}" onclick="changeVideo('{{$video->img}}')" 
                                    video-url="https://www.youtube.com/watch?v=e80BbX05D7Y" class="video">
                                    <span class="icon"><i class="fa fa-play" aria-hidden="true"></i></span>
                                         <span class="play">اشتغل</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 @endforeach
                {{-- <div class="row">
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

                </div> --}}

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


        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                    
                        <iframe id="iframeYoutube" width="560" height="315"  src="https://www.youtube.com/embed/e80BbX05D7Y" frameborder="0" allowfullscreen></iframe> 
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--        real estate image-->
        <section>
            <img src="{{asset('resources/assets/web/images/before-footer.png')}}" class="img-responsive" alt="real estate background">
        </section>
        <script type="text/javascript">
    $(document).ready(function(){
  $("#myModal").on("hidden.bs.modal",function(){
    $("#iframeYoutube").attr("src","#");
  })
})

function changeVideo(vId){
  var iframe=document.getElementById("iframeYoutube");
  iframe.src="https://www.youtube.com/embed/"+vId;

  $("#myModal").modal("show");
}
</script>
  @endsection