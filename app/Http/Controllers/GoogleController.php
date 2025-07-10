<?php


namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        // Ambil role_id untuk role 'user'
        $userRoleId = Role::where('name', 'user')->value('id');

        $user = User::where('email', $googleUser->getEmail())->first();

        if (!$user) {
            $user = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'password' => bcrypt('google-login'),
                'role_id' => $userRoleId,
                'company_code' => 'default',
                'status' => 1,
                'is_deleted' => 0,
                'created_by' => $googleUser->getName(),
                'created_date' => now(),
                'last_update_by' => $googleUser->getName(),
                'last_update_date' => now(),
            ]);
        }

        Auth::login($user);
        return redirect('/dashboard');
    }
}