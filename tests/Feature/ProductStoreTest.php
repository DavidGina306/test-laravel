<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Faker\Factory as Faker;


class ProductStoreTest extends TestCase
{
    protected $fake;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStore()
    {
        //https://laravel.com/docs/5.8/http-tests
        //
        $faker = Faker::create();
        $data = [
            'name' => $faker->name,
            'marca' => $faker->name
        ];
         $response = $this->post(route('products.store'), $data);
         $response
         ->assertStatus(200)
         ->assertJson([
             'status' => 200,
         ]);
    }
}
