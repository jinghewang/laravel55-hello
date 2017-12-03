<?php
/**
 * Created by PhpStorm.
 * User: hbd
 * Date: 2017/12/1
 * Time: 上午11:58
 */

namespace App\Contracts;


use Illuminate\Support\Facades\Log;

class HelloBase implements HelloContract {


    /**
     * @var string
     */
    public $scope;


    /**
     * HelloBase constructor.
     * @param $scope
     */
    public function __construct($scope='local') {
        $this->scope = $scope;
    }

    public function test() {
        Log::info("{$this->scope}");
    }

    public function hello($message) {
        $msg = "[{$this->scope}] hello:{$message}";
        Log::info($msg);
    }
}