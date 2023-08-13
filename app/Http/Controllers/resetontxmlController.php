<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resetontxmlController extends Controller
{
    public function reset(request $request){

      
        $ontid=$request->ont;
        $oltid=$request->olt;


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
  CURLOPT_POSTFIELDS =>'<?xml version="1.0" encoding="UTF-8"?>

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
foreach($phpDataArray as $data){
  foreach ($data as $d){

  }
}
        
//Replace ONT
$token=$d['SessionId'];
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
  CURLOPT_POSTFIELDS =>'<soapenv:Envelope xmlns:soapenv="http://www.w3.org/2003/05/soap-envelope">

<soapenv:Body>

<rpc message-id="36" nodename="'.$oltid.'" username="noc" sessionid="'.$token.'">

<action>

<action-type>reset-ont</action-type>

<action-args>

<object>

<type>Ont</type>

<id>

<ont>'.$ontid.'</ont>

</id>

</object>

<force>true</force>

</action-args>

</action>

</rpc>

</soapenv:Body>

</soapenv:Envelope>

',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/xml;charset=ISO-8859-1',
    'Cookie: JSESSIONID=E93A4B59FCA5E2A8A381CEE82F6EAE6D'
  ),
));

$response = curl_exec($curl);
$cond = "ok";
if (strpos($response, $cond) !== false) {
return redirect()->route('userdata')->with("systemuser_added",'ONT Rebooted Successfully');

}

else
  
  return back()->with('systemuser_wrong', 'Error in Request!');

curl_close($curl);
    }
}
