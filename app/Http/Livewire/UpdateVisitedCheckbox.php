<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\zteactivation;

class UpdateVisitedCheckbox extends Component
{
    public $zteactivationId;
    public $visited;

    public function mount($zteactivationId, $visited)
    {
        $this->zteactivationId = $zteactivationId;
        $this->visited = $visited;
    }

    public function updateVisited()
    {
        $zteactivation = zteactivation::find($this->zteactivationId);
        $zteactivation->Visited = $this->visited;
        $zteactivation->save();

        session()->flash('message', 'Visited status updated successfully.');
    }

    public function render()
    {
        return view('livewire.update-visited-checkbox');
    }
}
