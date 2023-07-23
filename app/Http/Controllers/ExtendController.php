<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\SASController;
use App\Sasextenlog;
use App\extendusers;
use GuzzleHttp\Client;


class ExtendController extends Controller
{
    public function index(Request $request)
      
    {
     
        $id=$request->userid;
        $extendDays=$request->extendDays;
        $username=$request->username;
        $pppoename=$request->pppoename;
        $extendDays=$request->extendDays;
        $oltprofilesearch=array("11", "12", "13", "14","15");

           $sasprofile=array("1 Day Test","2 Days Test","3 Days Test","4 Days Test","5 Days Test");
        $sasprofileid=str_replace($oltprofilesearch,$sasprofile,$extendDays);
  

    
     
        $uuid = Str::uuid()->toString();
      
        //    dd($uuid,$id,$profile);

        $api = new SASController('91.106.63.13', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
	              
               
               'user_id' => $id,
               'profile_id' => $extendDays,
               'method' => "credit",
               'transaction_id' => $uuid,
              

               
                     ];
           $res2 = $api->post('user/extend', $payload);
        $input = $request->all();
            
        extendusers::create([
           
            'username' => $request['username'],
            'pppoename' => $request['pppoename'],
            'firstname' => $request['firstname'],
            'sasprofileid' => $request['extendDays'],
            

        ]);

 
             return redirect()->route('extend')->with("systemuser_added",'User has been Extended successfully');

        
}


public function discover(request $request)

{

  {
    
// $api=shell_exec("python3 dash.py");

// $data=json_encode($api);
$sasuser=$request->sasusername;

//connect to admin portal and list users
$api = new SASController('91.106.63.13', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
            
	                 'search' =>$sasuser
                     ];
	               
        $res = $api->post('index/user', $payload);
        $response = json_decode($res, true);


 return view('sas.extend', ['data' => $response['data']]);
    

    }


}



public function inde()
    {
        return view('sas.extend');
    }



}
