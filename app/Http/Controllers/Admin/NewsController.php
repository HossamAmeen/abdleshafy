<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\News;
use Image;
use Illuminate\Http\Request;

class NewsController extends Controller
{
   
    public function index()
    {
        $data['newss'] = News::all();
        $data['title'] = 'عرض الأخبار';
        return view('admin.control_panel.news.show_news',$data);
    }
    public function create()
    {
        $data['title'] = 'اضافه خبر';
        return view('admin.control_panel.news.add_news',$data);
    }
    public function store(Request $request)
    {
       

        

            $news = News::create($request->all());

            if($request->hasFile('img'))
            {
                $photo = $request->file('img');
                $imagename = time().'.'.$photo->getClientOriginalExtension();
                $destinationPath = 'resources/assets/admin/images/';
                $thumb_img = Image::make($photo->getRealPath())->resize(800, 600);
                $thumb_img->save($destinationPath.$imagename,60);
                $news->img = $destinationPath . $imagename;
            }
            $news->user_id = session("id");
            $request->session()->flash('status', 'تم الاضافه بنجاح');
            $news->save();


        return redirect()->route('news.index');
    }
    public function edit($id)
    {
        
        $news = News::find($id);
        $title = 'تعديل الخبر';
        $news= $news->makeVisible('password'); //// for hidden in model
        if(!empty($news))
            return view('admin.control_panel.news.edit_news',$news)->with(compact('news', 'title') );
        else
            return redirect()->route('news.index');
    }

    
    public function update(Request $request, $id)
    {

       $news = News::find($id);
       $path =  $news->img ;
       $hasFile=false;
     
       if(!empty($news))
       {

           if($request->hasFile('img'))
           {
               $photo = $request->file('img');
               $imagename =   time().'.'.$photo->getClientOriginalExtension();
               $destinationPath = 'resources/assets/admin/images/';
               $thumb_img = Image::make($photo->getRealPath())->resize(800, 600);
               $thumb_img->save($destinationPath.$imagename);
               $news->img = $destinationPath . $imagename;
               $hasFile=true;
           }
           $news->user_id = session("id");
                $news->save();
        }
        if($hasFile) {
             unlink($path);
         }
        $request->session()->flash('status', 'تم التعديل بنجاح');
        return redirect()->route('news.index');
    }

    
    public function destroy(Request $request, $id)
    {
        $news = News::find($id);
        if(!empty($news)){
           
         $news->delete();
            $request->session()->flash('delete', 'تم الحذف بنجاح');
         }

         return redirect()->route('news.index');
    }
    
    
}
