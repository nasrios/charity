<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class GuestListController extends Controller
{

    public function index(){
        $guests = User::all();
        return view('admin.guestlist',['guests'=>$guests]);
    }

    public function destroy($guestId)
    {
        $guest = User::find($guestId);
        $guest->delete();

        //Post::where('id',$postId);

        return to_route('guests.index');
    }

    
}
