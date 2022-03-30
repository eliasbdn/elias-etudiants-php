<?php

namespace App\Http\Controllers;

use App\Models\program;
use App\Models\section;
use App\Models\subject;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    public function index()
    {
        return view('programs.index', ['programs'=>program::all()]);
    }

    public function create()
    {
            return view('programs.add', ['subjects'=>subject::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $program_id = DB::table('programs')->insertGetId([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $program = program::FindOrFail($program_id);
        $subject_id = $request->subject;
        // $program->sections()->sync([$subject_id => [
        //     'duree' => $request -> duree,
        //     'coefficient' => $request -> coeff,
        //     ]], false
        // );
        return view('programs.index', ['programs'=>program::all()]);
    }

    public function show(Request $request)
    {
        $program=subject::FindOrFail($request->id);
        return view('programs.show', ['program'=>$program]);
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

    public function edit(Request $request)
    {
        $subject = subject::findOrFail($request->id);
        return view('subjects.modify',['subject'=>$subject]);
    }

    public function update(Request $request)
    {
        $subject = subject::findOrFail($request->id);
        $subject->name = $request->name;
        $subject->save();
        return view('subjects.index', ['subjects'=>subject::all()]);
    }
}

