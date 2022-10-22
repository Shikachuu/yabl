<?php

namespace App\Http\Livewire;

use App\Models\Brewer;
use Livewire\Component;
use Livewire\WithPagination;

class Brewers extends Component
{
    use WithPagination;

    public string $category = '';

    protected $queryString = [
        'category' => ['except' => ''],
    ];

    public function updatingCategory()
    {
        $this->resetPage();
    }

    public function render()
    {
        $brewers = Brewer::query()
            ->select('id', 'category', 'name')
            ->exactFilter('category', $this->category)
            ->simplePaginate(6);

        return view('livewire.brewers', ['brewers' => $brewers])
            ->layout('components.layout', ['title' => 'Brewers']);
    }
}
