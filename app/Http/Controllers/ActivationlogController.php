<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\zteactivation;
use Illuminate\Support\Facades\Auth;

class ActivationlogController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->role == 5 || Auth::user()->role == 6 || Auth::user()->role == 7 || Auth::user()->role == 33) {
            return view('errors.401');
        }

        $search = $request->input('search');

        $activation = zteactivation::where('username', 'like', '%' . $search . '%')
            ->orWhere('firstname', 'like', '%' . $search . '%')
            ->paginate(10);

        return view('log.activelog', compact('activation', 'search'));
    }
}
