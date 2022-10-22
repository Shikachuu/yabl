<?php

namespace App\Http\Controllers;

use App\Models\Brew;
use Illuminate\Support\Facades\Response as ResponseFacade;
use Symfony\Component\HttpFoundation\Response;

class BrewController extends Controller
{
    public function show(int $id): Response
    {
        $brew = Brew::with('brewer')->with('coffee')->findOrFail($id);

        return ResponseFacade::view('brew', ['brew' => $brew]);
    }
}
