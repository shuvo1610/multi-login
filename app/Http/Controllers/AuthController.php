<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.reg');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'user_type' => 'required',
        ]);

        $user = new User;
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->user_type = $validatedData['user_type'];
        $user->save();
        return redirect()->route('login')->with('success', 'Registration successful. You can now log in.');
    }


    public function postlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $user = User::where('email', $request->email)->first();
        if (Auth::attempt($credentials)) {
            if ($user->user_type === 'admin') {
                // Redirect to the admin dashboard
                return redirect()->route('admin.dashboard');
            } elseif ($user->user_type === 'user') {
                // Redirect to the user dashboard
                return redirect()->route('user.dashboard');
            } elseif ($user->user_type === 'company') {
                // Redirect to the company dashboard
                return redirect()->route('company.dashboard');
            }
        }
        // If authentication fails, return to the login form
        return redirect()->route('login')->with('error', 'Login failed');
    }





    public function adminDashboard(){
        return view('dashboard.admindashboard');
    }


    public function userDashboard(){
        return view('dashboard.userdashboard');
    }

    public function companyDashboard(){
        return view('dashboard.company');
    }





}
