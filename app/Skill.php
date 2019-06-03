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
	
	/**
	* the primary key associated with the table
	* @var string 
	*/
	protected $fillable = ['title'];
	
	public function transaction1() {
		
		return $this->hasMany('App\Transaction','id_skill1');
	}
	
	public function transaction2() {
		
		return $this->hasMany('App\Transaction','id_skill2');
	}
	
	public function users() {
		
		return $this->belongsToMany('App\User', 'user_skill', 'id_skill', 'id_user');
	}
	
}
