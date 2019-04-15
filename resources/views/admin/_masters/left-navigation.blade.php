<section id="left-navigation">
    <!--Left navigation user details start-->

    <!--Phone Navigation Menu icon start-->

    <!--Left navigation start-->
    <ul class="mainNav">
        <li >
            <a @if($title == 'اضافه بيانات الموقع' || $title == 'تعديل بيانات الموقع') class="active" @endif href="{{url('admin/prefs')}}">
                <i class="fa fa-bullhorn"></i> <span>بيانات الموقع</span>
            </a>
        </li>
        <li >
            <a  href="#" @if($title == 'اضافه مستخدم' || $title == 'عرض المستخدمين') class="active"  @endif>
                <i class="fa fa-bar-chart-o"></i> <span>المستخدمين</span>
            </a>
            <ul>
                <li>
                    <a  @if($title == 'اضافه مستخدم') class="active"  @endif href="{{url('admin/user/create')}}">اضافه مستخدم</a>
                </li>
                <li>
                    <a @if($title == 'عرض المستخدمين') class="active"  @endif  href="{{url('admin/user')}}">عرض المستخدمين</a>
                </li>

            </ul>
        </li>

        <li >
            <a  href="#" @if($title == 'اضافه مقالة' || $title == 'عرض المقالات') class="active"  @endif >
                <i class="fa fa-bar-chart-o"></i> <span>المقالات</span>
            </a>
            <ul>
                <li>
                    <a  @if($title == 'اضافه مقالة') class="active"  @endif href="{{url('admin/blog/create')}}">اضافه مقالة</a>
                </li>
                <li>
                    <a @if($title == 'عرض المقالات') class="active"  @endif  href="{{url('admin/blog')}}">عرض المقالات</a>
                </li>

            </ul>
        </li>
        <li >
            <a  href="#" @if($title == 'اضافه مشروع' || $title == 'عرض المشروعات') class="active"  @endif >
                <i class="fa fa-bar-chart-o"></i> <span>المشروعات</span>
            </a>
            <ul>
                <li>
                    <a  @if($title == 'اضافه مشروع') class="active"  @endif href="{{url('admin/project/create')}}">اضافه مشروع</a>
                </li>
                <li>
                    <a @if($title == 'عرض المشروعات') class="active"  @endif  href="{{url('admin/project')}}">عرض المشروعات</a>
                </li>

            </ul>
        </li>
        <li >
            <a  href="#" @if($title == 'اضافه فديو' || $title == 'عرض الفديوهات') class="active"  @endif >
                <i class="fa fa-bar-chart-o"></i> <span>الفديوهات</span>
            </a>
            <ul>
                <li>
                    <a  @if($title == 'اضافه فديو') class="active"  @endif href="{{url('admin/video/create')}}">اضافه فديو</a>
                </li>
                <li>
                    <a @if($title == 'عرض الفديوهات') class="active"  @endif  href="{{url('admin/video')}}">عرض الفديوهات</a>
                </li>

            </ul>
        </li>
        <li >
            <a  href="#" @if($title == 'اضافه خبر' || $title == 'عرض الاخبار') class="active"  @endif >
                <i class="fa fa-bar-chart-o"></i> <span>الاخبار</span>
            </a>
            <ul>
                <li>
                    <a  @if($title == 'اضافه مقالة') class="active"  @endif href="{{url('admin/news/create')}}">اضافه خبر</a>
                </li>
                <li>
                    <a @if($title == 'عرض الاخبار') class="active"  @endif  href="{{url('admin/news')}}">عرض الاخبار</a>
                </li>

            </ul>
        </li>

        <li >
            <a  href="{{url('admin/logout')}}">
                <i class="fa fa-power-off"></i> <span>تسجيل خروج</span>
            </a>

        </li>


    </ul>
    <!--Left navigation end-->
</section>