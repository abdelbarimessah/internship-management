<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('/user/signup');
    }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::guard('user')->attempt($credentials)) {
        //         // dd(request()->session()->get('url.intended'));
        //         // dd(request()->session()->get('url.intended'));
        //         return redirect()->intended('/userhome');
        //     } else {
            //         return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
            //     }
            // }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (!Auth::validate($credentials)) {
            return redirect()->route('user.login')
            ->withErrors(trans('auth.failed'));
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        
        Auth::login($user, $request->filled('remember'));
        
        if ($request->filled('remember')) {
            $this->setRememberMeExpiration($user);
        }
        
        return redirect()->intended('/userhome');
        // return $this->authenticated($request, $user);
    }

    public function showSignupForm()
    {
        return view('/user/signup');
    }

    public function signup(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:user',
            'password' => 'required|string|min:8',
            'establishment' => 'required|string',
            'city' => 'required|string',
            'speciality' => 'required|string',
            'cin' => 'required|string',
            'gender' => 'nullable|in:male,female',
            'phone_number' => 'nullable|string',
            'study_year' => 'nullable|integer',
        ]);

        $validatedData['password'] = bcrypt($request->password);
        user::create($validatedData);
        return redirect()->intended('/user/signup');
        
    }
    public function logout()
    {
        Auth::guard('user')->logout();
        // return redirect()->intended('user.signup');
        return view('/user/signup');
    }
}
