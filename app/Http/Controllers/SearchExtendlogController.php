<?php

namespace App\Http\Controllers;

use App\extendusers;
use Livewire\WithPagination;

class SearchExtendlogController extends Controller
{
    use WithPagination;

    public $search = '';
    

    public function mount()
    {
        $this->search = request('search', '');
    }

    public function render()
    {
        if (Auth()->user()->role == 5 || Auth()->user()->role == 6 || Auth()->user()->role == 7 || Auth()->user()->role == 33) {
            return view('errors.401');
        }
        $search = request('search');

        $extendusers = extendusers::where('username', 'like', '%' . $this->search . '%')
            ->orWhere('pppoename', 'like', '%' . $this->search . '%')
            ->orWhere('firstname', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.search-extendlog', [
            'extendusers' => $extendusers,
        ]);
    }
}
