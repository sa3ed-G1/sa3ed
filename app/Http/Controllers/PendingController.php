<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pending;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendings = Pending::where('status', 0)->get();
        $pendingsDone = Pending::where('status', 1)->get();



        return view('dashboard.pendings', ['pendings' => $pendings, 'pendingsDone' => $pendingsDone]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pending  $pending
     * @return \Illuminate\Http\Response
     */
    public function show(Pending $pending)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pending  $pending
     * @return \Illuminate\Http\Response
     */
    public function edit(Pending $pending)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pending  $pending
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $user = User::find($request->user_id);
        $user->role = 'manager';
        $user->save();
        $pending =  Pending::find($request->id);
        $pending->status = 1;
        $pending->save();
        // $pending->delete();

        return Redirect('/dashboard/pendings');
    }

    public function destroy($id)
    {
        Pending::find($id)->delete();
        return back();  
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pending  $pending
     * @return \Illuminate\Http\Response
     */
    public function unassign($id)
    {
        $pending = Pending::find($id);
        $user = User::find($pending->user_id);
        $user->role = "user";
        $user->save();
        $pending->forceDelete();
        return redirect('/dashboard/pendings');
    }
}
