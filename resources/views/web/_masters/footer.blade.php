
<footer class="">
    <div class="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <img src="{{asset('resources/assets/web/images/logo.png')}}" class="img-responsive" alt="logo">
                    <ul class="icons list-unstyled list-inline">

                        @if($data['pref']->youtube != null )
                        <a target="_blank" href="{{$data['pref']->youtube}}"><i class="fa fa-youtube" aria-hidden="true"></i></a> 
                        @endif
                         @if($data['pref']->instagram != null )
                        <a target="_blank" href="{{$data['pref']->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                       @endif
                        @if($data['pref']->twitter != null )
                        <a target="_blank" href="{{$data['pref']->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        @endif
                         @if($data['pref']->facebook != null )
                        <a target="_blank" href="{{$data['pref']->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                         @endif
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
        <a href="http://www.z-edy.com/" target="_blank"> <img src="{{asset('resources/assets/web/images/zedy-logo.png')}}" alt="logo" class="logo"></a>
        <span>Powered by </span>
    </div>
</section>
<script src="{{asset('resources/assets/web/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('resources/assets/web/js/bootstrap.min.js')}}"></script>
<!--        our revolution slider-->
<script src="{{asset('resources/assets/web/js/jquery.themepunch.tools.min.js')}}"></script>

      <script> 
            $("#video1, #video2, #video3, #video4").videoPopup({
                  autoplay: true,
                  showControls: true,
                  controlsColor: null,
                  loopVideo: false,
                  showVideoInformations: true,
                  width: null
                });
        </script>
        
<!--	    wow js animation -->
	      <script src="{{asset('resources/assets/web/js/wow.min.js')}}"></script>
              <script>
			    wow = new WOW({mobile: false});
				wow.init();
              </script>
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
