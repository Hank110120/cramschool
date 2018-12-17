<?php

namespace App\Http\Controllers\Backend;

use App\Classroom;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClassroomRequest;
use App\Http\Requests\UpdateClassroomRequest;
use Illuminate\Support\Facades\Hash;

class ClassroomsController
{
    public function index()
    {
        return view('backend.classrooms.index')->with(['classrooms' => Classroom::all()]);
    }

    public function create()
    {
        return view('backend.classrooms.create');
    }

    public function store(StoreClassroomRequest $request)
    {

        $classroom = Classroom::create([
            'name' => $request->input('name'),
            'teacher_id' => $request->input('teacher_id'),
            'company_id' => $request->input('company_id'),
        ]);

        return redirect()->route('backend.classrooms.index')->with(['status' => 'create success']);
    }

    public function edit(Classroom $classroom)
    {
        return view('backend.classrooms.edit')->with(['classroom' => $classroom]);
    }

    public function update(UpdateClassroomRequest $request, Classroom $classroom)
    {
        $classroom->update([
            'name' => $request->input('name'),
            'company_id' => $request->input('company_id'),
            'teacher_id' => $request->input('teacher_id'),
        ]);

        return redirect()->route('backend.classrooms.index')->with(['status' => 'update success']);
    }

    public function destroy(Classroom $classroom)
    {
        $classroom->delete();

        return redirect()->route('backend.classrooms.index')->with(['status' => 'delete success']);
    }
}