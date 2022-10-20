<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

class GeneralControllerTest extends TestCase
{
    public function test_index_redirect()
    {
        $response = $this->get('/');
        $response->assertRedirect('/brew');
    }
}
