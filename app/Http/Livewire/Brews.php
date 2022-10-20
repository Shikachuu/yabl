<?php

namespace App\Http\Livewire;

use App\Models\Brew;
use App\Models\Brewer;
use App\Models\Coffee;
use Livewire\Component;
use Livewire\WithPagination;

class Brews extends Component
{
    use WithPagination;

    public int $brewer = 0;

    public string $roaster = '';

    protected $queryString = [
        'brewer' => ['except' => 0],
        'roaster' => ['except' => ''],
    ];

    public function updatingBrewer()
    {
        $this->resetPage();
    }

    public function updatingRoaster()
    {
        $this->resetPage();
    }

    public function render()
    {
        $brewers = Brewer::query()->select('id', 'name')->get();

        $roasters = Coffee::query()->select('roaster')->distinct()->pluck('roaster');

        $brewsQuery = Brew::query()
            ->select([
                'brews.id as id',
                'coffees.name as coffee',
                'brewers.name as brewer',
                'grinder',
                'brews.created_at',
            ])
            ->join('brewers', 'brewer_id', '=', 'brewers.id')
            ->join('coffees', 'coffee_id', '=', 'coffees.id')
            ->orderBy('created_at', 'desc')
            ->exactFilter('brewers.id', $this->brewer)
            ->exactFilter('coffees.roaster', $this->roaster);

        $brews = $brewsQuery->simplePaginate(12);

        return view('livewire.brews', ['brews' => $brews, 'brewers' => $brewers, 'roasters' => $roasters])
            ->layout('components.layout', ['title' => 'Coffees']);
    }
}
