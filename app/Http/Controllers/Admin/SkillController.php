<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $skills = Skill::orderBy('id','desc')->get();

        return view('skills.index',
        [
            'skills' => $skills
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $skill = new Skill();
        $skill->title = $request->title;
        $skill->number = $request->number;
        $skill->category_id = $request->category_id;
        $skill->save();

        return redirect(route('skills.index'));
    }


    public function show(Skill $skill)
    {
        //
    }


    public function edit(Skill $skill)
    {
        //
    }

    public function update(Request $request, Skill $skill)
    {
        //
    }


    public function destroy(Skill $skill)
    {
        //
    }
}
