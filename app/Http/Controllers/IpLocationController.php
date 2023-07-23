<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class IpLocationController extends Controller
{
    public function index(Request $request)
    {
        if (Auth()->user()->role == 5 || Auth()->user()->role == 6 || Auth()->user()->role == 7 ) {
            return view('errors.401');
        }
        $client = new Client();
        $ip = $request->input('ip');

        
            $response = $client->request('GET', 'https://api.iplocation.net/?ip=' . $ip . '&delimiter=1', [
                'headers' => [
                    'Cookie' => 'PHPSESSID=4hafva7337qovv5155pcghib4v',
                ],
            ]);
            
            $locationInfo = $response->getBody()->getContents();
            $locationData = json_decode($locationInfo, true);
            // dd($locationData);
             $ip=$locationData['ip'];
             $country_name=$locationData['country_name'];
             $country_code2=$locationData['country_code2'];
             $isp=$locationData['isp'];


            return view('ip-location')->with(compact('ip', 'country_name', 'country_code2', 'isp'));
                
        
        
    }
}
