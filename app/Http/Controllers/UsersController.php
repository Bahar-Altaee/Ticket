<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Carbon\Carbon;


class UsersController extends Controller
{
    public function index()
    {

        if (Auth()->user()->role == 5 || Auth()->user()->role == 6 || Auth()->user()->role == 7) {
            return view('errors.401');
        }
        return view('getontdetails');
    }


    public function sasandont(request $request)
    {
        if (Auth()->user()->role == 5 || Auth()->user()->role == 6 || Auth()->user()->role == 7) {
            return view('errors.401');
        }
        $ontids = $request->ontids;
        $ontids = substr($ontids, 4);
        $oltid = $request->oltid;


        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://10.80.10.5:18080/cmsexc/ex/netconf',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '<?xml version="1.0" encoding="UTF-8"?>

<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">

<soapenv:Body>

<auth message-id="0">

<login>

<UserName>noc</UserName>

<Password>OAM@hala1</Password>

</login>

</auth>

</soapenv:Body>

</soapenv:Envelope>

',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: text/xml;charset=ISO-8859-1',

            ),
        ));

        $response = curl_exec($curl);
        $xmlObject = simplexml_load_string($response);
        $json = json_encode($xmlObject);
        $phpDataArray = json_decode($json, true);
// return $phpDataArray;
        foreach ($phpDataArray as $data) {
            foreach ($data as $d) {

            }
        }

//Replace ONT
        $token = $d['SessionId'];
//  get ont information
//dd($token);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://10.80.10.5:18080/cmsexc/ex/netconf',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '<soapenv:Envelope xmlns:soapenv="http://www.w3.org/2003/05/soap-envelope"><soapenv:Body><rpc message-id="37" nodename="' . $oltid . '" username="noc" sessionid="' . $token . '"><action><action-type>show-ont</action-type><action-args><subscr-id>' . $ontids . '</subscr-id></action-args></action></rpc></soapenv:Body></soapenv:Envelope>',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: text/xml;charset=ISO-8859-1',
                'Accept: application/xml',

            ),
        ));
        $response1 = curl_exec($curl);
        $cond = "ont";
        $re = response($response1)
            ->withHeaders([
                'Content-Type' => 'text/xml'
            ]);


        if (strpos($response1, $cond) !== false) {
            //  $str = substr($response1, strpos($response1, '<ont>'));
            $ontid = string_between_two_string($response1, '<ont>', '</ont>');

            //  $ontid = substr($str, 0, 12);
            //  $ontid =trim($ontid, "<ont>");
            $ontpower = string_between_two_string($response1, '<fe-opt-lvl>', '</fe-opt-lvl>');
            $description = string_between_two_string($response1, '<descr>', '</descr>');
            $sereal = string_between_two_string($response1, '<serno>', '</serno>');
            $slot = string_between_two_string($response1, '<card>', '</card>');
            $port = string_between_two_string($response1, '<gponport>', '</gponport>');
            $uptime = string_between_two_string($response1, '<uptime>', '</uptime>');
            $mac = string_between_two_string($response1, '<onu-mac>', '</onu-mac>');


            $dt = Carbon::now();
            $days = $dt->diffInDays($dt->copy()->addSeconds($uptime));
            $hours = $dt->diffInHours($dt->copy()->addSeconds($uptime)->subDays($days));
            $minutes = $dt->diffInMinutes($dt->copy()->addSeconds($uptime)->subDays($days)->subHours($hours));
// $uptime = CarbonInterval::days($days)->hours($hours)->minutes($minutes)->forHumans();
// 1 day 1 hour 1 minute

            $uptime = "$days" . " " . "day" . " " . $hours . " " . "hour" . " " . $minutes . " " . "minute";


//get sas info

            $api = new SASController('91.106.63.13', 'admin', 'Rs2020092323@@');
            $api->login();
            $payload = [


                'search' => $ontids,


            ];

            $res = $api->post('index/online', $payload);

            $response = json_decode($res, true);


            $api = new SASController('91.106.63.13', 'admin', 'Rs2020092323@@');
            $api->login();
            $payload = [


                'search' => $ontids,


            ];

            $res = $api->post('index/user', $payload);

            $response1 = json_decode($res, true);
            foreach ($response1['data'] as $var1) {
                // dd($response1);
                $firstname = $var1['firstname'];
                $profile = $var1['profile_details']['name'];
                $username = $var1['username'];
                $expiration = $var1['expiration'];
                $sereal = $var1['lastname'];
                $parent = $var1['parent_username'];
                $fup = $var1['online_status'];
                $created_at = $var1['created_at'];

            }


            // check if user offline
            if ($response['total'] == 0) {

                // $username = "User is offline in sas";
                $ip = "User is offline";
                $session = "User is offline";
                $fup = "Offline";

            } else {
                foreach ($response['data'] as $var) {
                    $firstname = $var['user_details']['firstname'];
                    $expiration = $var['user_details']['expiration'];
                    $sereal = $var['user_details']['lastname'];

                    foreach ($var as $var2 => $value) {


                    }
                    // dd($var);
                    $username = $var1['username'];
                    $ip = $var['framedipaddress'];
                    // $profile = $var1['profile_details']['name'];
                    $session = $var['acctstarttime'];
                    $parent = $var['parent_username'];
                    $fup = $var['fup'];
                    if ($fup == 0) {
                        $fup = "Online";
                    } elseif ($fup == 1) {
                        $fup = "OnlineNoNet";
                    } else {
                        $fup = "Offline";
                    }

                }
//get token


            }

        } else
            return back()->with('systemuser_wrong', 'Error Wrong ONT or OLT Data!');


        return view('getontdetails2', compact('username', 'ip', 'profile', 'session', 'parent', 'firstname', 'expiration', 'sereal', 'fup', 'ontpower', 'ontid', 'description', 'slot', 'port', 'uptime', 'mac', 'oltid', 'created_at'));


    }
}
