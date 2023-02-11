<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeacherProfile;
use App\Models\TeacherPackage;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherProfileController extends Controller
{

    // protected $studentModel;
    // public function __construct( Student $student)
    // {
    //     $this->studentModel = new Crud($student);
    // }

    public function update()
    {
         $data['title'] = 'Teacher Profile';
         $data['teacher_profile'] = TeacherProfile::first();
        return view('admin.teacher-tool.add', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'hobbies' => ['required', 'string', 'max:255'],
            'tool_desc' => ['required', 'string'],
            'youtube_intro' => ['required', 'string'],
            'image' => 'mimes:jpeg,png,jpg|file|dimensions:min_width=300,min_height=300,max_width=300,max_height=300|max:1024'
        ]);

        $teacher_profile = TeacherProfile::find($request->id);
        $teacher_profile->title = $request->title;
        $teacher_profile->tool_desc = $request->tool_desc;
        $teacher_profile->hobbies = $request->hobbies;
        $teacher_profile->youtube_intro = $request->youtube_intro;
        if($request->hasFile('image')){
                $files = $request->file('image');
                $image_name = md5(rand(1000,10000));
                $file_with_ext = strtolower($files->getClientOriginalName());
                $filename = pathinfo($file_with_ext,PATHINFO_FILENAME);
                $ext = $files->getClientOriginalExtension();
                $image_full_name = $filename.'_'.time().'.'.$ext;
                $path = $files->move(public_path('teacher_profile/'),$image_full_name);
                $teacher_profile->Image = $image_full_name;
        }
        if($request->hasFile('thumbnail')){
            $files = $request->file('thumbnail');
            $image_name = md5(rand(1000,10000));
            $file_with_ext = strtolower($files->getClientOriginalName());
            $filename = pathinfo($file_with_ext,PATHINFO_FILENAME);
            $ext = $files->getClientOriginalExtension();
            $image_full_name = $filename.'_'.time().'.'.$ext;
            $path = $files->move(public_path('teacher_profile/thumbnail'),$image_full_name);
            $teacher_profile->thumbnail = $image_full_name;
        }
        $teacher_profile->save();

        return back()->with('success', 'Teacher Tool Updated successfully');;
    }
    
    public function packageIndex()
    {
         $data['title'] = 'Packages';
         $data['teacher_profile'] = TeacherPackage::get();
        return view('admin.teacher-tool.add', compact('data'));
    }


    // public function view($uuid)
    // {
    //     $data['title'] = 'Student Profile';
    //     $data['student'] = $this->studentModel->getRecordByUuid($uuid);

    //     $allUserOrder = Order::where('user_id', $data['student']->user_id);
    //     $paidOrderIds = $allUserOrder->where('payment_status', 'paid')->pluck('id')->toArray();

    //     $allUserOrder = Order::where('user_id', $data['student']->user_id);
    //     $freeOrderIds = $allUserOrder->where('payment_status', 'free')->pluck('id')->toArray();

    //     $orderIds = array_merge($paidOrderIds, $freeOrderIds);

    //     $data['orderItems'] = Order_item::whereIn('order_id', $orderIds)->latest()->paginate(15);

    //     return view('admin.student.view', $data);
    // }

    // public function edit($uuid)
    // {
    //     $data['title'] = 'Edit Student';
    //     $data['student'] = $this->studentModel->getRecordByUuid($uuid);
    //     $data['user'] = User::findOrfail($data['student']->user_id);

    //     $data['countries'] = Country::orderBy('country_name', 'asc')->get();

    //     if (old('country_id'))
    //     {
    //         $data['states'] = State::where('country_id', old('country_id'))->orderBy('name', 'asc')->get();
    //     }

    //     if (old('state_id'))
    //     {
    //         $data['cities'] = City::where('state_id', old('state_id'))->orderBy('name', 'asc')->get();
    //     }

    //     return view('admin.student.edit', $data);
    // }

    // public function update(Request $request, $uuid)
    // {
    //     $request->validate([
    //         'first_name' => ['required', 'string', 'max:100'],
    //         'last_name' => ['required', 'string', 'max:100'],
    //         'email' => ['required', 'string', 'email', 'max:255'],
    //         'phone_number' => 'required',
    //         'address' => 'required',
    //         'gender' => 'required',
    //         'about_me' => 'required',
    //         'image' => 'mimes:jpeg,png,jpg|file|dimensions:min_width=300,min_height=300,max_width=300,max_height=300|max:1024'
    //     ]);

    //     $student = $this->studentModel->getRecordByUuid($uuid);

    //     $user = User::findOrfail($student->user_id);
    //     if (User::where('id', '!=', $student->user_id)->where('email', $request->email)->count() > 0) {
    //         $this->showToastrMessage('warning', 'Email already exist');
    //         return redirect()->back();
    //     }

    //     $user->name = $request->first_name . ' '. $request->last_name;
    //     $user->email = $request->email;
    //     if ($request->password){
    //         $request->validate([
    //             'password' => 'required|string|min:6'
    //         ]);
    //         $user->password = Hash::make($request->password);
    //     }
    //     $user->image =  $request->image ? $this->saveImage('user', $request->image, null, null) :   $user->image;
    //     $user->save();

    //     $student_data = [
    //         'user_id' => $user->id,
    //         'first_name' => $request->first_name,
    //         'last_name' => $request->last_name,
    //         'address' => $request->address,
    //         'phone_number' => $request->phone_number,
    //         'country_id' => $request->country_id,
    //         'state_id' => $request->state_id,
    //         'city_id' => $request->city_id,
    //         'gender' => $request->gender,
    //         'about_me' => $request->about_me,
    //         'postal_code' => $request->postal_code,
    //     ];

    //     $this->studentModel->updateByUuid($student_data, $uuid);

    //     $this->showToastrMessage('success', 'Updated Successfully');
    //     return redirect()->route('student.index');
    // }

    // public function delete($uuid)
    // {
    //     $student = $this->studentModel->getRecordByUuid($uuid);
    //     $instructor = Instructor::whereUserId($student->user_id)->first();
    //     if ($instructor){
    //         $this->showToastrMessage('error', 'You can\'t delete it. Because this user already an instructor. If you want to delete, at first you delete from instructor.');
    //         return redirect()->back();
    //     }
    //     if ($student){
    //         $this->deleteFile(@$student->user->image);
    //     }
    //     User::find($student->user_id)->delete();
    //     $this->studentModel->deleteByUuid($uuid);

    //     $this->showToastrMessage('success', 'Deleted Successfully');
    //     return redirect()->back();
    // }

    // public function changeStudentStatus(Request $request)
    // {
    //     $student = Student::findOrFail($request->id);
    //     $student->status = $request->status;
    //     $student->save();

    //     return response()->json([
    //         'data' => 'success',
    //     ]);
    // }

}
