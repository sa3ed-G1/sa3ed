<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Eventt;
use App\Models\Donation;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagerController extends Controller
{

    public function index(User $user)
    {
        $user = auth()->user();
        $event = auth()->user()->eventts();
        $donations = auth()->user()->donations();
        // $manager = User::where('role', 'manager');
        return view('manager.index', ['user' => $user, 'event' => $event, 'donations' => $donations]);
    }
    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
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
        //
    }

    public function destroy($id)
    {
        //
    }
}
