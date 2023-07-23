<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SASController;
use App\Sasextenlog;
use GuzzleHttp\Client;



class sasuserController extends Controller
{
    
    public function index()
    {
        return view('sas.user');
    }
    
    public function sasuserapi(request $request)
    {
    
// $api=shell_exec("python3 dash.py");

// $data=json_encode($api);
$sasuser=$request->sasusername;

//connect to admin portal and list users
$api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
            
	                 'search' =>$sasuser
                     ];
	               
        $res = $api->post('index/user', $payload);
$response = json_decode($res, true);


 return view('sas.user', ['data' => $response['data']]);
    

    }



}
