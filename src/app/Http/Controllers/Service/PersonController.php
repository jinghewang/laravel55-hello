<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class PersonController extends Controller
{
    //
    public function index() {
        return [
            'id'   => 1,
            'name' => 'wjh'
        ];
    }


    public function check() {

        var_dump(322);
        die;

    }

    public function check2() {
        var_dump(322);
        die;
    }


    public function phpinfo() {
        phpinfo();
        die;
    }

}
