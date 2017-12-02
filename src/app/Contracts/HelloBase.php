<?php
/**
 * Created by PhpStorm.
 * User: hbd
 * Date: 2017/12/1
 * Time: 上午11:58
 */

namespace App\Contracts;


class HelloBase implements HelloContract {


    public $scope;

    public function test() {
        echo  "{$this->scope}";
    }

    public function hello($message) {
        echo  "hello:{$this->scope}";
    }
}