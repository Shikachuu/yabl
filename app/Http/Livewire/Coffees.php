<?php

namespace App\Http\Livewire;

use App\Models\Coffee;
use Livewire\Component;
use Livewire\WithPagination;

class Coffees extends Component
{
    use WithPagination;

    public ?string $roaster = null;

    public ?string $country = null;

    protected $queryString = [
        'roaster' => ['except' => ''],
        'country' => ['except' => ''],
    ];

    public function render()
    {
        $coffeesQuery = Coffee::query()
            ->select(['id', 'name', 'roaster', 'country', 'roast_date'])
            ->orderBy('created_at', 'desc');

        $coffeesQuery->search('roaster', $this->roaster);
        $coffeesQuery->search('country', $this->country);

        $coffees = $coffeesQuery->simplePaginate(12);

        return view('livewire.coffees', ['coffees' => $coffees])
            ->layout('components.layout', ['title' => 'Coffees']);
    }
}
