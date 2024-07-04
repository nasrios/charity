<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Donation;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function dashboard(){
        $id = Auth::user()->id;
        $donations = DB::table('donations')->where('user_id',$id)->get();

        return view('guest.dashboard',['donations'=>$donations]);
    }

    public function indexDonations(){
        $id = Auth::user()->id;
        $donations = DB::table('donations')->where('user_id',$id)->get();
        
        
        
        return view('guest.donationlist',['donations'=>$donations]);
    }
      

}