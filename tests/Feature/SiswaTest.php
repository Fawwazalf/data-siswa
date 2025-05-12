<?php

namespace Tests\Feature;

use App\Models\Hobby;
use App\Models\Siswa;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SiswaTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    use RefreshDatabase;
    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware();
    }
    public function test_user_can_view_siswa_index_page(): void
    {
        $response = $this->get('/siswas');
        $response->assertStatus(200);
    }
    
  public function test_user_can_create_a_siswa(): void
{
    $hobby1 = Hobby::create(['hobby' => 'Lari']);
    $hobby2 = Hobby::create(['hobby' => 'Renang']);

    $response = $this->post('/siswas', [
        'nama' => 'Johan',
        'nisn' => 123456789,
        'phone_numbers' => [
            '1234567890',
            '0987654321'
        ],
        'hobby_ids' => [
            $hobby1->id,
            $hobby2->id
        ],
    ]);

    $response->assertRedirect('/siswas');
    $this->assertDatabaseHas('siswas', ['nama' => 'Johan']);
}
    public function test_user_can_update_a_siswa(): void
    {
        $siswa = Siswa::create(['nama' => 'Johan']);

        $response = $this->put("/siswas/{$siswa->id}", [
            'nama' => 'Fawwaz',
            'nisn' => 12345679,
            'phone_numbers' => [
              '1234567890',
               '0987654321'
            ],
            
        ]);

        $response->assertRedirect('/siswas');
        $this->assertDatabaseHas('siswas', ['nama' => 'Fawwaz']);
    }
    public function test_user_can_delete_a_siswa(): void
    {
        $siswa = Siswa::create(['nama' => 'John Smith']);

        $response = $this->delete("/siswas/{$siswa->id}");

        $response->assertRedirect('/siswas');
        $this->assertDatabaseMissing('siswas', ['id' => $siswa->id]);
    }
    public function test_user_can_view_siswa_create_page(): void
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/siswas/create');
        
        $response->assertStatus(200);
        $response->assertSee('Create Siswa');
    }
    public function test_user_can_view_siswa_edit_page(): void
    {
        $siswa = Siswa::create(['nama' => 'Johan']);

        $response = $this->get("/siswas/{$siswa->id}/edit");

        $response->assertStatus(200);
        $response->assertSee('Edit Siswa');
    }
}
