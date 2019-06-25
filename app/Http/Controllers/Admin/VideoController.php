<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Video;
use Image;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index()
    {
        $data['videos'] = Video::all();
        $data['title'] = 'عرض الفديوهات';
        return view('admin.control_panel.videos.show_videos',$data);
    }
    public function create()
    {
        $data['title'] = 'اضافه فديو';
        return view('admin.control_panel.videos.add_video',$data);
    }
    public function store(Request $request)
    {
        $rules = $this->formValidation();
        $message = $this->messageValidation();
        $this->validate($request, $rules,$message);

        $video = Video::create($request->all());
        $video->link =  substr( $request->link , strpos( $request->link , "v=" )  + 2    )  ;

       
        $video->save();

        $request->session()->flash('status', 'تم الاضافه بنجاح');
        $video->user_id =  session('id');
        $video->save();


        return redirect()->route('video.index');
    }
    public function edit($id)
    {

        $video = Video::find($id);
        $title = 'تعديل الفديو';

        if(!empty($video))
            return view('admin.control_panel.videos.edit_video',$video)->with(compact('video', 'title') );
        else
            return redirect()->route('video.index');
    }


    public function update(Request $request, $id)
    {
        $rules = $this->EditformValidation($id);
        $message = $this->messageValidation();
        $this->validate($request, $rules,$message);

        $video = Video::find($id);
        $path =  $video->img ;
       

        if(!empty($video))
        {


            $video->fill($request->all());

            $video->img =  substr( $request->link , strpos($request->link , "v=" )  + 2    )  ;
            $video->user_id =  session('id');
            $video->save();
        }
      
        $request->session()->flash('status', 'تم التعديل بنجاح');
        return redirect()->route('video.index');
    }


    public function destroy(Request $request, $id)
    {
        $video = Video::find($id);
        if(!empty($video)){

            $video->delete();
            $request->session()->flash('delete', 'تم الحذف بنجاح');
        }

        return redirect()->route('video.index');
    }
    function formValidation()
    {
        return array(
            'link'     => 'required',

           
        );
    }
    function EditformValidation($id)
    {
        return array(
            'link'     => 'required',

          
        );
    }
    function messageValidation(){
        return array(

            'link.required'     =>  'هذا الحقل (الاسم) مطلوب ',
          



        );
    }



}
