<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
        
    //     if (Auth::guard('admin')->attempt($credentials)) {
    //         return redirect()->intended('/dash');
    //     }
    //     return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    // }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (!Auth::validate($credentials)) {
            return redirect()->route('admin.login')
            ->withErrors(trans('auth.failed'));
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        
        Auth::login($user, $request->filled('remember'));
        
        if ($request->filled('remember')) {
            $this->setRememberMeExpiration($user);
        }
        return redirect()->intended('/dash');
    }

    public function showSignupForm()
    {
        return view('admin.signup');
    }

    public function signup(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|unique:admins|max:255',
            'password' => 'required|string|min:8',
            'cin' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:255',
        ]);

        $validatedData['password'] = bcrypt($request->password);

        Admin::create($validatedData);

        return redirect()->intended('/admin/login');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        // return redirect()->intended('user.signup');
        return view('/admin/login');
    }
}
