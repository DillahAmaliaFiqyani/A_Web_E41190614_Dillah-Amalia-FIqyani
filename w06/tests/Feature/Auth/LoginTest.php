<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    // Trait refresh database agar migration dijalankan
    use RefreshDatabase;

    /** @test */
    public function test_example()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);
        // Kita memiliki 1 user terdaftar
        $user = User::create([
            // 'email'    => 'username@example.net',
            // 'password' => bcrypt('secret'),
            'name' => 'dillahamalia',
            'username' => 'dillah.amalia.f@gmail.com',
            'email' => 'dillah.amalia.f@gmail.com',
            'password' => '12345',
            'role' => '1',
        ]);
        if (!$user){
            $this->assertTrue(false);
        }
        $this->assertTrue(true);


        // // Kunjungi halaman '/login'
        // $this->visit('/login');

        // // Submit form login dengan email dan password yang tepat
        // $this->submitForm('Login', [
        //     'email'    => 'username@example.net',
        //     'password' => 'secret',
        // ]);

        // // Lihat halaman ter-redirect ke url '/home' (login sukses).
        // $this->seePageIs('/home');

        // // Kita melihat halaman tulisan "Dashboard" pada halaman itu.
        // $this->seeText('Dashboard');
    }
}
