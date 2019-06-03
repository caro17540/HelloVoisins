<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
	* the table associated with the model
	* @var string
	*/
	protected $table = 'skill';
	
	/**
	* the primary key associated with the table
	* @var string 
	*/
	protected $primaryKey = 'id';
	
}
