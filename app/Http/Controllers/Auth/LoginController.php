<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $input['email'],
            'password' => $input['password']
        ];

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            
            // Redirect berdasarkan role pengguna
            if ($user->is_admin == 1) {
                return redirect()->route('admin.home'); // Redirect admin ke dashboard admin
            } elseif ($user->role == 'receptionist') {
                return redirect()->route('dashboard'); // Redirect resepsionis ke dashboard resepsionis
            } else {
                return redirect('/'); // Redirect pengguna biasa ke homepage
            }
        } else {
            return redirect()->route('login')->with('error', 'Email atau Password salah');
        }
    }
}
