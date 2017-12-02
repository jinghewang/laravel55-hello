<?php
/**
 * Created by PhpStorm.
 * User: hbd
 * Date: 2017/12/1
 * Time: 上午11:55
 */

namespace App\Contracts\Http;

use App\Contracts\HelloBase;
use App\Contracts\HelloContract;

class Hello extends HelloBase {

    public $scope = 'http';


}