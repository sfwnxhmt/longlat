<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function edit_profile(){
        return view('edit_profile');

    }

    public function update_profile(Request $request){
        return view('edit_profile');
    }
}
