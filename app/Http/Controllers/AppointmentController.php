<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AppointmentController extends Controller
{
    
    public function appointment(){
        return view('appointment');
    }

    public function appointmented(Request $request){
        
        $user = new User;

        $user->name=$request->user;
        $user->email=$request->email;
        $user->contact=$request->contact;
        $user->department=$request->department;
        $user->date=$request->date;
        $user->comment=$request->comment;

        $user->save();

        return back()->with('success', 'Your Information Submitted Successful');
    }
    
}
