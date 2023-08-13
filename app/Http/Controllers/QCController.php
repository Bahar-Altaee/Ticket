<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\zteactivation;

class QCController extends Controller
{
    public function index(){
 
      
        $zteactivation = zteactivation::where('created_at', '>=', now()->subDays(10))->get();
        // dd($zteactivation);
        return view('log.activationlog', compact('zteactivation')); 

    }
}
