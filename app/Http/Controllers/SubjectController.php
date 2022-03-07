<?php

namespace App\Http\Controllers;

use App\Models\section;
use App\Models\subject;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function index()
    {
        return view('subjects.index', ['subjects'=>subject::all()]);
    }

    public function create()
    {
            return view('subjects.add', ['sections'=>section::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:subjects',
            'duree' => 'required|integer',
            'coeff' => 'required|integer',

        ], [
            'name.required'=>'La matière est obligatoire',
            'name.unique'=>'La matière existe déjà',
            'duree.required'=>'La durée est obligatoire',
            'duree.integer'=>'La durée doit contenir uniquement des chiffres',
            'coeff.required'=>'Le coefficient est obligatoire',
            'coeff.integer'=>'Le coefficient doit contenir uniquement des chiffres',

        ]);

        $subject_id = DB::table('subjects')->insertGetId([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $subject = subject::FindOrFail($subject_id);
        $section_id = $request->section;
        $subject->sections()->sync([$section_id => [
            'duree' => $request -> duree,
            'coefficient' => $request -> coeff,
            ]], false
        );
        return view('subjects.index', ['subjects'=>subject::all()]);
    }

    public function show(Request $request)
    {
        $subject=subject::FindOrFail($request->id);
        return view('subjects.show', ['subject'=>$subject]);
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
        $subject=subject::FindOrFail($request->id);
        $subject->delete();
        return view('subjects.index', ['subjects'=>subject::all()]);
    }
}

