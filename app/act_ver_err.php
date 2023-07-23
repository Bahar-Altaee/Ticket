<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class act_ver_err extends Model
{
        protected $fillable = [
         'pppoename',
         'firstname',
         'profile_id',
         'gps_lat',
         'gps_lng',
         'contract_id',
         'phone',
         'phone_dublicate',
         'cordination_dublicate',
         'dp_info_dublicate',
         'full_name_dublicate',
         'percentage',
        
        
        ];

}
