<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\User;
use App\Models\Eventt;
use App\Models\Wallet;
use App\Models\Comment;
use App\Models\Pending;
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
        $formFields = $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
            "phone" => "max:10",
            "role" => "required",
            "image" => "required",
        ]);
        $formFields['image'] = base64_encode(file_get_contents($request->file('image')));
        $formFields['password'] = bcrypt($formFields['password']);
        // dd($formFields);
        $id = User::create($formFields)->id;
        Wallet::create(['user_id' => $id, 'balance' => 0,]);
        return redirect("/dashboard/users")->with('addUser', "Success , You Added New User");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eventt  $eventt
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
            "phone" => "required",
            "role" => "required",
        ]);
        // dd($request->file);
        if ($request->image) {
            $formFields['image'] = base64_encode(file_get_contents($request->file('image')));
            $user->image = $formFields['image'];
        }
        $user->name = $formFields['name'];
        $user->email = $formFields['email'];
        $user->phone = $formFields['phone'];
        $user->role = $formFields['role'];
        $user->save();
        return redirect("/dashboard/users")->with('updateUser', "Success , You Updated The User");
    }

    public function viewDash()
    {
        $users = User::all();
        $vlounteers = Volunteer::all();
        $events = Eventt::all();
        $donations = Donation::all();
        $pendings = Pending::all();
        $wallets = Wallet::all();
        $comments = Comment::all();
        // $topDonors = Eventt::orderBy('amount', 'DESC')->latest()->take(7)->get();
        return view('dashboard.index', [
            'users' => $users,
            'vlounteers' => $vlounteers,
            'events' => $events,
            'donations' => $donations,
            'pendings' => $pendings,
            'wallets' => $wallets,
            'comments' => $comments,
        ]);
    }
    // public function topDonors($event)
    // {
    //     $donations = $event->donations;
    //     $sortedDonors = $donations->sortByDesc('amount');
    //     dd($sortedDonors);
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
