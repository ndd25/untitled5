<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Post;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {

        $user = User::all();
        $post = Post::all();
        $this->assertInternalType('string', $user->name);
        $this->assertInstanceOf('App\Post',$post);
        $this->assertCount(501, $user);
        $this->assertContains("Petra Cassin", [$user]);



    }
}
