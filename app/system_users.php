<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class system_users extends Model
{

    protected $fillable=['node_name', 'email', 'password','role','department','image'];
}




