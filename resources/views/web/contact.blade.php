<! DOCTYPE html>
<html>
    <head>
        <title>{{$title}}</title>
         <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        
        
        <link rel="stylesheet" href="{{asset('resources/assets/web/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/web/css/bootstrap-rtl.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/web/css/font-awesome.min.css')}}">
        
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
           <img src="{{asset('resources/assets/web/images/general.png')}}" class="img-responsive page-head">
        </header>
        
        <section class="contact padding-sec">
            <div class="container">
          <h2 class="text-center" style="margin-bottom: 30px;">تواصل معنا </h2>
            <span class="after-head"><i class="fa fa-weixin" aria-hidden="true"></i></span>
          <form class="form-horizontal" action="{{url('contact')}}" method="post">
             {{csrf_field()}}
              @if (session()->get('status') )
                  <div class="alert alert-success">
                      <strong>{{session()->get('status')}}</strong>
                  </div>
              @endif
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <div class="form-group">
              <label class="control-label col-sm-2" for="email">الاسم: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="ادخل الاسم" name="name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">الايميل: </label>
              <div class="col-sm-10">          
                <input type="email" class="form-control" id="email" placeholder="ادخل الايميل " name="email">
              </div>
            </div>
              
            <div class="form-group">
                  <label class="control-label col-sm-2" for="msg">اترك رسالتك: </label>
                  <div class="col-sm-10">          
                    <textarea type="email" class="form-control" id="msg" placeholder="اكتب رسالتك ...." name="text">
                      </textarea>
                    </div>
              </div>
              
            <div class="form-group text-center">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" id="submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
        </section>

       <footer class="">
           <div class="footer">
               <div class="container text-center">
                   <div class="row">
                       <div class="col-md-4">
                           
                       </div>
                       <div class="col-md-4">
                           <img src="{{asset('resources/assets/web/images/logo.png')}}" class="img-responsive" alt="logo">
                           <ul class="icons list-unstyled list-inline">

                               <a href="{{$data['pref']->youtube}}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                               <a href="{{$data['pref']->instgram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                               <a href="{{$data['pref']->instgram}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                               <a href="{{$data['pref']->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
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
                <img src="{{asset('resources/assets/web/images/zedy-logo.png')}}" alt="logo" class="logo">
                <span>powered by </span>
            </div>
        </section>
        
        <script src="{{asset('resources/assets/web/js/jquery-2.2.4.min.js')}}"></script>
        <script src="{{asset('resources/assets/web/js/bootstrap.min.js')}}"></script>
        
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