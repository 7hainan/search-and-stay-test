<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_unauthenticate_user_access_book_api()
    {
        $response = $this->getJson('/api/book');

        $response->assertStatus(401);
    }

    public function test_authenticated_user_can_access_protected_route()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->getJson('/api/book');

        $response->assertStatus(200);
    }


    
}
