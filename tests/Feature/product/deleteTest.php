<?php

namespace Tests\Feature\product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Product;
class deleteTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    public function test_destroy()
    {
        $this -> withoutExceptionHandling();
        $product = Product::factory()->create();

        $this
            -> delete("products/$product->id")
            -> assertRedirect('products');

        $this->assertDatabaseMissing('products', [
            'id'            => $product->id,
            'url'           => $product->url,
            'description'   => $product->description,
        ]);
    }

}
