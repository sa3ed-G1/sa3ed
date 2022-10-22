<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role', 'user')->get();
        $managers = User::where('role', 'manager')->get();
        return view('dashboard.users', ['users' => $users, 'managers' => $managers]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
            "role" => "required",
            "image" => "required",
        ]);
        $formFields['image'] = base64_encode(file_get_contents($request->file('image')));
        $formFields['password'] = bcrypt($formFields['password']);
        // dd($formFields);
        User::create($formFields);
        return redirect("/dashboard/users")->with('addUser', "Success , You Added New User");
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eventt  $eventt
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('dashboard.editUser', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eventt  $eventt
     * @return \Illuminate\Http\Response
     */
    // public function edit(Eventt $eventt)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eventt  $eventt
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        $formFields = $request->validate([
            "name" => "required",
            "email" => "required",
            "role" => "required",
        ]);
        // dd($request->file);
        if ($request->image) {
            $formFields['image'] = base64_encode(file_get_contents($request->file('image')));
            $user->name = $formFields['name'];
            $user->email = $formFields['email'];
            $user->role = $formFields['role'];
            $user->image = $formFields['image'];
            $user->save();
            // $user->update($formFields);
        } else {
            $user->name = $formFields['name'];
            $user->email = $formFields['email'];
            $user->role = $formFields['role'];
            $user->save();
            // $user->update($formFields);
        }
        // dd($formFields);
        return redirect("/dashboard/users")->with('updateUser', "Success , You Updated The User");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eventt  $eventt
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Eventt $eventt)
    // {
    //     //
    // }
    // public function showAll()
    // {
    //     $events = Eventt::all();
    //     return view('/events', ['events' => $events]);
    // }

    public function donate(Request $request, $id)
    {
        $donation = new Donation;

        $donation->user_id = $request->user_id;
        $donation->eventt_id = $id;
        $donation->amount = $request->amount;
        $donation->payment_info = "Cash";
        $donation->save();

        return redirect('single-event/' . $id)->with('donate', 'Thanks For Donation');
    }
    public function volunteer(Request $request, $id)
    {
        $volunteer = new Volunteer;

        $volunteer->user_id = $request->user_id;
        $volunteer->eventt_id = $id;
        $volunteer->save();

        return redirect('single-event/' . $id)->with('volunteer', 'You Volunteer In This Event Now');
    }
}
