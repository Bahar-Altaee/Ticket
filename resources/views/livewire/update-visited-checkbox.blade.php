<div>
    <input type="checkbox" wire:model="visited" wire:change="updateVisited">
    <label>Visited</label>

    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>
