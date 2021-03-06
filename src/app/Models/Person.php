<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Person.
 *
 * @author  The scaffold-interface created at 2017-11-22 05:55:35am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Person extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'people';

	
}
