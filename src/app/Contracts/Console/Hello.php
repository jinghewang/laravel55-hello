<?php
/**
 * Created by PhpStorm.
 * User: hbd
 * Date: 2017/12/1
 * Time: 上午11:56
 */

namespace App\Contracts\Console;

use App\Contracts\HelloBase;
use App\Contracts\HelloContract;

class Hello extends HelloBase {

    public $scope = 'console';

}