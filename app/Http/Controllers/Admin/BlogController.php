<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::orderBy('id','desc')->get();

        return view('blogs.index',
        [
            'blogs' =>  $blogs,
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
                $imgName = Storage::putFile('public/blogImage',$request->file('image'));
            }else{
                $imgName = NULL;
            }
            $blog = new Blog();
            $blog->image = $imgName;
            $blog->title = $request->title;
            $blog->text = $request->text;
            $blog->user_id = Auth::user()->id;
            $blog->save();

            DB::commit();
            return redirect(route('blogs.index'));

        } catch (\Throwable $exception)
        {
            DB::rollBack();
            return back()->with('Fail',$exception->getMessage());
        }
    }

    public function show(Blog $blog)
    {
        //
    }

    public function edit(Blog $blog)
    {
        $blog = Blog::where('id',$blog->id)->first();

        return view('blogs.edit',
            [
                'blog' => $blog
            ]);
    }

    public function update(Request $request, Blog $blog)
    {
        if($request->hasFile('image')){
            $request->validate([
                'image'  => 'mimes:png,jpg,jpeg|max:3072',
            ]);
        }
        try {
            if($request->hasFile('image')){
                $imgName = Storage::putFile('public/blogImage',$request->file('image'));
            }else{
                $imgName = NULL;
            }
            $blog->image = $imgName;
            $blog->title = $request->title;
            $blog->text = $request->text;
            $blog->save();

            DB::commit();
            return redirect(route('blogs.index'));

        } catch (\Throwable $exception)
        {
            DB::rollBack();
            return back()->with('Fail',$exception->getMessage());
        }
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect(route('blogs.index'));
    }
}
