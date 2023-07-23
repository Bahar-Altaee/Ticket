<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('dashboard.index');

        $acp = new SASController('91.106.63.13', 'admin', 'Rs2020092323@@', 'acp');
$acp->login();
$res = $acp->get('advancedDashboard/subscribers', []);
$data = json_decode($res, true);
  
foreach ($data as $area);


// dd($area);
 return view('dashboard.index', compact('area'));
    }


    public function SystemUser()
    {
        return view('SystemUser.SysUser');


    }


  

    
}
