<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Wallet;
use App\Models\Offer_User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    public function add($id) {
        Offer_User::create(['user_id' => auth()->user()->id , 'offer_id' => $id]);
        $wallet = Wallet::find(auth()->user()->id);
        $offer = Offer::find($id);
        $wallet->balance = $wallet->balance - $offer->point;
        $wallet->save();
        return redirect("/point")->with('addOffer' , "Thanks");
    }
}
