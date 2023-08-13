<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\SearchExtendlogController;

class SearchExtendlog extends Component
{
    public $search = '';

    public function render()
    {
        
        return (new SearchExtendlogController())->render();
    }
}
