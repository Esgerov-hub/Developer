<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{

    public function index()
    {
        $abouts = About::orderBy('id','desc')->get();

        return view('abouts.index',
        [
            'abouts' => $abouts
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        try {

            $about = new About();
            $about->title = $request->title;
            $about->description = $request->description;
            $about->job = $request->job;
            $about->text = $request->text;

            $about->start_date = Carbon::parse($request['start_date'])->format('Y-m-d');
            $about->end_date = Carbon::parse($request['end_date'])->format('Y-m-d');
            $about->save();

            DB::commit();
            return redirect(route('abouts.index'));

        } catch (\Throwable $exception)
        {
            DB::rollBack();
            return back()->with('Fail',$exception->getMessage());
        }
    }


    public function show(About $about)
    {
        //
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $about = About::where('id',$about->id)->first();

        return view('abouts.edit',
            [
               'about' => $about
            ]);
    }

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        try {

            $about->title = $request->title;
            $about->description = $request->description;
            $about->job = $request->job;
            $about->text = $request->text;

            $about->start_date = Carbon::parse($request['start_date'])->format('Y-m-d');
            $about->end_date = Carbon::parse($request['end_date'])->format('Y-m-d');
            $about->save();

            DB::commit();
            return redirect(route('abouts.index'));

        } catch (\Throwable $exception) {
            DB::rollBack();
            return back()->with('Fail', $exception->getMessage());
        }
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        try {
             $about->delete();
            return redirect(route('abouts.index'));

        } catch (\Throwable $exception)
        {
            return back()->with('Fail',$exception->getMessage());
        }
    }
}
