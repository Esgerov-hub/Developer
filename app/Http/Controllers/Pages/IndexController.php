<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('pages.index',
        [
            'services' => $services
        ]);
    }

    public function about()
    {
        $abouts = About::all();

        return view('pages.about',
        [
            'abouts' => $abouts
        ]);
    }

    public function service()
    {
        $services = Service::all();
        return view('pages.service',
        [
            'services' => $services
        ]);
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
