<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ONTREPLACEController extends Controller
{
       public function index(request $request){
      
      return view ('Replace.xml');

    }



    public function callapireplace (request $request){

       $oltip=$request->oltip;
       $ontid=$request->ontid;
       $Serial=$request->Serial;

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
    'Cookie: JSESSIONID=1FCEBF17A1E7B91EA8AC94B65E4036D1'
  ),
));

$response = curl_exec($curl);
// dd($response);
$xmlObject = simplexml_load_string($response); 
$json = json_encode($xmlObject);
$phpDataArray = json_decode($json, true);
foreach($phpDataArray as $data){
  foreach ($data as $d){

  }
}
//Replace ONT
$token=$d['SessionId'];
//  dd($token);
curl_close($curl);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://10.80.10.5:18080/cmsexc/ex/netconf',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_POSTFIELDS =>'<soapenv:Envelope xmlns:soapenv="http://www.w3.org/2003/05/soap-envelope">

<soapenv:Body>

<rpc message-id="37" nodename="'.$oltip.'" timeout="35000" username="noc" sessionid="'.$token.'">

<edit-config>

<target>

<running/>

</target>

<config>

<top>

<object operation="merge">

<type>Ont</type>

<id>

<ont>'.$ontid.'</ont>

</id>

<admin>enabled</admin>

<serno>'.$Serial.'</serno>

<reg-id>'.$Serial.'</reg-id>

</object>

</top>

</config>

</edit-config>

</rpc>

</soapenv:Body>

</soapenv:Envelope>

',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/xml;charset=ISO-8859-1',
  ),
));

$responsereplace = curl_exec($curl);
    dd($responsereplace);
 if (str_contains($responsereplace, 'ONT not found')) { 
    return back()->with('systemuser_delete', 'ONT not found!');

}

else if (str_contains($responsereplace, 'Unable to decode XML ID'))
{ 
    return back()->with('systemuser_delete', 'ONT not found!');
}

else if (str_contains($responsereplace, 'Internal Error'))
{ 
    return back()->with('systemuser_delete', 'Wrong data supplied!');
}

else
{
    return redirect()->route('home')->with('systemuser_added', 'ONT has been updated successfully');
}




//  $jsonreplace = json_encode($responsereplace);
// $test1 = json_decode($jsonreplace, TRUE);
// // $string_trim = trim($test1);
// $xml = simplexml_load_string($test1); 
// dd($xml);

// //  $xmreplace = new \SimpleXMLElement($response, 0, TRUE); 
// dd($xmreplace);
curl_close($curl);

}
}