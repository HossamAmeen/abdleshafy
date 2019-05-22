@extends('web._masters.main')

@section('content')
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

   @endsection