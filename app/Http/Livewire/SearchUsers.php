<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class SearchUsers extends Component
{
    public $search = '';

    public function render()
    {
        $User = User::where('name', 'like', '%'.$this->search.'%')
            ->orWhere('email', 'like', '%'.$this->search.'%')
            ->get();

        return view('livewire.search-users', ['users' => $User]);
    }
}