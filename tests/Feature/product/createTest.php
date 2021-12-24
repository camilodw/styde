<?php

namespace Tests\Feature\product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use App\Models\Category;

class createTest extends TestCase
{
    use RefreshDatabase;
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

    function test_create()
    {
        $this->handleValidationExceptions();
         Category::factory()->create();

        $this->post('/products/', [
                'name' => '',
                'price'=>'',
                'description'=>'',
                'category_id'=>''
        ])->assertStatus(402);
    }
}
