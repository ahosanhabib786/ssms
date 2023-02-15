<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Session;

class CourseController extends Controller
{
    private $courses, $course;

    public function index()
    {
        return view('teacher.course.index');
    }

    public function create(Request $request)
    {
        Course::newCourse($request);
        return redirect('/course/add')->with('message', 'Course info create successfully.');
    }

    public function manage()
    {
        $this->courses = Course::where('teacher_id', Session::get('teacher_id'))->get();
        return view('teacher.course.manage', ['courses' => $this->courses]);
    }

    public function detail($id)
    {
        $this->course = Course::find($id);
        return view('teacher.course.detail', ['course' => $this->course]);
    }

    public function edit($id)
    {
        $this->course = Course::find($id);
        return view('teacher.course.edit',['course' => $this->course]);
    }
    public function update(Request $request, $id)
    {
        Course::updateCourseStatus($request, $id);
        return redirect('/course/manage')->with('message','Data update successfully');
    }
    public function delete($id)
    {
        $this->course=Course::find($id);
        $this->course->delete();
        return redirect('/course/manage')->with('message','Data deleted successfully');
    }


//    public function delete($id)
//    {
//        $this->course =Course::deleteData($id);
//        return redirect('/course/manage')->with('message','Data Save successfully');
//
// }

}
