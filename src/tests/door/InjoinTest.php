<?php

namespace Tests\Door;

use App;
use App\Contracts\HelloContract;
use App\Contracts\Http\Hello;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InjoinTest extends TestCase
{


    /**
     * A basic test example.
     *
     * @test
     * @return void
     */
    public function testA()
    {

        $api = App::make(Hello::class);
        //var_dump($api);
        self::assertInstanceOf(Hello::class,$api);

        $api = resolve(Hello::class);
        //var_dump($api);
        self::assertInstanceOf(Hello::class,$api);

        $api = App::makeWith(Hello::class, ['scope' => 'dev']);
        $result = $api->hello('wjh');
        //var_dump($result);

        die;

    }

}
