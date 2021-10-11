<?php

namespace Tests\Feature;

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentTest extends TestCase
{

    public function test_studentIndex()
    {
        $response = $this->get(route('students.index'));
        $response->assertStatus(200);
    }

    /**
     * Test student creation.
     *
     * @return void
     */
    public function test_createStudent()
    {
        $student = Student::factory()->create();
        $this->assertDatabaseHas('students', [
            'address' => $student->address
        ]);
    }

    public function test_postStudent()
    {
        $student = Student::factory()->make();        
        $response = $this->post(route('students.store'), $student->toArray());
        // $response = $this->post('/students', $student->toArray());
        
        $check = Student::where('address', $student->address)->get(['address']);
        $this->assertNotNull($check);
        $response->assertRedirect(route('students.index'));
    }

    // use RefreshDatabase;
    // /** 
    //  * @test
    //  */
    // public function login_authenticates_and_redirects_user()
    // {
    //     $user = User::factory->create();
    //     $response = $this->post(route('login'), [
    //         'email' => $user->email,
    //         'password' => 'password'
    //     ]);

    //     $response->assertRedirect(route('home'));
    //     $this->assertAuthenticatedAs($user);
    // }
}
