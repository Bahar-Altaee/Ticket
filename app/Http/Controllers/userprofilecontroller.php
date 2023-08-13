<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userprofilecontroller extends Controller
{
    public function index()

    {
        
        return view ('user-profile');
    }

        public function edit()

    {
        
        return view ('SystemUser.edit_user_profile');
    }



}
