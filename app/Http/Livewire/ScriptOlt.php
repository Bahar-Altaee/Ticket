<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ScriptOlt extends Component
{
    public $frame_slot;
    public $port;
    public $serial;
    public $line_profile;
    public $service_port;
    public $desc;
    public $service_vlan;
    public $ont_id;
    public $user_vlan;
    public $inner_vlan;
    public $olt;

    public function render()
    {
        return view('livewire.script-olt');
    }

    public function submit()
    {
      
    }
}