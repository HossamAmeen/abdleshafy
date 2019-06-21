@extends('web._masters.main')

@section('content')
       <header>
           <img src="{{asset('resources/assets/web/images/2.png')}}" class="img-responsive page-head">
        </header>
    <section class="contact padding-sec">
        <div class="container">
      <div class="row">
				<div class="col-md-4">
					<h2 class="head-sec text-center">جلسة سلام </h2>
				    <span class="after-head"><i class="fa fa-handshake-o" aria-hidden="true"></i></span>
				</div>
				<div class="col-md-8 talk">
					<p class="text-center"> كل واحد فينا عنده مشاكله اللي بيمر بيها في مننا اللي عنده حد يحكيله ويخفف عنه وفي اللي معندوش والجزء الأهم في حل المشكلة هو مساعدة الناس لينا والنقاش مع صديق او شخص موثوق فيه عشان يقدملك الحلول، في جلسة سلام بنقدملك المشاورة عشان نسعدك في حل مشاكلك وتقديم اي مساعدة هتحتاجها سواء كانت كبيرة او صغيرة وزي ما قالنا رسولنا الحبيب " خير الناس انفعهم للناس" صدق رسول الله صل الله عليه وسلم </p>
				</div>
			</div>
      <div class="row">  
          <h2 class="text-center" style="margin-bottom: 30px;">تواصل معنا </h2>
            <span class="after-head"><i class="fa fa-weixin" aria-hidden="true"></i></span>
          <form class="form-horizontal" action="{{url('salam')}}" method="post">
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
              <label class="control-label col-sm-2" >رقم التلفون: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="ادخل التلفون" name="phone">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">العنوان: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="ادخل العنوان" name="address">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">السن: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="ادخل السن" name="age">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">الايميل: </label>
              <div class="col-sm-10">          
                <input type="email" class="form-control" id="email" placeholder="ادخل الايميل " name="email">
              </div>
            </div>
              
            <div class="form-group">
                  <label class="control-label col-sm-2" for="msg">سبب المقابلة: </label>
                  <div class="col-sm-10">          
                    <textarea type="email" class="form-control" id="msg" placeholder="اكتب رسالتك ...." name="text">
                      </textarea>
                    </div>
              </div>
              
            <div class="form-group text-center">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" id="submit">إرسال</button>
              </div>
            </div>
          </form>
        </div>
        </div>
        </section>

   @endsection