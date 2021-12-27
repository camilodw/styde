<?php

namespace Tests\Feature\product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class validateTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    public function test_validateInputs()
    {
        $this -> artisan('db:seed', ['--class' => 'DatabaseSeeder']);
        $products=[
        'name' =>'',
        'description' =>'',
        'price'=>''
        ];
        //302 redirige a la misma pagina
        $response = $this -> post(route('products.store',$products))
        -> assertStatus(302)
        -> assertSessionHasErrors(['name', 'description', 'price']);
    }
}
