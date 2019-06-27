<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Project;
use Image;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $data['projects'] = Project::all();
        $data['title'] = 'عرض المشروعات';
        return view('admin.control_panel.projects.show_projects',$data);
    }
    public function create()
    {
        $data['title'] = 'اضافه مشروع';
        return view('admin.control_panel.projects.add_project',$data);
    }
    public function store(Request $request)
    {
        $rules = $this->formValidation();
        $message = $this->messageValidation();
        $this->validate($request, $rules,$message);



        $project = Project::create($request->all());

        if($request->hasFile('img'))
        {
            $photo = $request->file('img');
            $imagename = time().'.'.$photo->getClientOriginalExtension();
            $destinationPath = 'resources/assets/admin/images/';
            $thumb_img = Image::make($photo->getRealPath())->resize(300, 170);
            $thumb_img->save($destinationPath.$imagename,60);
            $project->img = $destinationPath . $imagename;
        }
        $project->user_id =  session('id');
        $request->session()->flash('status', 'تم الاضافه بنجاح');
        $project->save();


        return redirect()->route('project.index');
    }
    public function edit($id)
    {

        $project = Project::find($id);
        $title = 'تعديل المشروعات';
        $project= $project->makeVisible('password'); //// for hidden in model
        if(!empty($project))
            return view('admin.control_panel.projects.edit_project',$project)->with(compact('project', 'title') );
        else
            return redirect()->route('project.index');
    }


    public function update(Request $request, $id)
    {
        $rules = $this->EditformValidation($id);
        $message = $this->messageValidation();
        $this->validate($request, $rules,$message);
        $project = Project::find($id);
        $path =  $project->img ;
        $hasFile=false;
      
        if(!empty($project))
        {
           
            $rules = $this->EditformValidation($id);
            $this->validate($request, $rules);
            $project->fill($request->all());

         
            if($request->hasFile('img'))
            {
                $photo = $request->file('img');
                $imagename =   time().'.'.$photo->getClientOriginalExtension();
                $destinationPath = 'resources/assets/admin/images/';
                $thumb_img = Image::make($photo->getRealPath())->resize(400, 400);
                $thumb_img->save($destinationPath.$imagename);
                $project->img = $destinationPath . $imagename;
                $hasFile=true;
            }
            $project->user_id =  session('id');
            $project->save();
        }
        if($hasFile) {
            unlink($path);
        }
        $request->session()->flash('status', 'تم التعديل بنجاح');
        return redirect()->route('project.index');
    }


    public function destroy(Request $request, $id)
    {
        $project = Project::find($id);
        if(!empty($project)){

            $project->delete();
            $request->session()->flash('delete', 'تم الحذف بنجاح');
        }

        return redirect()->route('project.index');
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
            'ar_title'     => 'regex:/^[\pL\s\d\-]+$/u|required|max:99',

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
