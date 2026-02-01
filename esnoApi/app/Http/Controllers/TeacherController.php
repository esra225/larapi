<?php

namespace App\Http\Controllers;
use App\Http\Resources\TeacherResource;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function indexView()
{
    $teachers = Teacher::all();
    return view('teachers.index', compact('teachers'));
}

public function create()
{
    return view('teachers.create');
}



    /**
     * Store a newly created resource in storage.
     */
 public function store(Request $request)
{
    $request->validate([
        'name'       => 'required|string',
        'email'      => 'required|email|unique:teachers,email',
        'department' => 'required|string',   // اسم القسم
    ]);

    Teacher::create($request->only(['name', 'email', 'department']));

    return redirect('/teachers');  // يرجع لصفحة العرض
}



    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
