<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SASController;
use App\Sasextenlog;
use GuzzleHttp\Client;

class SasuserpostController extends Controller
{
    public function sasuserpost(request $request)
    {
    
$expiration=$request->expiration;
$id=$request->userid;
$parent_id=$request->parent_id;
$pppoename=$request->pppoename;
$firstname=$request->firstname;
$oldexpiration=$request->oldexpiration;
$username=$request->username;



$api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
	              
               
               'id' => $id,
               'parent_id' => $parent_id,
               'expiration' => $expiration,
               
                     ];
	                 
        $res2 = $api->post('user/expiration', $payload);

        $input = $request->all();
            Sasextenlog::create([
           
            'pppoename' => $request['pppoename'],
            'firstname' => $request['firstname'],
            'expiration' => $request['expiration'],
            'username' => $request['username'],
            'oldexpiration' => $request['oldexpiration']
        ]);

        

return redirect()->route('sasuser')->with("systemuser_added",'User has been Updated successfully');
    

    

    }

}
