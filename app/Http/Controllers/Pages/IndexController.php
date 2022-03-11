<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Project;
use App\Models\Service;
use App\Models\User;
use App\Models\BlogCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id','desc')->get();
        $projects = Project::orderBy('id','desc')->get();
        $comments = Comment::orderBy('id','desc')->get();
        $blogs = Blog::orderBy('id','desc')->get();
        return view('pages.index',
        [
            'services' => $services,
            'projects' => $projects,
            'comments' => $comments,
            'blogs' => $blogs
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

    public function contactPost(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'text' => 'required'
            ]);
        Mail::send([], [],

            function ($message) use ($request) {
//                $message->from($request->email, $request->email);
                $message->to('anvarasgarov.dev@gmail.com');
                $message->setBody(
                    "Soyad,Ad: " . $request->name .
                    "<br />E-Poçt: " . $request->email .
                    "<br />Mətn: " . " " . $request->text . '', 'text/html');
                $message->subject($request->name . ' ' . 'mesaj gonderdi!');
                return $message;
            });



        return redirect()->back()->with('success', 'Mesajınız Gönderildi!');
    }

    public function comments()
    {
        return view('pages.comments');
    }

    public function commentsPost(Request $request)
    {
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->work = $request->work;
        $comment->text = $request->text;
        $comment->save();
        return redirect(route('comments'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('id','desc')->paginate(6);

        if (date('h') )
        {
            $blogCount = new BlogCount;
            $blogCount->blog_id = '1';
            $blogCount->save();
        }


        return view('pages.blog',
        [
            'blogs' => $blogs
        ]);
    }


    public function blogPost($title)
    {
        $blogs = User::join('blogs','users.id','=','blogs.user_id')->where('title',$title)->first();

        $get_blogs = Blog::orderBy('id','desc')->get();
        return view('pages.blog-post',
        [
            'blogs' => $blogs,
            'get_blogs' => $get_blogs,

        ]);
    }

    public function blogCountPost(Request $request)
    {


        return redirect(route('blog-post'));

    }
}
