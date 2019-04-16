<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Profile;

class phpProfileTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testProfileSave()
    {
        $user = factory(User::class)->make();
        $user->save();
        $profile = factory(Profile::class)->make();
        $profile->user()->associate($user);


        $this->assertTrue($profile->save());
    }
}
