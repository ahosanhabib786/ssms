<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class EnrollController extends Controller
{
    private $course, $student, $enroll;

    public function index($id)
    {
        $this->course = Course::find($id);
        if (Session::get('student_id'))
        {
            $this->student = Student::find(Session::get('student_id'));
        }
        return view('website.enroll.index', [
            'course'    => $this->course,
            'student'   => $this->student
        ]);
    }

    public function enroll(Request $request, $id)
    {
        if (Session::get('student_id'))
        {
            $this->student = Student::find(Session::get('student_id'));
        }
        else
        {
            $this->validate($request, [
                'name'   => 'required',
                'email'  => 'required|unique:students,email',
                'mobile' => 'required|unique:students,email'
            ], [
                'email.required' => 'Vai.. ei email address ti den please',
                'email.unique' => 'Vai.. ei email address ti already ase. notun ekta den',
            ]);
            $this->student = Student::newStudent($request);
            Session::put('student_id', $this->student->id);
            Session::put('student_name', $this->student->name);
        }




        $this->enroll = Enroll::where('student_id', Session::get('student_id'))->where('course_id', $id)->first();
        if ($this->enroll)
        {
            return redirect('/all-courses')->with('message', 'You are already enroll this course. Please try another one.');
        }
        else
        {
            Enroll::newEnroll($request, $this->student->id, $id);
            /*======Email Send=========*/


            /*======Email Send==========*/
            return redirect('/enroll-now/'.$id)->with('message', 'Your enroll submission save successfully. Please wait. We will contact with you soon.');

        }
    }
}
