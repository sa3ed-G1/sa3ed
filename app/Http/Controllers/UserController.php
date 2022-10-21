<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('auth.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',

        ]);

        $newUser = new User;

        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);
        $newUser->save();
        Auth::login($newUser);

        return redirect('/');
    }


    //    log user out 
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
    //    log user in 
    public function login(Request $request)
    {
        $credentionals = ['email' => $request->emaillogin, 'password' => $request->passwordlogin];

        if (auth()->attempt($credentionals)) {
            $request->session()->regenerate();
            return redirect('/');
        } else {
            return back()->with('error', 'Your email or password are not correct');
        }
    }



    public function redirectToGoogle()

    {

        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()

    {

        try {

            $user = Socialite::driver('google')->user();
        } catch (Exception $e) {

            // return redirect('/redirect');
            return $e;
        }

        $finduser = User::where('google_id', $user->id)->first();

        if ($finduser) {

            Auth::login($finduser);

            return redirect()->intended('/');
        } else {

            $newUser                  = new User;

            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->image           = $user->avatar;
            $newUser->google_id       = $user->id;

            $newUser->save();

            Auth::login($newUser);

            // return redirect()->back();
            return redirect()->intended('/');
        }
    }
    // -------------------------gitgub
    public function github()
    {
        //send the user request to github
        return Socialite::driver('github')->redirect();
    }



    public function githubRedirect()
    {
        //git auth request back from github to authonticate user

        //gitting the user object from github
        $user = Socialite::driver('github')->user();

        // $githubUserInfoLogin = [

        //     'email' => $user->email,
        //     'password' => null,


        // ];

        // if (Auth::attempt($githubUserInfoLogin)) {
        //     session()->regenerate();
        //     return redirect('/');
        // }
        $githubUserInfoSignup = [
            'name' => $user->nickname,
            'email' => $user->email,
            'image' => $user->avatar,
            'github_id' => $user->id,

        ];
        // dd($user);

        $finduser = User::where('github_id', $user->id)->first();

        if ($finduser) {
            Auth::login($finduser);

            return redirect()->intended('/');
        } else {
            $signUser =  User::create($githubUserInfoSignup);
            session()->regenerate();
            auth()->login($signUser);
            return redirect('dashboard');
        }
    }

    // -------------------------gitgub


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
