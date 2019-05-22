<nav id="mainNav" class="navbar navbar-default navbar-fixed-top"  data-spy="affix" data-offset-top="100">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{asset('resources/assets/web/images/logo.png')}}" alt="logo" class="logo">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a  href="{{url('/')}}"   @if($title ==  "عبد الشافي - الصفحه الرئيسيه") class="page-scroll active" @else class="page-scroll"  @endif >الرئيسية</a></li>
                <li><a  href="{{url('/blog')}}" @if($title ==  "عبد الشافي - المقالات") class="page-scroll active" @else class="page-scroll"  @endif  >المقالات </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">المشروعات  <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach($data['projects'] as $project)
                        <li><a href="{{$project->site}}" target="_blank">{{$project->ar_title}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a  href="{{url('video')}}" @if($title ==  "عبد الشافي -  الفديوهات") class="page-scroll active" @else class="page-scroll"  @endif >الفيديوهات </a></li>
                <li><a  href="{{url('news')}}" @if($title ==  "عبد الشافي -  الأخبار") class="page-scroll active" @else class="page-scroll"  @endif >الاخبار</a></li>
                <li><a  href="{{url('contact')}}" @if($title == "عبد الشافي - تواصل معانا") class="page-scroll active" @else class="page-scroll"  @endif >تواصل معنا</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>