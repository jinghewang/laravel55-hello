<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Invoice.
 *
 * @author  The scaffold-interface created at 2017-12-29 02:29:45am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Invoice extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'invoices';

	
}
