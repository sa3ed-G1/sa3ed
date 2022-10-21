<?php

namespace App\Http\Controllers;

use App\Models\Eventt;
use Illuminate\Http\Request;

class EventtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Eventt::all();
        return view('dashboard.events', ['events' => $events]);
    }
    public function showAll()
    {
        $events = Eventt::all();
        return view('/events', ['events' => $events]);
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
            "title" => "required",
            "description" => "required",
            "location" => "required",
            "tags" => "required",
            "date" => "required",
            "city" => "required",
            "duration" => "required",
            "capacity" => "required",
            "thumbnail" => "required",
            "banner" => "required",
            "user_id" => "required",
        ]);

        $formFields['thumbnail'] = base64_encode(file_get_contents($request->file('thumbnail')));
        $formFields['banner'] = base64_encode(file_get_contents($request->file('banner')));

        // dd($request->file('imageLink'));


        Eventt::create($formFields);
        return redirect("/dashboard/events");
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eventt  $eventt
     * @return \Illuminate\Http\Response
     */
    public function show(Eventt $eventt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eventt  $eventt
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventt $eventt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eventt  $eventt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventt $eventt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eventt  $eventt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eventt $eventt)
    {
        //
    }
}
