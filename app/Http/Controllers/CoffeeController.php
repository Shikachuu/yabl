<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Support\Facades\Response as ResponseFacade;
use Symfony\Component\HttpFoundation\Response;

class CoffeeController extends Controller
{
    public function show(int $id): Response
    {
        $coffee = Coffee::findOrFail($id);

        return ResponseFacade::view('coffee', ['coffee' => $coffee]);
    }
}
