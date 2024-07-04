<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Illuminate\Support\Facades\Auth;
class DonationController extends Controller
{
    public function index(){
        $donations = Donation::all();
        
        return view('admin.donationlist',['donations'=>$donations]);
    }

  
    public function create(){
        return view('donation.index');
    }
    public function store()
    {

        

        $amount = request()->amount;
        $us=Auth::user()->id;

        Donation::create([
            'amount'=>$amount,
            'user_id'=>$us,
            
        ]);
        return to_route('nowhere');
    }
}
