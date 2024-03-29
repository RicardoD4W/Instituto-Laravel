<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Student_Subject;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.all', ['students' => $students]);
    }


    public function showDetails()
    {
        $id = request('id');
        $students = Student::find($id);
        $subject = Student::find($id)->subjects;
        //$studentSubject = Student_Subject::find($id)->studentSubject;
        return view('students.showDetails', ['students' => $students, 'subjects' => $subject]);
    }



    public function editForm(){
        $id = request('id');
        $students = Student::find($id);

        return view('students.edit',['students' => $students]);
    }


    public function edit(Request $request)
    {

        $request->validate([
            'name' => 'string | required',
            'last_name' => 'required',
            'birth_year' => 'required',
            'gender' => 'required '
    
        ]);


        $id = request('id');
        $name = request('name');
        $last_name = request('last_name');
        $birth_year = request('birth_year');
        $gender = request('gender');
        Student::where('id', $id)->update([
            'name' => $name,
            'last_name' => $last_name,
            'birth_year' => $birth_year,
            'gender' => $gender

        ]);
        
         return redirect()->action([StudentController::class, 'index']);
    }



    public function delete()
    {
        $id = request('id');
        Student::destroy($id);
        return redirect()->action([StudentController::class, 'index']);
    }


    public function formCreate(){
        $subjects = Subject::all();
        return view('students.create', ['subjects' => $subjects]);
    }

    public function create(Request $request){

        $request->validate([
            'name' => 'string | required',
            'last_name' => 'required',
            'birth_year' => 'required',
            'gender' => 'required'
    
        ]);

        $name = request('name');
        $last_name = request('last_name');
        $birth_year = request('birth_year');
        $gender = request('gender');
        $id = request('subjectId');
        $subjectChecked = request('subjectChecked');
        var_dump($subjectChecked);
        Student::create([
            'name' => $name,
            'last_name' => $last_name,
            'birth_year' => $birth_year,
            'gender' => $gender
        ]);

        $id_alumno = DB::table('students')->orderBy('id', 'desc')->limit(1)->get()[0]->id;
        foreach ($subjectChecked as $checked) {
            Student_Subject::create([
                'id_student' => $id_alumno,
                'id_subject' =>   $checked
            ]);
        }        

        
        return redirect()->action([StudentController::class, 'index']);
    }




    
}
