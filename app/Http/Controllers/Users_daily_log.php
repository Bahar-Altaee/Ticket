<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users_daily_logs;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Users_daily_log extends Controller
{
    public function index(){
          

         $user = Auth::user();
         $currentDate = Carbon::today();
         $employeeData = Users_daily_logs::where('emploee', $user->name)
         ->whereDate('created_at', $currentDate)
         
         ->get();

         





        return view ('SystemUser.users_daily_log',compact('employeeData'));
    }
}
