<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\section;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index', ['students'=>student::all()]);
    }

    public function create()
    {
        return view('students.add', ['sections'=>section::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'adress' => 'required',
            'email' => 'required|unique:students',
        ], [
            'name.required'=>'Le prénom est obligatoire',
            'surname.required'=>'Le nom est obligatoire',
            'adress.required'=>"L'adresse est obligatoire",
            'email.required'=>'Le mail est obligatoire',
            'email.unique'=>'Le mail est déjà enregistré',
        ]);
        DB::table('students')->insert([
            'name' => $request->name,
            'surname' => $request->surname,
            'adress' => $request->adress,
            'email' => $request->email,
            'section_id'=>$request->section,
            'slug' => Str::slug($request->name. "-". $request->surname. "-"),
        ]);
        return view('students.index', ['students'=>student::all()]);
    }

    public function show(Request $request)
    {
        $student=student::FindOrFail($request->id);
        return view('students.show', ['student'=>$student]);
    }

    /**
     * public function edit($id)
     * {
     *  //
     * }
     *
     * public function update(Request $request, $id)
     * {
     *  //
     * }
     */

    public function destroy(Request $request)
    {
        $student=student::FindOrFail($request->id);
        $student->delete();
        return view('students.index', ['students'=>student::all()]);
    }

    public function edit(Request $request)
    {
        $student = student::findOrFail($request->id);
        return view('students.modify',['student'=>$student, 'sections'=>section::all()]);
    }

    public function update(Request $request)
    {
        $student = student::findOrFail($request->id);
        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->email = $request->email;
        $student->adress = $request->adress;
        $student->section_id = $request->section;
        $student->save();
        return view('students.index', ['students'=>student::all()]);
    }
}
