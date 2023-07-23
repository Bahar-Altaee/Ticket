<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketReply extends Component
{
    public $ShowComment=false;

    public function ShowComment(){

    $this->ShowComment =! $this->ShowComment;
  }


    public function render()
    {
        return view('livewire.ticket-reply');
    }
}
