<?php

namespace Tests\Feature\product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class createTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    public function test_store()
    {
        $this -> artisan('db:seed', ['--class' => 'DatabaseSeeder']);
        $products=[
        'name'          => 'aa',
        'description'   => 'aa',
        'price'         => 11
        ];
        $response = $this -> post(route('products.store',$products));
        $this -> assertDatabaseHas('products',$products);
    }

}
