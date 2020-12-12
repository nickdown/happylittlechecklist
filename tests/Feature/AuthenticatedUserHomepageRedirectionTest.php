<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class AuthenticatedUserHomepageRedirectionTest extends TestCase
{
    /** @test */
    public function guest_user_can_view_marketing_homepage()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertLocation('/');
    }

    /** @test */
    public function authenticated_user_is_redirected_to_checklist_index_from_dashboard()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/');

        $response->assertStatus(302)
            ->assertLocation('/checklists');
    }
}
