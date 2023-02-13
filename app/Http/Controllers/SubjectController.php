<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    public function index()
    {
        $students = Subject::all();
        return view('subjects.all', ['subjects' => $students]);
    }

    public function showDetails(){
        $id = request('id');
        $subject = Subject::find($id);
        $students = Subject::find($id)->student;
        //$studentSubject = Student_Subject::find($id)->studentSubject;
        return view('subjects.showDetails', ['subject' => $subject, 'students' => $students]);
    }

    public function editForm(){
        $id = request('id');
        $subjects = Subject::find($id);

        return view('subjects.edit',['subjects' => $subjects]);
    }

    public function edit(Request $request){

        $request->validate([
            'name' => 'string | required',
            'credits' => 'numeric | min:0 | required',
            'hour' => 'numeric | min:0 | required'
        ]);
        
        $id = request('id');
        $name = request('name');
        $credits = request('credits');
        $hour = request('hour');
        Subject::where('id', $id)->update([
            'name' => $name,
            'credits' => $credits,
            'hour' => $hour,

        ]);
        
         return redirect()->action([SubjectController::class, 'index']);
    }

    public function delete(){
        $id = request('id');
        Subject::destroy($id);
        return redirect()->action([SubjectController::class, 'index']);
    }

    public function formCreate(){
        return view('subjects.create');
    }

    function create(Request $request){
        $request->validate([
            'name' => 'string | required',
            'credits' => 'numeric | min:0 | required',
            'Hour' => 'numeric | min:0 |required',
        ]);
        
        Subject::create($request->all());
        return redirect()->action([SubjectController::class, 'index']);
    }
}
