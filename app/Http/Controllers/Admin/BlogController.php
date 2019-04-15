<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Blog;
use Image;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   
    public function index()
    {
        $data['blogs'] = Blog::all();
        $data['title'] = 'عرض المقالات';
        return view('admin.control_panel.blogs.show_blogs',$data);
    }
    public function create()
    {
        $data['title'] = 'اضافه مقالة';
        return view('admin.control_panel.blogs.add_blog',$data);
    }
    public function store(Request $request)
    {
        $rules = $this->formValidation();
        $message = $this->messageValidation();
        $this->validate($request, $rules,$message);

        

            $blog = Blog::create($request->all());

            if($request->hasFile('img'))
            {
                $photo = $request->file('img');
                $imagename = time().'.'.$photo->getClientOriginalExtension();
                $destinationPath = 'resources/assets/admin/images/';
                $thumb_img = Image::make($photo->getRealPath())->resize(400, 400);
                $thumb_img->save($destinationPath.$imagename,60);
                $blog->img = $destinationPath . $imagename;
            }
            $request->session()->flash('status', 'تم الاضافه بنجاح');
            $blog->user_id =  session('id');
            $blog->save();


        return redirect()->route('blog.index');
    }
    public function edit($id)
    {
        
        $blog = Blog::find($id);
        $title = 'تعديل المقالات';

        if(!empty($blog))
            return view('admin.control_panel.blogs.edit_blog',$blog)->with(compact('blog', 'title') );
        else
            return redirect()->route('blog.index');
    }

    
    public function update(Request $request, $id)
    {
        $rules = $this->EditformValidation($id);
        $message = $this->messageValidation();
        $this->validate($request, $rules,$message);
       $blog = Blog::find($id);
       $path =  $blog->img ;
       $hasFile=false;

       if(!empty($blog))
       {

                $rules = $this->EditformValidation($id);
                $this->validate($request, $rules);
                $blog->fill($request->all());


           if($request->hasFile('img'))
           {
               $photo = $request->file('img');
               $imagename =   time().'.'.$photo->getClientOriginalExtension();
               $destinationPath = 'resources/assets/admin/images/';
               $thumb_img = Image::make($photo->getRealPath())->resize(400, 400);
               $thumb_img->save($destinationPath.$imagename);
               $blog->img = $destinationPath . $imagename;
               $hasFile=true;
           }
           $blog->user_id =  session('id');
                $blog->save();
        }
        if($hasFile) {
             unlink($path);
         }
        $request->session()->flash('status', 'تم التعديل بنجاح');
        return redirect()->route('blog.index');
    }

    
    public function destroy(Request $request, $id)
    {
        $blog = Blog::find($id);
        if(!empty($blog)){
           
         $blog->delete();
            $request->session()->flash('delete', 'تم الحذف بنجاح');
         }

         return redirect()->route('blog.index');
    }
    
    function formValidation()
    {
       return array(
        'ar_title'     => 'required|max:99',

        'img'=> 'image',
       );
    }
    function EditformValidation($id)
    {
        return array(
            'ar_title'     => 'required|max:99',
            'description'     => 'required',
            'img'=> 'image',
           );
    }
    function messageValidation(){
        return array(

            'name.required'     =>  'هذا الحقل (الاسم) مطلوب ',
            'name.*'            =>  'هذا الحقل (قسم بالعربيه) يجب يحتوي ع حروف وارقام فقط',

            'email.required'     => 'هذا الحقل (البريد) مطلوب ',
            'email.unique'     => 'هذا الحقل (البرريد) يوجد بالفعل ',
            'email.*'            =>  'هذا الحقل (البريد) يجب يحتوي ع حروف وارقام فقط ',

            'password.required'     => 'هذا الحقل (كلمه السر) مطلوب ',
            'password_confirmation.required'     => 'هذا الحقل (تاكيد كلمه السر) غير مطابق ',

            'image'            =>  'هذا الحقل (اضافه الصورة) يجب ان يكون صورة',


        );
    }
}
