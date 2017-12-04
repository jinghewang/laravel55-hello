<?php

namespace Tests\Door;

use App;
use App\Contracts\HelloContract;
use App\Contracts\Http\Hello;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InjoinTest extends TestCase
{


    /**
     * make.
     *
     * @test
     * @return void
     */
    public function make()
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
    }


    /**
     * 一个基础功能的测试用例。
     * @test
     */
    public function testBasicExample()
    {

        $key = 'kn';

        Cache::shouldReceive('get')
            ->with('key')
            ->andReturn('value');

        die;
        //$this->visit('/cache')
        //    ->see('value');
    }

}
