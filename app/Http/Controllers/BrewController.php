<?php

namespace App\Http\Controllers;

use App\Models\Brew;
use Illuminate\Http\Request;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\Response as ResponseFacade;
use Symfony\Component\HttpFoundation\Response;

class BrewController extends Controller
{
    public function index(): Response
    {
        $brews = Brew::query()
            ->select([
                'brews.id as id',
                'coffees.name as coffee',
                'brewers.name as brewer',
                'grinder',
                'brews.created_at'
            ])
            ->join('brewers', 'brewer_id', '=', 'brewers.id')
            ->join('coffees', 'coffee_id', '=', 'coffees.id')
            ->orderBy('created_at')
            ->simplePaginate(6);
        return ResponseFacade::view('index', ['brews' => $brews]);
    }

    public function show(int $id): Response
    {
        dd(Brew::findOrFail([$id]));
    }
}
