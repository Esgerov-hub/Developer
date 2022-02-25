<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::orderBy('id','desc')->get();

        return view('projects.index',
        [
            'projects' => $projects
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $request->validate([
                'image'  => 'mimes:png,jpg,jpeg|max:3072',
            ]);
        }
        try {
            if($request->hasFile('image')){
                $imgName = Storage::putFile('public/projectImage',$request->file('image'));
            }else{
                $imgName = NULL;
            }
            $project = new Project();
            $project->image = $imgName;
            $project->title = $request->title;
            $project->text = $request->text;
            $project->url = $request->url;

            $project->save();

            DB::commit();
            return redirect(route('projects.index'));

        } catch (\Throwable $exception)
        {
            DB::rollBack();
            return back()->with('Fail',$exception->getMessage());
        }
    }


    public function show(Project $project)
    {
        //
    }


    public function edit(Project $project)
    {
        try {
           $project = Project::where('id',$project->id)->first();

            return view('projects.edit',
                [
                    'project' => $project
                ]);

        } catch (\Throwable $exception)
        {
            return back()->with('Fail',$exception->getMessage());
        }
    }


    public function update(Request $request, Project $project)
    {
        if($request->hasFile('image')){
            $request->validate([
                'image'  => 'mimes:png,jpg,jpeg|max:3072',
            ]);
        }
        try {
            if($request->hasFile('image')){
                $imgName = Storage::putFile('public/projectImage',$request->file('image'));
            }else{
                $imgName = NULL;
            }

            $project->image = $imgName;
            $project->title = $request->title;
            $project->text = $request->text;
            $project->url = $request->url;

            $project->save();

            DB::commit();
            return redirect(route('projects.index'));

        } catch (\Throwable $exception)
        {
            DB::rollBack();
            return back()->with('Fail',$exception->getMessage());
        }
    }

    public function destroy(Project $project)
    {
        try {
            $project->delete();

            return redirect(route('projects.index'));

        } catch (\Throwable $exception)
        {
            return back()->with('Fail',$exception->getMessage());
        }
    }
}
