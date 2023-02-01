<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        return view('users.users', [
            'header'    => 'Users Management',
            'users'     => User::all()
        ]);
    }

    public function form()
    {
        return view('users.form',  [
            'header'    => 'Add User',
        ]);
    }

    public function store(Request $request)
    {
        // for validation
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        // for storing after validation
        User::create([
            'name'  => $request->name,
            'email'  => $request->email,
            'password'  => Hash::make($request->password),
        ]);

        session()->flash('status', 'Added user successfully!');

        // redirect to list of users
        return redirect('/users');
    }


    public function show($id)
    {
       $user = User::find($id);

        return view('users.form', [
                    'header'    =>'Update User',
                    'user'      =>$user
             ]);

    }


    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
