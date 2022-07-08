<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments = Comment::all();
        return view('layouts.index',
            [
                'comments' => $comments
            ]);

    }

    public function delete($id)
    {

        Comment::where('id',$id)->delete();
        return redirect(route('home'));

    }

    public function contact()
    {
        $contacts = Contact::orderBy('id','desc')->get();
        return view('layouts.contact',compact('contacts'));
    }

    public function contactDelete($id)
    {

        Contact::where('id',$id)->delete();
        return redirect(route('admin.contact'));

    }
}
