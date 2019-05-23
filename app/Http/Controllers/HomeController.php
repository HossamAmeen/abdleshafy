<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Route;
use URL;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Project;
use App\Blog;
use App\Product;
use App\News;
use App\Video;

use DB;
use Mail;

class HomeController extends Controller
{

    public function ar_index()
    {
        $data['projects'] = DB::table('projects')
            ->latest()
            ->limit(3)
            ->get();
        $data['newss'] = DB::table('news')
            ->latest()
            ->limit(3)
            ->get();
        $data['blogs'] = DB::table('blogs')
            ->latest()
            ->limit(3)
            ->get();


        $data['title'] = "الرئيسية";
        return view('web.index',$data);
    }

    public function ar_blog()
    {
        $data['blogs'] = Blog::orderBy('id', 'desc')->paginate(4);


        $data['blogsMostWatcheds'] =   DB::table('blogs')
            ->latest()
            ->orderBy('user_count', 'desc')
            ->limit(4)

            ->get();

        $data['title'] = "مقالات";
        return view('web.articles',$data);
    }
    public function show_blog($id)
    {
        $blog = Blog::orderBy('id', 'desc')->first();
        $blogsMostWatcheds =   DB::table('blogs')
            ->latest()
            ->orderBy('user_count', 'desc')
            ->limit(4)

            ->get();
        $blog->user_count += 1 ;
        $blog->save();

        $title= $blog->ar_title . " ";
        return view('web.single-article', compact('blog' , 'title' , 'blogsMostWatcheds'));
    }
    public function ar_news()
    {
        $data['firstNews'] = News::orderBy('id', 'desc')->first(); // News::find(1);
        
        $data['newsMostWatcheds'] =   DB::table('news')
            ->latest()
            ->orderBy('user_count', 'desc')
            ->limit(4)
            ->get();
          
        $data['newss'] =    News::orderBy('id', 'desc')->where('id','!=',$data['firstNews']->id)->paginate(4); //  DB::table('news')->orderBy('id', 'desc')->paginate(4); // News::paginate(4);
        $data['title'] = "عبد الشافي -  الأخبار";
        return view('web.news',$data);
    }
    public function show_news($id)
    {
        $news = News::find($id);
        $newsMostWatcheds =   DB::table('news')
            ->latest()
            ->orderBy('user_count', 'desc')
            ->limit(4)
            ->get();
        $news->user_count += 1 ;
        $news->save();
        $title = "عبد الشافي - عرض الخبر - " . $news->ar_title;
        return view('web.single-news', compact('title' , 'news' , 'newsMostWatcheds'));

    }

    public function video()
    {
        $data['videos'] = Video::orderBy('id', 'desc')->get();
        $data['title'] = "عبد الشافي -  الفديوهات";
        return view('web.videos',$data);
    }

    public function contact(Request $request)
    {

        $title = "عبد الشافي - تواصل معانا";

        if ($request->isMethod('post')) {
            //return $request->all();
            $rules = $this->contactFormValidation();
            $message = $this->contactMessageValidation();
            $this->validate($request, $rules, $message);
            $data=[
                'email' =>  $request->email,
                'name' => $request->name,


                'text'=>$request->text,
            ];
            Mail::send('web.contact_mail',$data,function($message) use ($data){

                $message->from( $data['email'] , $data['name']);
                $message->to("hosamameen948@gmail.com");
                $message->subject('contact');
            });
            $request->session()->flash('status', 'تم الارسال بنجاح!');
            // echo session()->get('status');
            return redirect()->back();
        }

        return view('web.contact')->with(compact('title'));
    }





    function contactFormValidation()
    {


        return array(
            'name' => 'regex:/^[\pL\s\d\-]+$/u||required|max:99',

            'email' => 'required|email',

            'text' => 'regex:/^[\pL\s\-]+$/u||required|max:99',

        );
    }

    function contactMessageValidation()
    {
        return array(
            'name.required' => 'هذا الحقل (الاسم) مطلوب ',
            'name.*' => 'هذا الحقل (الاسم) يجب يحتوي ع حروف وارقام فقط',

            'text.required' => 'هذا الحقل (الرساله) مطلوب ',
            'text.*' => 'هذا الحقل (الرساله) يجب يحتوي ع حروف وارقام فقط',

            'email.required' => 'هذا الحقل (البريد) مطلوب ',
            'email.*' => 'هذا الحقل (البريد)يجب ان يكون بريد صحيح',

            'phone.required' => 'هذا الحقل (التلفون) مطلوب ',
            'phone.min' => 'هذا الحقل (التلفون) يجب الا يقل عن 11 رقم ',
            'phone.*' => 'هذا الحقل (التلفون) يجب يحتوي ع ارقام فقط',


        );
    }

}
