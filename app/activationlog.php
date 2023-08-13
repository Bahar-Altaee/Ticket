<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activationlog extends Model
{
        protected $fillable = [
        'emploee','username','profile_id','firstname','lastname','phone','contract_id'];

}
