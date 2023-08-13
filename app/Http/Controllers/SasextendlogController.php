<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sasextenlog;


class SasextendlogController extends Controller
{
        public function index()
    {
        if (Auth()->user()->role == 5 || Auth()->user()->role == 6 || Auth()->user()->role == 7 || Auth()->user()->role == 33) {
                return view('errors.401');
            }
            $search = request('search');
            $sasextenlogs = Sasextenlog::where('username', 'like', '%' . $search . '%')
                ->orWhere('pppoename', 'like', '%' . $search . '%')
                ->orWhere('firstname', 'like', '%' . $search . '%')
                ->paginate(10);
    
    
         
         return view('log.extenduserlog', compact('sasextenlogs','search')); 
        
        
        
        }

}


