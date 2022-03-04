<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $services = Service::orderBy('id','desc')->get();

        return view('services.index',
            [
                'services' => $services
            ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $service = new Service();
        $service->title = $request->title;
        $service->text = $request->text;
        $service->save();

        return redirect(route('services.index'));
    }


    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $service = Service::where('id',$service->id)->first();

        return view('services.edit',
            [
                'service' => $service
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->title = $request->title;
        $service->text = $request->text;
        $service->save();

        return redirect(route('services.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect(route('services.index'));
    }
}
