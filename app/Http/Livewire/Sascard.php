<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sascard extends Component
{


public $cardpin;
public $serialnumber;
public $pin;
public $used_at;
public $mangeruser;
public $username;
public $profile;
// public $sasuser;
// public $saspass;




    public function render()
    {
     
// $sasuser=$this->sasuser;
      $cardpin=$this->cardpin;
      if($cardpin==null){
      $this->serialnumber="";
      $this->pin="";
      $this->used_at="";
      $this->profile="";
      
      $this->mangeruser="";
    
      $this->username="";
        }
        else{
        
        $api = new SASController('91.106.63.13', 'admin', 'Rs2020092323@@');
        
        $api->login();
        
        $payload = [
            
	                 
                     'search' => $cardpin,
                     
                     

                     ];
	               
        $res = $api->post('index/series', $payload);
        $response = json_decode($res, true);
if ($response['total']==0) {

  return view('livewire.sascard');
}
else{

  
       $datacard=$response['data'];
      //  dd($datacard);
$series=$datacard['0']['series'];
$this->profile=$datacard['0']['profile_details']['name'];

$api = new SASController('91.106.63.13', 'admin', 'Rs2020092323@@');
        $api->login();
        $payload = [
            
	                 
                     'search' => $cardpin,
                     
                     

                     ];
	               
     $res = $api->post('index/card/' . $series, $payload);
     $response = json_decode($res, true);
     $pinstatus=$response['data'];
      $this->serialnumber=$pinstatus[0]['serialnumber'];
      $this->pin=$pinstatus[0]['pin'];
      $this->used_at=$pinstatus[0]['used_at'];
      if($pinstatus[0]['manager_details']==null){
        $this->mangeruser="";
      }
      else{
      $this->mangeruser=$pinstatus[0]['manager_details']['username'];
    }

    if($pinstatus[0]['user_details']==null){
        $this->username="";
    }
    else{
      $this->username=$pinstatus[0]['user_details']['username'];
         }  
        }         }
        return view('livewire.sascard');
    }
}
