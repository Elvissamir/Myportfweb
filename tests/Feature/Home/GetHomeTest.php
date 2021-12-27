<?php

namespace Tests\Feature\Home;

use Tests\TestCase;
use Inertia\Testing\Assert;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetHomeTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_home_page_exists()
    {
        $this->withoutExceptionHandling();

        $response = $this->get(route('home'));

        $response->assertInertia(fn (Assert $page) => 
            $page->component('Home/Index'));
    }
}
