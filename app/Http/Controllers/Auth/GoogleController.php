<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class GoogleController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        // Log the redirect URL for debugging
        \Illuminate\Support\Facades\Log::info('Redirecting to Google OAuth');
        
        // Use with-scopes approach and set approval_prompt to force
        return Socialite::driver('google')
            ->with([
                'prompt' => 'select_account consent',
                'access_type' => 'offline',
                'include_granted_scopes' => 'true',
            ])
            ->scopes(['openid', 'profile', 'email'])
            ->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        try {
            // Debugging: Log the callback URL
            \Illuminate\Support\Facades\Log::info('Google callback URL: ' . request()->fullUrl());
            
            $googleUser = Socialite::driver('google')->stateless()->user();
            
            // Debugging: Log the Google user data (without sensitive info)
            \Illuminate\Support\Facades\Log::info('Google user data received', [
                'id' => $googleUser->id,
                'name' => $googleUser->name,
                'email' => $googleUser->email,
            ]);
            
            // Check if user already exists
            $user = User::where('google_id', $googleUser->id)->first();
            
            if (!$user) {
                // Check if user with same email exists
                $user = User::where('email', $googleUser->email)->first();
                
                if (!$user) {
                    // Create a new user
                    $user = User::create([
                        'name' => $googleUser->name,
                        'email' => $googleUser->email,
                        'google_id' => $googleUser->id,
                        'password' => bcrypt(Str::random(16)), // Generate random password
                    ]);
                    
                    \Illuminate\Support\Facades\Log::info('New user created with Google', ['user_id' => $user->id]);
                } else {
                    // Update existing user with Google ID
                    $user->update([
                        'google_id' => $googleUser->id,
                    ]);
                    
                    \Illuminate\Support\Facades\Log::info('Existing user linked with Google', ['user_id' => $user->id]);
                }
            }
            
            // Login the user
            Auth::login($user);
            
            // Redirect based on user role
            if ($user->is_admin == 1) {
                return redirect()->route('admin.home'); // Redirect admin to admin dashboard
            } elseif ($user->role == 'receptionist') {
                return redirect()->route('dashboard'); // Redirect resepsionis ke dashboard resepsionis
            } else {
                // Default redirect to homepage for regular users
                return redirect('/');  // Redirect to homepage
            }
            
        } catch (Exception $e) {
            // Log the detailed error for debugging
            \Illuminate\Support\Facades\Log::error('Google login failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return redirect()->route('login')
                ->with('error', 'Google login failed: ' . $e->getMessage());
        }
    }
}
