@extends('web._masters.main')

@section('content')
       <header>
           <img src="{{asset('resources/assets/web/images/general.png')}}" class="img-responsive page-head">
        </header>
        
        <section class="videos-page">
            <div class="container">    
                <div class="row">
                 @foreach($videos as $video)
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="img-sec">
                            <iframe width="100%" src="https://www.youtube.com/embed/{{$video->link}}"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="content">
                                <h3 class="text-center">{{$video->title}}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                <div class="row">
                    <div class="channel text-center">
                        <a href="{{$data['pref']->youtube}}" target="_blank" class="btn">
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



