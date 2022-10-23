<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Eventt;
use App\Models\Donation;
use App\Models\Volunteer;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagerController extends Controller
{

    public function index(User $user)
    {
        $user = auth()->user();
        $event = auth()->user()->eventts;
        // $volunteer = auth()->user()->volunteer;
        $donations = auth()->user()->donations;
        // $manager = User::where('role', 'manager');
        return view('manager.index', ['user' => $user, 'event' => $event, 'donations' => $donations]);
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

    public function destroy($id)
    {
        //
    }
}
