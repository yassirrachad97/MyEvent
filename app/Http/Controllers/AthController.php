<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AthController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function index(Request $request)
    {
        $users = User::all();
        return view('backOffice.users', compact('users'));
    }

    public function softDelete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        Session::flash('success', 'User deleted successfully!');
        return redirect()->route('user.index');
    }



    public function login()
    {

        $validated = request()->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'role_id' => 'required',
        ]);


        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role_id' => $validated['role_id'],
        ]);


        Session::flash('success', 'Account created successfully!');
        return redirect()->route('auth.login');
    }

    public function signIn(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

       if(Auth()->Attempt($validated)){

           request()->session()->regenerate();
           return redirect()->route('home');

        }

    return redirect()->route('auth.login')->withErrors([
        'email' => 'no matching user found with provided email and password'    ]);
}


public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }

}
