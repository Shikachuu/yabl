<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class BrewControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index()
    {
        $response = $this->get('/brew');

        $response->assertOk();

        $response->assertSee('Latest brews');

        $response->assertSee(DB::query()
            ->select('created_at')
            ->from('brews')
            ->orderBy('created_at', 'desc')
            ->first()->created_at);

        $response->assertDontSee(DB::query()
            ->select('created_at')
            ->from('brews')
            ->orderBy('created_at', 'asc')
            ->first()->created_at);
    }
}
