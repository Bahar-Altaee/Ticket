<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NodeData extends Model
{
    protected $fillable=['id', 'node_name', 'gpon_card','gpon_port','discont','onu_mac','vendor','created_at','updated_at','reg_id'];
}
