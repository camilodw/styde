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
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
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
