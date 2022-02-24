<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id','desc')->get();
        $projects = Project::orderBy('id','desc')->get();

        return view('pages.index',
        [
            'services' => $services,
            'projects' => $projects
        ]);
    }

    public function about()
    {
        $abouts = About::orderBy('id','desc')->get();

        return view('pages.about',
        [
            'abouts' => $abouts
        ]);
    }

    public function service()
    {
        $services = Service::orderBy('id','desc')->get();
        return view('pages.service',
        [
            'services' => $services
        ]);
    }

    public function portfolio()
    {
        $projects = Project::orderBy('id','desc')->get();
        return view('pages.portfolio',
        [
            'projects' => $projects
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
