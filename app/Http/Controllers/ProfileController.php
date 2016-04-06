<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User as User;
use Auth;


class ProfileController extends Controller
{

	public function index(){

		return view('profile.index');
	}

    /**
     * Shows a single profile of the current user
     *
     * @return Profile/show.blade.php
     * @return Request with Profile of current user_id
     */
    public function show($id){

    	// With Auth::user find the current user
        $user = User::with('profile')->find(Auth::user()->id);
        // Saves the profile from the current user in variable 
        $profile = $user->profile;
        // Returns the view and gives two different variables for the view ($profile), ($user)
        return view('profile.show')->with('profile', $profile)->with('user',$user);
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function edit($id){
    	// With Auth::user find the current user
        $user = User::with('profile')->find(Auth::user()->id);
        // Saves the profile from the current user in variable 
        $profile = $user->profile;
        // Returns the view and gives two different variables for the view ($profile), ($user)
        return view('profile.edit')->with('profile', $profile)->with('user', $user);
    }

    public function update(Request $request, $id){
    	// With Auth::user find the current user
        $user = User::with('profile')->find(Auth::user()->id);
        // Saves the profile from the current user in variable 
        $profile = $user->profile;
        // Get all the Input from the edit form
        $input = $request->all();
        // Saves the new input
        $profile->fill($input)->save();
        // Shows a message for the user
	   
	    // Redirecton to user informations
	    return view('profile.show')->with('profile', $profile)->with('user', $user);
    }

    public function destroy($id){

    }
}
