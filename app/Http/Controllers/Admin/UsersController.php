<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function index()
    {

        return view('users.index');
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

        $request->validate([
//            'image' => 'required|max:512',
            'name' => 'required|max:25',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        try {
            $user = new User();
            $user->image = $request->image;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role_id = $request->role_id;
            $user->status_id = $request->status_id;
            $user->password =Hash::make($request['password']);
            $user->confirm_password = Hash::make($request['confirm_password']);
            $user->save();

            DB::commit();
            return redirect(route('register'));

        } catch (\Throwable $exception)
        {
            DB::rollBack();
            return back()->with('Fail',$exception->getMessage());
        }
    }


    public function show(User $user)
    {

    }
    public function edit(User $user)
    {

    }


    public function update(Request $request, User $user)
    {

    }

    public function destroy(User $user)
    {

    }
}
