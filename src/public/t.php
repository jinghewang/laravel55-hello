<?php
/**
 * Created by PhpStorm.
 * User: hbd
 * Date: 2017/12/5
 * Time: 下午3:36
 */


$test1 = '--123---';
$test2 = '--123---';


print_r($GLOBALS['test1']);
print_r($GLOBALS);

die;

function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
//test();


print_r($GLOBALS);