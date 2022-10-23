<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Eventt;
use App\Models\Wallet;
use App\Models\Pending;
use App\Models\Donation;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Events\Validated;

class ManagerController extends Controller
{

    public function index(User $user)
    {
        if (Gate::allows('islogged', $user)) {

            $user = auth()->user();
            $event = auth()->user()->eventts;
            // $volunteer = auth()->user()->volunteer;
            $donations = auth()->user()->donations;
            // $manager = User::where('role', 'manager');
            return view('manager.index', ['user' => $user, 'event' => $event, 'donations' => $donations]);
        } else {
            return redirect('/register');
        }
    }

    public function create()
    {
    }


    public function store(Request $request)
    {
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

        Eventt::create($formFields);
        return redirect("/profile")->with('addEvent', "You Successfully Added an Event!");
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $formFields = $request->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "max:10"
        ]);
        // dd($request->file);
        if ($request->image) {
            $formFields['image'] = base64_encode(file_get_contents($request->file('image')));
            $user->name = $formFields['name'];
            $user->email = $formFields['email'];
            $user->phone = $formFields['phone'];
            $user->image = $formFields['image'];
            $user->save();
            // $user->update($formFields);
        } else {
            $user->name = $formFields['name'];
            $user->email = $formFields['email'];
            $user->phone = $formFields['phone'];
            $user->save();
        }
        return redirect("/profile")->with('updateUser', "You Successfully Updated Your Info!");
    }

    public function apply(Request $request)
    {
        $formFields = $request->validate([
            'user_id'  => "required",
            'message' => "required",
        ]);

        Pending::create($formFields);
        return redirect('/contact');
    }
    public function updateEvent(Request $request)
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
        // dd($formFields['title']);
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
        return back();
    }
    // change is published
    // get all vol and add amount
    public function endEvent(Request $request)
    {
        $volunteers = Volunteer::where('eventt_id', $request->id)->get();
        foreach ($volunteers as $volunteer) {
            Wallet::where('user_id', $volunteer->user_id)->increment('balance', $request->amount);
            // dd($add[0]);
            // $add[0];
            // $stmt =  $volunteer->user->wallet->increment('balance', $request->amount);
            // $stmt->save();
        }
        Eventt::where('id', $request->id)->update(['publish' => 0]);
        // dd("hi Die");
        // $volunteers->save();
        return back();
    }
}
