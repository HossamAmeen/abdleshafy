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
					<p class="text-center">
                        هيا بنا نجلس بسلام<br/>
                        نبدأها بالسلام <br/>
                        و نتبادل حديثنا في جو يعمه السلام<br/>
                        و ختامها بسلام
                    </p>
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
                <input type="text" class="form-control" id="name" placeholder="ادخل الاسم" value="{{old('name')}}" name="name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >رقم التلفون: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="ادخل التلفون" value="{{old('phone')}}" name="phone">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">العنوان: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="ادخل العنوان" value="{{old('address')}}" name="address">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">السن: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="ادخل السن" value="{{old('age')}}" name="age">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">الايميل: </label>
              <div class="col-sm-10">          
                <input type="email" class="form-control" id="email" placeholder="ادخل الايميل " value="{{old('email')}}" name="email">
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-sm-2" for="pwd"> مكان المقابلة: </label>
              <div class="col-sm-10">          
                <select class="form-control" name="plcae">
                  <option value="القاهرة - مصر ">القاهرة - مصر </option>
                  <option value="ابو ظبي - الإمارات العربية المتحدة">ابو ظبي - الإمارات العربية المتحدة</option>
                 
                </select> 
              </div>
            </div>
             
            <div class="form-group">
                  <label class="control-label col-sm-2" for="msg">سبب المقابلة: </label>
                  <div class="col-sm-10">
                      <label>سيتم التحديد بناءا علي أهمية السبب بداية من مجرد التعارف الي طلب رأي في مشروعات حقيقة لذا يرجي التحديد</label>
                    <textarea  class="form-control" id="msg" placeholder="" name="text">{{old('text')}}</textarea>
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