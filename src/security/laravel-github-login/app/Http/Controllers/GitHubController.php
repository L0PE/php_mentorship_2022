<?php

namespace App\Http\Controllers;



use App\Models\User;
use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GitHubController extends Controller
{
    public function gitRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function gitCallback()
    {
        try {
            $user = Socialite::driver('github')->user();
            $searchUser = User::where('github_id', $user->getId())->first();

            if($searchUser){
                Auth::login($searchUser);

                return redirect('/dashboard');

            }else{
                $gitUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'github_id'=> $user->getId(),
                    'auth_type'=> 'github',
                    'password' => encrypt(Str::random())
                ]);
                Auth::login($gitUser);

                return redirect('/dashboard');
            }
        } catch (Exception $e) {
            if (App::environment('production')) {
                return abort(404);
            }

            dd($e);
        }
    }
}
