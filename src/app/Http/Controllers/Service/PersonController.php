<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class PersonController extends Controller
{

    /**
     * PersonController constructor.
     */
    public function __construct() {
        //$this->middleware('check.age');
        //$this->middleware('log')->only('index');
        //$this->middleware('subscribed')->except('store');

        $this->middleware(function ($request, $next) {
            // ...

            return $next($request);
        });
    }


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
