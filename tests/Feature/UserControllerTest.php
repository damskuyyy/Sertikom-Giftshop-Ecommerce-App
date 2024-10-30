<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class UserControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

      public function it_displays_user_index_page()
    {
        $user = User::factory()->create();

        $response = $this->get(route('user.index'));

        $response->assertStatus(200);
        $response->assertViewIs('admin.user.index');
        $response->assertSee($user->name);
    }

      public function it_displays_create_user_form()
    {
        $response = $this->get(route('user.create'));

        $response->assertStatus(200);
        $response->assertViewIs('admin.user.create');
    }

      public function it_can_create_a_new_user()
    {
        $response = $this->post(route('user.store'), [
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'password' => 'password',
            'role' => 'admin'
        ]);

        $response->assertRedirect(route('user.index'));
        $this->assertDatabaseHas('users', ['email' => 'testuser@example.com']);
    }

      public function it_displays_edit_user_form()
    {
        $user = User::factory()->create();

        $response = $this->get(route('user.edit', $user->id));

        $response->assertStatus(200);
        $response->assertViewIs('admin.user.edit');
        $response->assertSee($user->name);
    }

      public function it_can_update_user_information()
    {
        $user = User::factory()->create();

        $response = $this->put(route('user.update', $user->id), [
            'name' => 'Updated User',
            'email' => $user->email,
            'role' => 'pelanggan'
        ]);

        $response->assertRedirect(route('user.index'));
        $this->assertDatabaseHas('users', ['name' => 'Updated User']);
    }

    public function it_can_delete_a_user()
    {
        $user = User::factory()->create();

        $response = $this->delete(route('user.destroy', $user->id));

        $response->assertRedirect(route('user.index'));
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }
}
