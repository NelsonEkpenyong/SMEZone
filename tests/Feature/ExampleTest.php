<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_that_admin_dashboard_redirects_to_admin_login_if_user_is_unauthenticated(){
        $response = $this->get('/admin/dashboard');
        $response->assertRedirect('/admin/login');
    }
    
}
