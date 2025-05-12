<?php

namespace Tests\Feature;

use App\Models\Hobby;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HobbiesTest extends TestCase
{
    
    use RefreshDatabase;

        protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware();
    }

    public function test_user_can_view_hobby_index_page()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/hobbies');
        $response->assertStatus(200);
        $response->assertSee('Hobby');
    }


    public function test_user_can_create_a_hobby()
    {
        $response = $this->post('/hobbies', [
            'hobby' => 'Memasak',
        ]);

        $response->assertRedirect('/hobbies');
        $this->assertDatabaseHas('hobbies', ['hobby' => 'Memasak']);
    }

    public function test_user_can_update_a_hobby()
    {
        $hobby = Hobby::create(['hobby' => 'Renang']);

        $response = $this->put("/hobbies/{$hobby->id}", [
            'hobby' => 'Berenang',
        ]);

        $response->assertRedirect('/hobbies');
        $this->assertDatabaseHas('hobbies', ['hobby' => 'Berenang']);
    }

    public function test_user_can_delete_a_hobby()
    {
        $hobby = Hobby::create(['hobby' => 'Mendaki']);

        $response = $this->delete("/hobbies/{$hobby->id}");

        $response->assertRedirect('/hobbies');
        $this->assertDatabaseMissing('hobbies', ['id' => $hobby->id]);
    }
}
