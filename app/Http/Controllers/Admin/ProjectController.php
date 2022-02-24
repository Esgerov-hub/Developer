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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
