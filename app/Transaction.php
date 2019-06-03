<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'transaction';

	/**
	 * The primary key associated with the table.
	 *
	 * @var string
	 */
	protected $primaryKey = 'id';
	
}
