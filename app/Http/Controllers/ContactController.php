<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;



class ContactController extends Controller
{
    public function create(){
        return view('contact');
    }

    public function store(){
        // request()->validate([
        //     'subject'=> ['required', 'min:3'],
        //     'message'=> ['required', 'min:5'],
        // ]);

        $subject = request()->subject;
        $message = request()->message;
        $us=Auth::user()->id;

        Contact::create([
            'subject'=>$subject,
            'message'=>$message,
            'user_id'=>$us,
            
        ]);
        return to_route('nowhere');
    }
}
