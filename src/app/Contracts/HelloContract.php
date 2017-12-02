<?php
/**
 * Created by PhpStorm.
 * User: hbd
 * Date: 2017/12/1
 * Time: 上午11:52
 */

namespace App\Contracts;


interface HelloContract {


    public function test();

    public function hello($message);

}