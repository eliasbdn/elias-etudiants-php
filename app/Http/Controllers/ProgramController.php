<?php

namespace App\Http\Controllers;

use App\Mail\section_createdmail;
use App\Models\section;
use App\Models\subject;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\mail;

class SectionController extends Controller
{

    public function index()
    {
        return view('sections.index', ['sections'=>section::all()]);
    }

    public function create()
    {
        return view('sections.add', ['sections'=>section::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        DB::table('sections')->insert([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        mail::to('elias.boudina@my-digital-school.org')->send(new section_createdmail($request->name));
        return view('sections.index', ['sections'=>section::all()]);
    }

    public function show(Request $request)
    {
        $section=section::FindOrFail($request->id);
        return view('sections.show', ['section'=>$section]);
    }



    /** public function edit(section $section)
    * {
    *      //
    *   }
    *
    *public function update(Request $request, section $section)
    *{
    *    //
    *}
    */

    public function destroy(Request $request)
    {
        $section=section::FindOrFail($request->id);
        $section->delete();
        return view('sections.index', ['sections'=>section::all()]);
    }

    public function associate(Request $request)
    {
        $section=section::FindOrFail($request->id);
        return view('sections.associate', [
            'section' =>$section,
            'subjects'=>subject::all()]);
    }

    public function associateform(Request $request)
    {
        $section=section::FindOrFail($request->sectionID);
            $subject=$request->matiere;
            $section->subjects()->sync([$subject=>[
                'duree'=>$request->duree,
                'coefficient'=>$request->coeff]], false);
                return view('sections.show', ['section'=>$section]);
    }
}
