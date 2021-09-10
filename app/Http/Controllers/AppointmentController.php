<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Login;

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


        $done = $user->save();
        

        return view('payment');

        
    }

    public function about(){
        return view('aboutus');
    }

    public function covid(){
        return back();
    }

    public function profile1(){
        return view('profile1');
    }

    public function profile2(){
        return view('profile2');
    }
    
    public function profile3(){
        return view('profile3');
    }

    public function login(){
        return view('login');
    }

    public function verify(Request $request){
        
        $user = Login::where('name', '=', $request->name)->first();
        if($user != null){
            $request->session()->put('name', $user->name);
            return view('index');
        }
        return back()->with('error', 'Write your information properly');

    }
    
    public function logout(Request $request){
        
        $request->session()->forget('name');
        return back();

    }


}
