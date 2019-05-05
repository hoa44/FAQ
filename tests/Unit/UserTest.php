<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserSave()
    {
        $user = factory(User::class)->make();

        $this->assertTrue($user->save());
    }

    public function testQuestions()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->questions()->get()));
    }
    public function testAnswers()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->answers()->get()));
    }
    public function testProfile()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->profile()->get()));
    }

    //  The following tests are for testing the admin users.

    public function a_default_user_is_not_an_admin()
    {
        $user = factory(User::class)->create();

        $this->assertFalse($user->isAdmin());
    }

    /** @test */
    public function an_admin_user_is_an_admin()
    {
        $admin = factory(User::class)
            ->states('admin')
            ->create();

        $this->assertTrue($admin->isAdmin());
    }
}
