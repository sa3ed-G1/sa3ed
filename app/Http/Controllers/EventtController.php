<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Carbon\Carbon;
use Tests\TestCase;
use App\Models\User;
use App\Models\Eventt;
use Illuminate\Http\Request;
use Illuminate\Console\Scheduling\Event;

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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function daysLeft($id)
    {
        $date =  Carbon::parse($id);
        $dateNew =  $date->format('Y-m-d');
        return  Carbon::now()->diffInDays($dateNew, false);
    }
    public function parseDate($date)
    {
        $date =  Carbon::parse($date);
        return $date;
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
    public function update(Request $request)
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


        ]);
        // dd($request->banner);
        $event =  Eventt::find($request->id);
        if ($request->banner) {
            # code...
            $formFields['banner'] = base64_encode(file_get_contents($request->file('banner')));
            $event->banner = $formFields['banner'];
        }
        if ($request->thumbnail) {
            $formFields['thumbnail'] = base64_encode(file_get_contents($request->file('thumbnail')));
            $event->thumbnail = $formFields['thumbnail'];
        }


        $event->title = $formFields['title'];
        $event->description = $formFields['description'];
        $event->location = $formFields['location'];
        $event->tags = $formFields['tags'];
        $event->date = $formFields['date'];
        $event->city = $formFields['city'];
        $event->duration = $formFields['duration'];
        $event->capacity = $formFields['capacity'];

        $event->save();
        // Eventt::where('id', $request->id)->update($formFields);
        return redirect('/dashboard/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eventt  $eventt
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Eventt::find($id)->delete();
        return redirect('/dashboard/events');
    }
    public function showAll(Request $request)
    {
        $search = $request->search;
        $testt = Eventt::where('title' , 'like', '%'. $search . '%')->get();
        if($search){
            
            return view('/events', ["events" => $testt]);
        }
        $events = Eventt::all();
        return view('/events', ['events' => $events]);
    }
    public function show_event($id)
    {
        $event = Eventt::find($id);

        $managerId = $event->user_id;

        $eventManager = User::find($managerId);

       $comment = Comment::where('eventt_id', $id)->get();
        return view('single-event', ['comments' => $comment])->with('singleEvent', $event);
    }
}
