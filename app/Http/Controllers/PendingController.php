<?php

namespace App\Http\Controllers;

use App\Models\Pending;
use Illuminate\Http\Request;

class PendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Pending::all();

        return view('dashboard.pendings', ['pendings' => $events]);
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
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pending  $pending
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pending $pending)
    {
        //
    }
}
