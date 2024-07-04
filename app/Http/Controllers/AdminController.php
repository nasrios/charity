<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        $guests = User::all();
        return view('admin.dashboard',['guests'=>$guests]);

        
        



    }
}
