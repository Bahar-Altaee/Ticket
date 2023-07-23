<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\zteactivation;
use App\cardsystem;
use Illuminate\Support\Str;
use App\act_ver_err;
use App\NodeData;
use Illuminate\Support\Collection;



class XmlcalixController extends Controller
{
    public function calixactivation(request $request){
 
      
        $finame=$request->finame;
        $sename=$request->sename;
        $thname=$request->thname;
        $foname=$request->foname;
        $fifname=$request->fifname;
        $fifnames="(".$fifname.")";
        if($fifname == null){

$firstname=$finame." ".$sename." ".$thname." ".$foname;        

}

else{

$firstname=$finame." ".$sename." ".$thname." ".$foname." ".$fifnames;              
}   


$oltid=$request->oltid;
        $location=$request->location;
        $group_id=$request->group_id;
        $offer=$request->offer;
        $slot=$request->slot;
        $serial=$request->serial;
        $pppoeuser=$request->pppoeuser;
        $description=$request->description;
        $profile=$request->profile;
        $password=strrev($pppoeuser);  
        $ont=substr($pppoeuser, 4);
        $oltprofilesearch=array("Spark", "Storm", "Thunder", "Tornado");
        $street=$request->street;
        $manger=$request->manger;
        $phone=$request->phone;
        $sasprofile=array("2","3","4","8");
        $bwprofile=array("10","11","12","13");
        $sasprofileid=str_replace($oltprofilesearch,$sasprofile,$profile);
        $bwprofileid=str_replace($oltprofilesearch,$bwprofile,$profile);
        $group_id=$request->group_id;
        $rc=$request->rc;
        $dp=$request->dp;
        $Street=$request->Street;
        $house=$request->house;
        $gps_lat=$request->gps_lat;
        $gps_lng=$request->gps_lng;
        $gps_lat_search=substr($gps_lat,0,-3);
        $gps_lng_search=substr($gps_lng,0,-3);
        $cord=$gps_lat.",".$gps_lng;
        $ticketid=$request->ticketid;
        $pdp=$request->pdp;
        $sasgroupid = ["211","213","817","732","601","602","603","604","605","606","607","608","609","610","611","612","613","614","615","616","617","618","627","621","623","625","404","406","408","410","412","303","305","307","309","311","503","504","505","506","508","510","335","337","339","351","353"];
        $sasgroup = ["7", "8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53"];
        $sasgroupids =str_replace($sasgroupid,$sasgroup,$group_id);  
        $desc = "RC".$rc."/". $dp."@".$group_id."-".$Street."-".$house;
        $add = $group_id."-".$Street."-".$house;  //address in sas
        $cardpin=$request->cardpin;
        $MAM = "9641571";
        $slots=$slot."/".$pdp;


       $v1300 = array("NTWK-MAMOLT01","NTWK-MAMOLT02");
       $v1301 = array("NTWK-MAMOLT07","NTWK-MAMOLT08","NTWK-MAMOLT09","NTWK-MAMOLT-T10","NTWK-MAMOLT11");
       $v1302 = array("NTWK-MAMOLT03","NTWK-MAMOLT04","NTWK-MAMOLT05","NTWK-MAMOLT06");
       
        if (in_array($oltid, $v1300)){
          $servicetag = "1300";   
       }

        elseif (in_array($oltid, $v1301)){
          $servicetag = "1301";   
       }


       elseif (in_array($oltid, $v1302)){
          $servicetag = "1302";   
       }

       elseif (str_contains($oltid, "NTWK-BAYOLT")){
          $servicetag = "1300";   
       }

         elseif (str_contains($oltid, "NTWK-OMCOLT")){
          $servicetag = "1341";   
       }

         elseif (str_contains($oltid, "NTWK-KADOLT")){
          $servicetag = "1321";   
       }

         elseif (str_contains($oltid, "NTWK-BELOLT")){
          $servicetag = "1331";   
       }

         elseif (str_contains($oltid, "NTWK-SHAOLT")){
          $servicetag = "1381";   
       }

       if($cardpin != null){
$api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
            
	                 
                     'search' => $cardpin,
                     
                     

                     ];
	               
        $res = $api->post('index/series', $payload);
$response = json_decode($res, true);

$totalpin=$response['total'];
$pinsuspended=$response['data']['0']['suspended'];

if($totalpin==0 | $pinsuspended==1 ){

  return redirect()->route('thirdparty')->with('systemuser_wrong', 'Wrong PIN Number or Suspended!');
}
else
$datacard=$response['data'];
$series=$datacard['0']['series'];


$api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
            
	                 
                     'search' => $cardpin,
                     
                     

                     ];
	               
        $res = $api->post('index/card/' . $series, $payload);
$response = json_decode($res, true);
$pinstatus=$response['data'];
$pinused=$pinstatus['0']['used_at'];

        }

        else
        
if($cardpin != null){
if($pinused==null){

  return redirect()->route('xmlcalix')->with('systemuser_wrong', 'Pin used by another user!');
}
}





$vlans = array("1300","1301","1302","1361","1341","1321","1331","1381");
$vlanidolt = array("2","10","11","16","14","12","13","17");
$servicetagid = str_replace($vlans,$vlanidolt,$servicetag);

//check if first name or phone number dublicated
$thirdname=$finame." ".$sename." ".$thname;

$api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
            
	                 
                     'search' => $thirdname,
                     
                     

                     ];
	               
        $res = $api->post('index/user', $payload);
$response = json_decode($res, true);
$totfullname=$response['total'];

$desval="RC".$rc."/". $dp."@".$group_id."-".$Street;
$api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
            
	                 
                     'search' => $desval,
                     
                     

                     ];
	               
        $res = $api->post('index/user', $payload);
$response = json_decode($res, true);
$totdesc=$response['total'];


$api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
            
	                 
                     'search' => $phone,
                     
                     

                     ];
	               
        $res = $api->post('index/user', $payload);
$response = json_decode($res, true);
$totphone=$response['total'];


$api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
            
	                 
                     'search' => $gps_lng_search,
                     
                     
                     

                     ];
	               
        $res = $api->post('index/user', $payload);
$response = json_decode($res, true);
$long_val=$response['total'];

$api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
            
	                 
                     'search' => $gps_lat_search,
                     
                     
                     

                     ];
	               
        $res = $api->post('index/user', $payload);
$response = json_decode($res, true);
$lat_val=$response['total'];



//check if user is existing in sas

$api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
            
	                 
                     'search' => $pppoeuser,
                     
                     

                     ];
	               
        $res = $api->post('index/user', $payload);
$response = json_decode($res, true);
$tot=$response['total'];





if ($tot > 0){
    
   return redirect()->route('xmlcalix')->with('systemuser_wrong', 'User is alreday existing in sas!');

}

 else
   
 if($long_val + $lat_val >=2){
        
   $cordination=1;

 }

  else
  $cordination=0;

 if($totphone|$totdesc|$totfullname|$cordination > 0){
$data = $request;
return view('xml.calixver',compact('cordination','data','totphone','totdesc','totfullname','firstname'));
 }
  //OLT auth
else


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
foreach($phpDataArray as $data){
  foreach ($data as $d){

  }
}
$token=$d['SessionId'];


//create ONT

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
  CURLOPT_POSTFIELDS =>'<soapenv:Envelope xmlns:soapenv="www.w3.org/2003/05/soap-envelope">

<soapenv:Body>

<rpc message-id="45" nodename="'.$oltid.'" username="noc" sessionid="'.$token.'">

<edit-config>

<target>

<running/>

</target>

<config>

<top>

<object operation="create" get-config="true">

<type>Ont</type>

<id>

<ont>'.$ont.'</ont>

</id>

<admin>enabled</admin>

<ontprof>

<type>OntProf</type>

<id>

<ontprof>49</ontprof>

</id>

</ontprof>

<serno>'.$serial.'</serno>

<reg-id>'.$serial.'</reg-id>

<subscr-id>'.$ont.'</subscr-id>

<descr>'.$desc.'</descr>

</object>

</top>

</config>

</edit-config>

</rpc>

</soapenv:Body>

</soapenv:Envelope>',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/xml;charset=ISO-8859-1'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

if (str_contains($response, 'ONT already exists')){

    return redirect()->route('xmlcalix')->with('systemuser_wrong', 'User is alreday existing in CMS !');


}

else

//create service data

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

<rpc message-id="'.$token.'" nodename="'.$oltid.'" username="noc" sessionid="'.$token.'">

<edit-config>

<target>

<running/>

</target>

<config>

<top>

<object operation="merge">

<type>OntRg</type>

<id>

<ont>'.$ont.'</ont>

<ontslot>8</ontslot>

<ontrg>1</ontrg>

</id>

<admin>enabled</admin>

<subscr-id>'.$ont.'</subscr-id>

<descr>'.$desc.'</descr>

<mgmt-mode>native</mgmt-mode>

<wan-protocol>pppoe</wan-protocol>

<pppoe-user>'.$pppoeuser.'</pppoe-user>

<pppoe-password>'.$password.'</pppoe-password>

<mgmt-prof>

<type>OntRgMgmtProf</type>

<id>

<ontrgmgmtprof>1</ontrgmgmtprof>

</id>

</mgmt-prof>

<tr69-out-tag>none</tr69-out-tag>

<tr69-in-tag>none</tr69-in-tag>

<disable-on-batt>true</disable-on-batt>

<pbit-map>

<type>DscpMap</type>

<id>

<dscpmap>1</dscpmap>

</id>

</pbit-map>

</object>

</top>

</config>

</edit-config>

</rpc>

</soapenv:Body>

</soapenv:Envelope>

',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/xml;charset=ISO-8859-1'
  ),
));

$response = curl_exec($curl);


curl_close($curl);





//create data service on RG 

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

<rpc message-id="45" nodename="'.$oltid.'" username="noc" sessionid="'.$token.'">

<edit-config>

<target>

<running/>

</target>

<config>

<top>

<object operation="create" get-config="true">

<type>EthSvc</type>

<id>

<ont>'.$ont.'</ont>

<ontslot>8</ontslot>

<ontethany>1</ontethany>

<ethsvc>1</ethsvc>

</id>

<admin>enabled</admin>

<descr>'.$desc.'</descr>

<tag-action>

<type>SvcTagAction</type>

<id>

<svctagaction>'.$servicetagid.'</svctagaction>

</id>

</tag-action>

<bw-prof>

<type>BwProf</type>

<id>

<bwprof>'.$bwprofileid.'</bwprof>

</id>

</bw-prof>

<pon-cos>derived</pon-cos>

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
    'User-Agent: CMS_NBI_CONNECT-noc'
  ),
));

$response = curl_exec($curl);

curl_close($curl);



//call sas to add the user
$api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
	                 'username' =>$pppoeuser ,
	                 'password' => $password,
	                 'confirm_password' => $password,
	                 'profile_id' => $sasprofileid,
	                 'parent_id' => $manger,
	                 'firstname' => $firstname,
	                 'lastname' => $serial,
                   'phone' => $phone,
                   'enabled' => '0',
                   'company' => $location,
                   'contract_id' => $desc,
                   'address' => $add,
                   'apartment' => $slots,
                   'notes' => $cord,
                   'national_id' => $ticketid,

                 
                   'city' => $offer,
                   'group_id' => $sasgroupids,

                    ];
        $res = $api->post('user', $payload);

       $rescard = json_decode($res, true);
       $rescardstatus=$rescard['status'];

if($cardpin == null){

 $input = $request->all();
            zteactivation::create([
           
            'emploee' => $request['emploee'],
            'username' => $request['pppoeuser'],
            'profile_id' => $request['profile'],
            'firstname' => $firstname,
            'lastname' => $request['serial'],
            'phone' => $request['phone'],
            'contract_id' => $cord,
            

        ]);




   return redirect()->route('home')->with('systemuser_added', 'Subscriber is Successfully Activated');



}
else

       if($rescardstatus == '200')
       {
        
        
        $api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
            
	                 
                     'search' => $pppoeuser,
                     
                     
                     

                     ];
	               
        $res = $api->post('index/user', $payload);
$response = json_decode($res, true);
$data=$response['data'];

 $id = $data[0]['id'];


        
        
        
        
        
        
        
        $uuid = Str::uuid()->toString();

        $api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
	              
               'method' => "card",
               'pin' => $cardpin,
               'user_id' => $id,
               'money_collected' => '1',
               'transaction_id' => $uuid,

               
                     ];

    $res2 = $api->post('user/activate', $payload);   

       
//call the database to create log

 $input = $request->all();
            zteactivation::create([
           
            'emploee' => $request['emploee'],
            'username' => $request['pppoeuser'],
            'profile_id' => $request['profile'],
            'firstname' => $firstname,
            'lastname' => $request['serial'],
            'phone' => $request['phone'],
            'contract_id' => $cord,
            'cardpin' => $request['cardpin'],
            

        ]);




   return redirect()->route('home')->with('systemuser_added', 'Subscriber is Successfully Activated');

   } 
   
   }
    
 

      public function index()

{
     
      return view('xml.calix');
     
    }


         public function store(Request $request)
    {

$oltip=$request->oltip;
// dd($oltip);
      
$output_data=shell_exec("python3 test.py $oltip");
$finalResult = [];
$new_datax = explode('
S',$output_data);
$x=0;
foreach($new_datax as $data){
$string = str_replace(' ', '', $data);
$new_string = str_replace(PHP_EOL, ' ', $string);
$string_trim = trim($new_string);
$new_data = explode(' ',$string_trim);
//$finalResult = [];
foreach ($new_data as $str){
    $exploded_string = explode(':',$str);
    $finalResult[$x][$exploded_string[0]] = (isset($exploded_string[1])) ? $exploded_string[1] : null;
    
}
$x++;
}
// dd($finalResult);

return view ('xml.calix', compact('finalResult'));

    }



    public function calixrev(request $request){
        $input = $request->all();
        $pdp=$request->pdp;
        $finame=$request->finame;
        $sename=$request->sename;
        $thname=$request->thname;
        $foname=$request->foname;
        $fifname=$request->fifname;
        $fifnames="(".$fifname.")";
if($fifname == null){
$firstname=$finame." ".$sename." ".$thname." ".$foname;        
}
else{
        $firstname=$finame." ".$sename." ".$thname." ".$foname." ".$fifnames;         
}             
        $oltid=$request->oltid;
        $location=$request->location;
        $group_id=$request->group_id;
        $offer=$request->offer;
        $slot=$request->slot;
        $serial=$request->serial;
        $pppoeuser=$request->pppoeuser;
        $description=$request->description;
        $profile=$request->profile;
        $password=strrev($pppoeuser);  
        $ont=substr($pppoeuser, 4);
        $oltprofilesearch=array("Spark", "Storm", "Thunder", "Tornado");
        $street=$request->street;
        $manger=$request->manger;
        $phone=$request->phone;
        $sasprofile=array("2","3","4","8");
        $bwprofile=array("10","11","12","13");
        $sasprofileid=str_replace($oltprofilesearch,$sasprofile,$profile);
        $bwprofileid=str_replace($oltprofilesearch,$bwprofile,$profile);
        $group_id=$request->group_id;
        $rc=$request->rc;
        $dp=$request->dp;
        $ticketid=$request->ticketid;
        $Street=$request->Street;
        $house=$request->house;
        $gps_lat=$request->gps_lat;
        $gps_lng=$request->gps_lng;

        $sasgroupid = ["211","213","817","732","601","602","603","604","605","606","607","608","609","610","611","612","613","614","615","616","617","618","627","621","623","625","404","406","408","410","412","303","305","307","309","311","503","504","505","506","508","510","335","337","339","351","353"];
        $sasgroup = ["7", "8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53"];
        $sasgroupids =str_replace($sasgroupid,$sasgroup,$group_id);
        $desc = "RC".$rc."/". $dp."@".$group_id."-".$Street."-".$house; 
        $add = $group_id."-".$Street."-".$house;  //address in sas
        $cardpin = $request->cardpin;

                $MAM = "9641571";

        $slots=$slot."/".$pdp;


       $v1300 = array("NTWK-MAMOLT01","NTWK-MAMOLT02");
       $v1301 = array("NTWK-MAMOLT07","NTWK-MAMOLT08","NTWK-MAMOLT09","NTWK-MAMOLT-T10","NTWK-MAMOLT11");
       $v1302 = array("NTWK-MAMOLT03","NTWK-MAMOLT04","NTWK-MAMOLT05","NTWK-MAMOLT06");
       
        if (in_array($oltid, $v1300)){
          $servicetag = "1300";   
       }

        elseif (in_array($oltid, $v1301)){
          $servicetag = "1301";   
       }


       elseif (in_array($oltid, $v1302)){
          $servicetag = "1302";   
       }

       elseif (str_contains($oltid, "NTWK-BAYOLT")){
          $servicetag = "1300";   
       }

         elseif (str_contains($oltid, "NTWK-OMCOLT")){
          $servicetag = "1341";   
       }

         elseif (str_contains($oltid, "NTWK-KADOLT")){
          $servicetag = "1321";   
       }

         elseif (str_contains($oltid, "NTWK-BELOLT")){
          $servicetag = "1331";   
       }

         elseif (str_contains($oltid, "NTWK-SHAOLT")){
          $servicetag = "1381";   
       }

$vlans = array("1300","1301","1302","1361","1341","1321","1331","1381");
$vlanidolt = array("2","10","11","16","14","12","13","17");
$servicetagid = str_replace($vlans,$vlanidolt,$servicetag);








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
foreach($phpDataArray as $data){
  foreach ($data as $d){

  }
}
$token=$d['SessionId'];


//create ONT

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
  CURLOPT_POSTFIELDS =>'<soapenv:Envelope xmlns:soapenv="www.w3.org/2003/05/soap-envelope">

<soapenv:Body>

<rpc message-id="45" nodename="'.$oltid.'" username="noc" sessionid="'.$token.'">

<edit-config>

<target>

<running/>

</target>

<config>

<top>

<object operation="create" get-config="true">

<type>Ont</type>

<id>

<ont>'.$ont.'</ont>

</id>

<admin>enabled</admin>

<ontprof>

<type>OntProf</type>

<id>

<ontprof>49</ontprof>

</id>

</ontprof>

<serno>'.$serial.'</serno>

<reg-id>'.$serial.'</reg-id>

<subscr-id>'.$ont.'</subscr-id>

<descr>'.$desc.'</descr>

</object>

</top>

</config>

</edit-config>

</rpc>

</soapenv:Body>

</soapenv:Envelope>',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/xml;charset=ISO-8859-1'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

if (str_contains($response, 'ONT already exists')){

    return redirect()->route('xmlcalix')->with('systemuser_wrong', 'User is alreday existing in CMS !');


}

else

//create service data

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

<rpc message-id="'.$token.'" nodename="'.$oltid.'" username="noc" sessionid="'.$token.'">

<edit-config>

<target>

<running/>

</target>

<config>

<top>

<object operation="merge">

<type>OntRg</type>

<id>

<ont>'.$ont.'</ont>

<ontslot>8</ontslot>

<ontrg>1</ontrg>

</id>

<admin>enabled</admin>

<subscr-id>'.$ont.'</subscr-id>

<descr>'.$desc.'</descr>

<mgmt-mode>native</mgmt-mode>

<wan-protocol>pppoe</wan-protocol>

<pppoe-user>'.$pppoeuser.'</pppoe-user>

<pppoe-password>'.$password.'</pppoe-password>

<mgmt-prof>

<type>OntRgMgmtProf</type>

<id>

<ontrgmgmtprof>1</ontrgmgmtprof>

</id>

</mgmt-prof>

<tr69-out-tag>none</tr69-out-tag>

<tr69-in-tag>none</tr69-in-tag>

<disable-on-batt>true</disable-on-batt>

<pbit-map>

<type>DscpMap</type>

<id>

<dscpmap>1</dscpmap>

</id>

</pbit-map>

</object>

</top>

</config>

</edit-config>

</rpc>

</soapenv:Body>

</soapenv:Envelope>

',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/xml;charset=ISO-8859-1'
  ),
));

$response = curl_exec($curl);


curl_close($curl);





//create data service on RG 

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

<rpc message-id="45" nodename="'.$oltid.'" username="noc" sessionid="'.$token.'">

<edit-config>

<target>

<running/>

</target>

<config>

<top>

<object operation="create" get-config="true">

<type>EthSvc</type>

<id>

<ont>'.$ont.'</ont>

<ontslot>8</ontslot>

<ontethany>1</ontethany>

<ethsvc>1</ethsvc>

</id>

<admin>enabled</admin>

<descr>'.$desc.'</descr>

<tag-action>

<type>SvcTagAction</type>

<id>

<svctagaction>'.$servicetagid.'</svctagaction>

</id>

</tag-action>

<bw-prof>

<type>BwProf</type>

<id>

<bwprof>'.$bwprofileid.'</bwprof>

</id>

</bw-prof>

<pon-cos>derived</pon-cos>

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
    'User-Agent: CMS_NBI_CONNECT-noc'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$cord=$gps_lat.",".$gps_lng;

//call sas to add the user
$api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
	                 'username' =>$pppoeuser ,
	                 'password' => $password,
	                 'confirm_password' => $password,
	                 'profile_id' => $sasprofileid,
	                 'parent_id' => $manger,
	                 'firstname' => $firstname,
	                 'lastname' => $serial,
                   'phone' => $phone,
                   'enabled' => '0',
                   'company' => $location,
                   'contract_id' => $desc,
                   'address' => $add,
                   'apartment' => $slots,
                   'notes' => $cord,
                   'national_id' => $ticketid,

                 
                   'city' => $offer,
                   'group_id' => $sasgroupids,

                    ];
        $res = $api->post('user', $payload);
       $rescard = json_decode($res, true);

       $rescardstatus=$rescard['status'];

if($cardpin == null){

 $input = $request->all();
            zteactivation::create([
           
            'emploee' => $request['emploee'],
            'username' => $request['pppoeuser'],
            'profile_id' => $request['profile'],
            'firstname' => $firstname,
            'lastname' => $request['serial'],
            'phone' => $request['phone'],
            'contract_id' => $cord,
            

        ]);


      $percentages = [
    1 => '25%',
    2 => '50%',
    3 => '75%',
    4 => '100%'
];
if($request['totdesc']>=1){

$totaldescription=1;

}
else{

$totaldescription=0;

}


if($request['totfullname']>=1){

$totalfullname=1;

}
else{

$totalfullname=0;

}


if($request['totphone']>=1){

$totalphone=1;

}
else{

$totalphone=0;

}

$sumerror=$request['cordination']+$totalfullname+$totaldescription+$totalphone;





$percentage=$percentages[$sumerror];

            $input = $request->all();
            act_ver_err::create([
           
            'pppoename' => $request['pppoeuser'],
            'firstname' => $firstname,
            'profile_id' => $request['profile'],
            'gps_lat' => $request['gps_lat'],
            'gps_lng' => $request['gps_lng'],
            'phone' => $request['phone'],
            'cordination_dublicate' => $request['cordination'],
            'full_name_dublicate' => $totalfullname,
            'dp_info_dublicate' => $totaldescription,
            'phone_dublicate' => $totalphone,
            'percentage' => $percentage,
            

        ]);



   return redirect()->route('home')->with('systemuser_added', 'Subscriber is Successfully Activated');



}
else

       if($rescardstatus == '200')
       {
        
        
        $api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
            
	                 
                     'search' => $pppoeuser,
                     
                     
                     

                     ];
	               
        $res = $api->post('index/user', $payload);
$response = json_decode($res, true);
$data=$response['data'];

 $id = $data[0]['id'];     
        
        
        $uuid = Str::uuid()->toString();

        $api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
	              
               'method' => "card",
               'pin' => $cardpin,
               'user_id' => $id,
               'money_collected' => '1',
               'transaction_id' => $uuid,

               
                     ];


        $res2 = $api->post('user/activate', $payload);   
   
//call the database to create log

 $input = $request->all();
            zteactivation::create([
           
            'emploee' => $request['emploee'],
            'username' => $request['pppoeuser'],
            'profile_id' => $request['profile'],
            'firstname' => $firstname,
            'lastname' => $request['serial'],
            'phone' => $request['phone'],
            'contract_id' => $cord,
            'cardpin' => $request['cardpin'],
            

        ]);


      $percentages = [
    1 => '25%',
    2 => '50%',
    3 => '75%',
    4 => '100%'
];
if($request['totdesc']>=1){

$totaldescription=1;

}
else{

$totaldescription=0;

}


if($request['totfullname']>=1){

$totalfullname=1;

}
else{

$totalfullname=0;

}


if($request['totphone']>=1){

$totalphone=1;

}
else{

$totalphone=0;

}

$sumerror=$request['cordination']+$totalfullname+$totaldescription+$totalphone;
$percentage=$percentages[$sumerror];

            $input = $request->all();
            act_ver_err::create([
           
            'pppoename' => $request['pppoeuser'],
            'firstname' => $firstname,
            'profile_id' => $request['profile'],
            'gps_lat' => $request['gps_lat'],
            'gps_lng' => $request['gps_lng'],
            'phone' => $request['phone'],
            'cordination_dublicate' => $request['cordination'],
            'full_name_dublicate' => $totalfullname,
            'dp_info_dublicate' => $totaldescription,
            'phone_dublicate' => $totalphone,
            'percentage' => $percentage,
   
            

        ]);




   return redirect()->route('home')->with('systemuser_added', 'Subscriber is Successfully Activated');

   } 
   
    }




    public function rami(){
        

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
foreach($phpDataArray as $data){
  foreach ($data as $d){

  }
}
$token=$d['SessionId'];


curl_close($curl);



$url = 'http://10.80.10.5:18080/cmsexc/ex/netconf';

$nodeNames = [
    'NTWK-MAMOLT05','NTWK-MAMOLT07'
];
$headers = [
    'Content-Type: text/xml;charset=ISO-8859-1',
    'User-Agent: CMS_NBI_CONNECT-noc',
];

$results = [];

foreach ($nodeNames as $nodeName) {
    $data = '<soapenv:Envelope xmlns:soapenv="http://www.w3.org/2003/05/soap-envelope">
                <soapenv:Body>
                    <rpc message-id="55" nodename="' . $nodeName . '" username="noc" sessionid="' . $token . '">
                        <get>
                            <filter type="subtree">
                                <top>
                                    <object>
                                        <type>System</type>
                                        <id/>
                                        <children>
                                            <type>DiscOnt</type>
                                            <attr-filter>
                                                <ont>0</ont>
                                            </attr-filter>
                                            <attr-list>  reg-id prov-reg-id pon model vendor ont ontprof subscr-id descr curr-sw-vers alt-sw-vers curr-committed mfg-serno product-code curr-cust-vers alt-cust-vers onu-mac</attr-list>
                                        </children>
                                    </object>
                                </top>
                            </filter>
                        </get>
                    </rpc>
                </soapenv:Body>
            </soapenv:Envelope>';

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => $headers,
    ]);

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        $error_msg = curl_error($curl);
        curl_close($curl);
        throw new Exception($error_msg);
    } else {
        curl_close($curl);
    }

    $results[$nodeName] = $response;

    
}

return $results;




    }


    public function ramis(){
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
foreach($phpDataArray as $data){
  foreach ($data as $d){

  }
}
$token=$d['SessionId'];

      $url = 'http://10.80.10.5:18080/cmsexc/ex/netconf';
$nodeNames = ['NTWK-MAMOLT05', 'NTWK-MAMOLT07','NTWK-MAMOLT06','NTWK-MAMOLT04','NTWK-MAMOLT01', 'NTWK-MAMOLT02','NTWK-MAMOLT03','NTWK-MAMOLT09'];
$headers = [
    'Content-Type: text/xml;charset=ISO-8859-1',
    'User-Agent: CMS_NBI_CONNECT-noc',
];

$results = [];

// Initialize the cURL session outside the loop
$curl = curl_init();

foreach ($nodeNames as $nodeName) {
    $data = '<soapenv:Envelope xmlns:soapenv="http://www.w3.org/2003/05/soap-envelope">
                 <soapenv:Body>
                    <rpc message-id="55" nodename="' . $nodeName . '" username="noc" sessionid="' . $token . '">
                        <get>
                            <filter type="subtree">
                                <top>
                                    <object>
                                        <type>System</type>
                                        <id/>
                                        <children>
                                            <type>DiscOnt</type>
                                            <attr-filter>
                                                <ont>0</ont>
                                            </attr-filter>
                                            <attr-list>reg-id prov-reg-id pon model vendor ont ontprof subscr-id descr curr-sw-vers alt-sw-vers curr-committed mfg-serno product-code curr-cust-vers alt-cust-vers onu-mac</attr-list>
                                        </children>
                                    </object>
                                </top>
                            </filter>
                        </get>
                    </rpc>
                </soapenv:Body>
            </soapenv:Envelope>';

    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST', // Use POST method for SOAP requests
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => $headers,
    ]);

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        $error_msg = curl_error($curl);
        throw new Exception($error_msg);
    }

    // Parse the SOAP response XML to get the required data
    $soapResponse = new \SimpleXMLElement($response);
   
    $result = $soapResponse->xpath('//object');
// return $result;
    // Convert the SimpleXMLElement object to an array for easier manipulation
    $resultArray = json_decode(json_encode($result), true);

    // Extract the relevant data from the response array
    $dataToStore = [];
    foreach ($resultArray as $object) {
        // Process the data as needed
       
       
       
        $dataToStore[] = [
            'type' => $object['type'],
            'id' => $object['id'],
            'children' => $object['children'],
            // Add more attributes as needed
        ];
    }

    // Store the processed data in the results array
    $results[$nodeName] = $dataToStore;
    
}
// Close the cURL session after the loop
curl_close($curl);


foreach ($results as $nodeName => $nodes) {
    // Check if the 'children' key exists and is an array
    if (isset($nodes[0]['children']) && is_array($nodes[0]['children'])) {
        // Check if the 'child' key exists and is an array
        if (isset($nodes[0]['children']['child']) && is_array($nodes[0]['children']['child'])) {
            foreach ($nodes[0]['children']['child'] as $node) {
                // Check if the 'pon' key exists and is an array
                if (isset($node['pon']) && is_array($node['pon'])) {
                    $device = new NodeData();

                    // Save the required information to the database
                    $node_name = $nodeName;
                    $gpon_cards = $node['pon']['id']['card'];
                    $gpon_ports = $node['pon']['id']['gponport'];
                    $disconts = $node['id']['discont'];
                    $reg_ids = $node['reg-id'];
                    $onu_macs = $node['onu-mac'];
                    $vendors = $node['vendor'];

                
              

    


  

           
        
    
}
            }
          }
        }
      }

return view ('ONT.calix', compact('node','nodeName'));







// Continue with further processing or return the results


    }
}