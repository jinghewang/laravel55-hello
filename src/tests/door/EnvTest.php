<?php

namespace Tests\Door;

use App;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EnvTest extends TestCase
{


    /**
     * A basic test example.
     *
     * @return void
     */
    public function testA()
    {
        $environment = App::environment();
        info($environment);
        info(123);
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    public function config() {
        $value = config('app.timezone');
        var_dump($value);
        config(['app.timezone' => 'America/Chicago']);
        $value = config('app.timezone');
        var_dump($value);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function example()
    {
        $this->assertTrue(env('HBD',false));
        $this->assertTrue(env('HBD_NAME',false));
        $this->assertTrue(env('HBD_NAME',false));
    }
}
