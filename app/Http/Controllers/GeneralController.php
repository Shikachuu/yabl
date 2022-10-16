<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response as ResponseFacade;
use Symfony\Component\HttpFoundation\Response;

class GeneralController extends Controller
{
    public function index(): Response
    {
        return ResponseFacade::redirectToRoute('brews');
    }
}
