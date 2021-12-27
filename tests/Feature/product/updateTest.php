<?php

namespace Tests\Feature\product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Product;
class updateTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    public function test_update()
    {
        $this->withoutExceptionHandling();
        $product = Product::factory()->create();
        $data = [
            'name'          => 'aa',
            'description'   => 'eee',
            'price'         =>1
        ];
        $this -> put("products/$product->id", $data)
              -> assertRedirect("/products");
        $this -> assertDatabaseHas('products', $data);
    }
}
