<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\zteactivation;
use Illuminate\Support\Str;
use App\act_ver_err;






class Xml3rdpartyController extends Controller
{
        public function thirdpartyactivation(request $request){
       
       
       
       
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
        $gps_lat=$request->gps_lat;
        $gps_lng=$request->gps_lng;
        $gps_lat_search=substr($gps_lat,0,-3);
        $gps_lng_search=substr($gps_lng,0,-3);
        $cord=$gps_lat.",".$gps_lng;
        $ticketid=$request->ticketid;
        $pdp=$request->pdp;
        $oltid=$request->oltid;
        $vendor=$request->vendor;
        $location=$request->location;
        $offer=$request->offer;
        $slot=$request->slot;
        $gps_lat=$request->gps_lat;
        $gps_lng=$request->gps_lng;
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
        $sasgroupid = ["211","213","817","732","601","602","603","604","605","606","607","608","609","610","611","612","613","614","615","616","617","618","627","621","623","625","404","406","408","410","412","303","305","307","309","311","503","504","505","506","508","510","335","337","339","351","353"];
        $sasgroup = ["7", "8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53"];
        $sasgroupids =str_replace($sasgroupid,$sasgroup,$group_id);
        $desc = "RC".$rc."/". $dp."@".$group_id."-".$Street."-".$house;
        $add = $group_id."-".$Street."-".$house; 
        $thirdname=$finame." ".$sename." ".$thname;
        $cardpin=$request->cardpin;
        $slots=$slot."/".$pdp;
        



        
       if (str_contains($oltid, "NTWK-MAMOLT")){
          $servicetag = "1312";   
       }

       elseif (str_contains($oltid, "NTWK-BAYOLT")){
          $servicetag = "1371";   
       }

         elseif (str_contains($oltid, "NTWK-OMCOLT")){
          $servicetag = "1352";   
       }

         elseif (str_contains($oltid, "NTWK-KADOLT")){
          $servicetag = "1322";   
       }

         elseif (str_contains($oltid, "NTWK-BELOLT")){
          $servicetag = "1331";   
       }

         elseif (str_contains($oltid, "NTWK-SHAOLT")){
          $servicetag = "1392";   
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

  return redirect()->route('thirdparty')->with('systemuser_wrong', 'Pin used by another user!');
}
}

$vlans = array("1312","1371","1352","1322","1331","1392");
$vlanidolt = array("27","24","28","21","22","26");
$servicetagid = str_replace($vlans,$vlanidolt,$servicetag);

//
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
    
   return redirect()->route('thirdparty')->with('systemuser_wrong', 'User is alreday existing in sas!');

}

 else
   
 if($long_val + $lat_val >=2){
        
   $cordination=1;

 }

  else
  $cordination=0;

 if($totphone|$totdesc|$totfullname|$cordination > 0){
$data = $request;

return view('xml.thirdpartyver',compact('cordination','data','totphone','totdesc','totfullname','firstname'));
 }
  //OLT auth
else
     
        //OLT auth

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

<ontprof>'.$vendor.'</ontprof>

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

    return redirect()->route('thirdparty')->with('systemuser_wrong', 'User is alreday existing in CMS !');


}

else


//create data service
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
  CURLOPT_POSTFIELDS =>'<soapenv:Envelope xmlns:soapenv="www.w3.org/2003/05/soap-envelope">

<soapenv:Body>

<rpc message-id="45" nodename="'.$oltid.'" username="noc" sessionid="'.$token.'">

<edit-config><target><running/></target>

<config>

<top>

<object operation="create" get-config="true">

<type>EthSvc</type>

<id>

<ont>'.$ont.'</ont>

<ontslot>3</ontslot>

<ontethany>1</ontethany>

<ethsvc>1</ethsvc>

</id>

<admin>enabled</admin>

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
echo $response;


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
                   'contract_id' => $desc,
                   'address' => $add,
                   'apartment' => $slots,
                   'company' => $location,
                   'city' => $offer,
                   'group_id' => $sasgroupids,
                   'notes' => $cord,
                   'national_id' => $ticketid

                   

                    ];
        $res = $api->post('user', $payload);


       $rescard = json_decode($res, true);
       
       $rescardstatus=$rescard['status'];

if($cardpin == null){


//call the database to create log

 $input = $request->all();
            zteactivation::create([
           
            'emploee' => $request['emploee'],
            'username' => $request['pppoeuser'],
            'profile_id' => $parentid,
            'firstname' => $firstname,
            'lastname'=> $desc,
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
            'profile_id' => $parentid,
            'firstname' => $firstname,
            'lastname'=> $desc,
            'phone' => $request['phone'],
            'contract_id' => $cord,
            'cardpin' => $request['cardpin'],
            

        ]);




   return redirect()->route('home')->with('systemuser_added', 'Subscriber is Successfully Activated');

   } 

   }  
    
 

      public function index()

{
     
      return view('xml.thirdparty');
     
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



return view ('xml.thirdparty', compact('finalResult'));

    }

     public function thirdpartyrev(request $request){

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
        $gps_lat=$request->gps_lat;
        $gps_lng=$request->gps_lng;
        $gps_lat_search=substr($gps_lat,0,-3);
        $gps_lng_search=substr($gps_lng,0,-3);
        $cord=$gps_lat.",".$gps_lng;
        $ticketid=$request->ticketid;
        $pdp=$request->pdp;
        $oltid=$request->oltid;
        $vendor=$request->vendor;
        $location=$request->location;
        $offer=$request->offer;

        $slot=$request->slot;
        $gps_lat=$request->gps_lat;
        $gps_lng=$request->gps_lng;
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
        $sasgroupid = ["211","213","817","732","601","602","603","604","605","606","607","608","609","610","611","612","613","614","615","616","617","618","627","621","623","625","404","406","408","410","412","303","305","307","309","311","503","504","505","506","508","510","335","337","339","351","353"];
        $sasgroup = ["7", "8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53"];
        $sasgroupids =str_replace($sasgroupid,$sasgroup,$group_id);
        $desc = "RC".$rc."/". $dp."@".$group_id."-".$Street."-".$house;
        $add = $group_id."-".$Street."-".$house;  //address in sas
        $thirdname=$finame." ".$sename." ".$thname;
        $cardpin=$request->cardpin;
        $slots=$slot."/".$pdp;
        $parentvalue = array("127", "142", "143", "99", "183", "122", "306", "71", "86", "126", "138", "125", "134", "303", "136", "177", "92", "93", "172", "84", "91", "305", "135", "206", "209", "105", "104", "102", "103", "187", "207");
        $parentname = array(
            "BYA_Bya_Dis@817",
            "BLD_Bld_Dis@732",
            "KDY_Tob_Dis@408_410",
            "KDY_Als_Dis@404",
            "KDY_Als_Dis@406",
            "KDY_Isk_Dis@621_623_625",
            "MMN_Jam_Dis@627",
            "MMN_Drg_Dis@603",
            "MMN_Yar_Dis@614_618",
            "MMN_Yar_Dis@610_612",
            "MMN_Yar_Dis@608_616",
            "MMN_Daw_Dis@611_613",
            "MMN_Ame_Dis@601_609",
            "MMN_Mtn_Dis@605_607",
            "MMN_Har_Dis@211_213",
            "MMN_Qds_Dis@602_604_606",
            "OMC_Pst_Dis@503",
            "OMC_Pst_Dis@504_505",
            "OMC_Pst_Dis@506",
            "OMC_Pst_Dis@508",
            "OMC_Pst_Dis@510",
            "OMC_Moh_RC@505",
            "OMC_Qah_Dis@307_309_311",
            "SHB_Mut_RC@Zon1",
            "SHB_Nor_RC@Zon2",
            "BAY_OSP_Reg@Reg",
            "KDY_OSP_Reg@Reg",
            "MMN_OSP_Reg@Reg",
            "OMC_OSP_Reg@Reg",
            "SHB_OSP_Reg@Reg",
            "BLD_OSP_Reg@Reg"
        );
        
        $parentid= str_replace($parentvalue,$parentname,$manger);

    //    $v1300 = array("NTWK-MAMOLT01","NTWK-MAMOLT02");
    //    $v1301 = array("NTWK-MAMOLT07","NTWK-MAMOLT08","NTWK-MAMOLT09","NTWK-MAMOLT-T10","NTWK-MAMOLT11");
    //    $v1302 = array("NTWK-MAMOLT03","NTWK-MAMOLT04","NTWK-MAMOLT05","NTWK-MAMOLT06");
       
       if (str_contains($oltid, "NTWK-MAMOLT")){
          $servicetag = "1313";   
       }

       elseif (str_contains($oltid, "NTWK-BAYOLT")){
          $servicetag = "1372";   
       }

         elseif (str_contains($oltid, "NTWK-OMCOLT")){
          $servicetag = "1352";   
       }

         elseif (str_contains($oltid, "NTWK-KADOLT")){
          $servicetag = "1322";   
       }

         elseif (str_contains($oltid, "NTWK-BELOLT")){
          $servicetag = "1331";   
       }

         elseif (str_contains($oltid, "NTWK-SHAOLT")){
          $servicetag = "1393";   
       }


$vlans = array("1313","1372","1352","1322","1331","1393");
$vlanidolt = array("29","31","28","21","22","30");
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

<ontprof>'.$vendor.'</ontprof>

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

    return redirect()->route('thirdparty')->with('systemuser_wrong', 'User is alreday existing in CMS !');


}

else


//create data service
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
  CURLOPT_POSTFIELDS =>'<soapenv:Envelope xmlns:soapenv="www.w3.org/2003/05/soap-envelope">

<soapenv:Body>

<rpc message-id="45" nodename="'.$oltid.'" username="noc" sessionid="'.$token.'">

<edit-config><target><running/></target>

<config>

<top>

<object operation="create" get-config="true">

<type>EthSvc</type>

<id>

<ont>'.$ont.'</ont>

<ontslot>3</ontslot>

<ontethany>1</ontethany>

<ethsvc>1</ethsvc>

</id>

<admin>enabled</admin>

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
echo $response;


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
                   'contract_id' => $desc,
                   'address' => $add,
                   'apartment' => $slots,
                   'company' => $location,
                   'city' => $offer,
                   'group_id' => $sasgroupids,
                   'notes' => $cord,
                   'national_id' => $ticketid

                   

                    ];
        $res = $api->post('user', $payload);



       $rescard = json_decode($res, true);
       
       $rescardstatus=$rescard['status'];

if($cardpin == null){


//call the database to create log

 $input = $request->all();
            zteactivation::create([
           
            'emploee' => $request['emploee'],
            'username' => $request['pppoeuser'],
            'profile_id' => $parentid,
            'firstname' => $firstname,
            'lastname'=> $desc,
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
            'profile_id' => $parentid,
            'firstname' => $firstname,
            'lastname'=> $desc,
            'phone' => $request['phone'],
            'contract_id' => $request['desc'],
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

  
}
