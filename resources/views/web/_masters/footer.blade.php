<footer class="">
    <div class="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="plinks">
                        <h3>مشروعاتنا </h3>
                        <ul class="list-unstyled">
                            @foreach($data['projects'] as $project)
                                <li><a href="{{$project->site}}" target="_blank">{{$project->ar_title}}</a></li>
                            @endforeach
                        </ul>

                    </div>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('resources/assets/web/images/logo.png')}}" class="img-responsive" alt="logo">
                    <ul class="icons list-unstyled list-inline">

                        <a href="{{$data['pref']->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="{{$data['pref']->youtube}}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        <a href="{{$data['pref']->instgram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="{{$data['pref']->instgram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="plinks">
                        <h3> اهم الصفحات </h3>
                        <ul class="list-unstyled">
                            <li> <a href="{{url('/blog')}}">المقالات </a></li>
                            <li> <a href="{{url('news')}}">الاخبار</a> </li>
                            <li> <a href="{{url('video')}}">الفيديوهات </a></li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
</footer>
<section class="copywrite">
    <div class="container text-center">
        <img src="{{asset('resources/assets/web/images/zedy-logo.png')}}" alt="logo" class="logo">
        <span>mahmoud abdle-shafy website powered by </span>
    </div>
</section>

<script src="{{asset('resources/assets/web/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('resources/assets/web/js/bootstrap.min.js')}}"></script>
<!--        our revolution slider-->
<script src="{{asset('resources/assets/web/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('resources/assets/web/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Revolution Slider -->
<script type="text/javascript">

    jQuery(document).ready(function() {
        jQuery('.banner').revolution({
            delay:9000,
            startwidth: 1200,
            startheight: 650,
            startWithSlide: 0,

            fullScreenAlignForce:"off",
            autoHeight:"on",
            minHeight:"off",

            shuffle:"off",

            onHoverStop:"on",

            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:3,

            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"on",
            hideThumbsUnderResoluition:0,

            hideThumbs:0,
            hideTimerBar:"off",

            keyboardNavigation:"on",

            navigationType:"bullet",
            navigationArrows:"solo",
            navigationStyle:"round",

            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:30,
            navigationVOffset:30,

            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,

            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,


            touchenabled:"on",
            swipe_velocity:"0.7",
            swipe_max_touches:"1",
            swipe_min_touches:"1",
            drag_block_vertical:"false",

            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
            parallaxDisableOnMobile:"off",

            stopAtSlide:-1,
            stopAfterLoops:-1,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            hideSliderAtLimit:0,

            dottedOverlay:"none",

            spinned:"spinner4",

            fullWidth:"off",
            forceFullWidth:"off",
            fullScreen:"off",
            fullScreenOffsetContainer:"#topheader-to-offset",
            fullScreenOffset:"0px",

            panZoomDisableOnMobile:"off",

            simplifyAll:"off",

            shadow:0

        });

    });

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

<!--    owl slider -->
<script src="{{asset('resources/assets/web/js/owl.carousel.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
    });
</script>
<script src="{{asset('resources/assets/web/js/script.js')}}"></script>