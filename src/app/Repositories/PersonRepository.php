<?php
/**
 * Created by PhpStorm.
 * User: hbd
 * Date: 2017/12/2
 * Time: 下午10:11
 */

namespace App\Repositories;

use App\Models\Person;

class PersonRepository {

    public function all($columns = '*') {
        $persons = Person::all($columns);
        return $persons;
    }

    public function query() {
        return Person::query();
    }

}