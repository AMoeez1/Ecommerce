<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function showRegister()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register(Request $request)
    {
     $request->validate([
        'name' => "required",
        'email' => "required|email",
        'password' => "required|min:6",
        'address' => "required",
        'phone' => "required|min:10|max:14",
        'gender' => "required",
        'dob' => "required"
     ]);

     $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'address' => $request->address,
        'phone' => $request->phone,
        'gender' => $request->gender,
        'dob' => $request->dob
     ]);
     if($user){
        Auth::login($user);
        return redirect()->route('home')->with('Res', "Registered Successfully");
     } else {
        return back()->withErrors(['error' => "Error Registering"]);
     }
    }

    public function showLogin()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => "required|email",
            'password' => "required|min:6"
        ]);
        $credentials = $request->only('email', 'password');
        if($credentials){
            if(Auth::attempt($credentials)){
                return redirect()->route('home')->with('Res', "Login Successfully");
            } else {
                return back()->withErrors(['error' => "Error"]);
            }
        } else {
            return back()->withErrors(['error' => "Invalid Credentials"]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
