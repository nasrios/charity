<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationListController extends Controller
{
    public function index(){
        return view('admin.donationlist');
    }
}
