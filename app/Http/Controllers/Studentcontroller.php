<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::latest()->paginate(5);
        return view('show_records',compact('students'))
            ->with('i',(request()->input('page', 1)  -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_records');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "stud_name"=>"required",
            "stud_email"=>"required | min:4",
            "stud_en_roll"=>"required | min:4",
            "stud_mobile"=>"required | min:4",
            "pass"=>"required | min:5",
        ]);

        $data = 
        [
            'name'=>$request->input('stud_name'),
            'email'=>$request->input('stud_email'),
            'enroll_no'=>$request->input('stud_en_roll'),
            'mobile'=>$request->input('stud_mobile'),
            'password'=>$request->input('pass'),
        ];

       Student::create($data);
       return redirect()->route('status')
            ->with('status','Inserted Sucsessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $id)
    {
        // print_r($id);
        return view('show',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $editid)
    {
        // print_r(compact('editid'));
        // exit;
         return view('edit',compact('editid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $updid)
    {
        // print_r($request->input('id'));
        // exit;
        $request->validate([
            "name"=>"required",
            "email"=>"required | min:4",
            "enroll_no"=>"required | min:4",
            "mobile"=>"required | min:4",
            "password"=>"required | min:5",
        ]);
             $updid->update($request->all());

        //  $Student=DB::table('students')
        // ->where('id',$request->input('id'))
        // ->update([
        //     'name'=>$request->input('name'),
        //     'email'=>$request->input('email'),
        //     'enroll_no'=>$request->input('enroll_no'),
        //     'mobile'=>$request->input('mobile'),
        //     'password'=>$request->input('password'),
        // ]);
        return redirect()->route('status')
            ->with('status','Updated Sucsessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $deleteid)
    {
       $deleteid->delete();
      return redirect()->route('status')
            ->with('status','Deleted Sucsessfully');
    }
}
