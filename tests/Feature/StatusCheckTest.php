<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StatusCheckTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStatus()
    {
        $rsp = $this->get('/register');

        $rsp->assertStatus(200);


    }
    public function testMessage()
    {
        $this->assertnotEmpty("I'm not a robot", " ");
    }

}
