<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::get();
        return response()->json([
            'status' => 'success',
            'message' => 'fetched student data successfully',
            'data' => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $student = Student::create($input);
        return response()->json([
            'status' => 'success',
            'message' => 'Student data saved successfully',
            'data' => $student
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::where('id', $id)->first();
        return response()->json([
            'status' => 'success',
            'message' => 'fetched student data successfully',
            'data' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::where('id', $id)->first();
        return response()->json([
            'status' => 'success',
            'message' => 'fetched student data successfully',
            'data' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->email;
        $student->stream = $request->stream;
        $student->gender = $request->gender;
        $student->about = $request->about;
        $student->year = $request->year;
        $student->experience = $request->experience;
        $student->save();
        return response()->json([
            'status' => 'success',
            'message' => 'student data updated successfully',
            'data' => $student
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::destroy($id);
        return response()->json([
            'status' => 'success',
            'message' => 'student data deleted successfully',
            'data' => $student
        ]);
    }
}
