<?php

namespace Tests\Feature\product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class listTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    public function test_list()
    {
        $this -> seed();
        $response = $this -> get(route('products.index'));
        $response -> assertStatus(200);
        $response -> assertDontSee('Data not found');
        $response -> assertSee('Name:');
        $response -> assertSee('Price:');
        $response -> assertSee('Description:');

    }

}
