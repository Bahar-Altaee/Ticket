<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\extendusers;


class ExtendlogController extends Controller
{
    public function index()
    {
        if (Auth()->user()->role == 5 || Auth()->user()->role == 6 || Auth()->user()->role == 7 || Auth()->user()->role == 33) {
            return view('errors.401');
        }
        $search = request('search');
        $extendusers = extendusers::where('username', 'like', '%' . $search . '%')
            ->orWhere('pppoename', 'like', '%' . $search . '%')
            ->orWhere('firstname', 'like', '%' . $search . '%')
            ->paginate(10);


       return view('log.extenduser', compact('extendusers','search'));
    }

    public function export()
    {
        if (Auth()->user()->role == 5 || Auth()->user()->role == 6 || Auth()->user()->role == 7 || Auth()->user()->role == 33) {
            return view('errors.401');
        }
        return Excel::download(new ExtendlogExport, 'extenduser.xlsx');
    }
}

