<?php

namespace Tests\Door;

use App;
use \DB;
use app\Contracts\HelloContract;
use app\Contracts\Http\Hello;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Woodw\Utils\Helpers\UtilsHelper;

class FuncTest extends TestCase {

    private $table = 'dbtest';

    protected function setUp() {
        parent::setUp();
        $this->init();
    }

    /**
     * 初始化数据
     */
    public function init() {


    }


    /**
     * A basic test example.
     *
     * @return void
     */
    public function crud() {
        $name = 'wjh';
        $age = 25;
        $data = compact('name','age');
        print_r($data);

        $vars = get_defined_vars();
        print_r($vars);
    }


    /**
     * A basic test example.
     *
     * @test
     * @return void
     */
    public function crud2() {

        $test1 = '--123---';
        $test2 = '--123---';

        //print_r($GLOBALS['test1']);

        $vars = get_defined_vars();

        //print_r($vars);

        var_dump( $this->get_variable_name($test1,$vars));
        //var_dump( $this->get_variable_name($test2,$vars));
    }


    private function get_variable_name(&$var, $scope = NULL) {
        if (NULL == $scope) {
            $scope = $GLOBALS;
        }

        $tmp  = $var;
        $var   = "tmp_exists_" . mt_rand();

        var_dump($var);
        print_r($scope);

        $name = array_search($var, $scope, TRUE);
        $var   = $tmp;
        return $name;
    }
}
