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
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['status', 'status1', 'status2'];
	
	/**
	 * Get the user1 of the transaction.
     *
	 */
	public function user1()
	{
			return $this->belongsTo('App\User', 'id_user1', 'id');
	}
			
	/**
	 * Get the user2 of the transaction.
     *
	 */
	public function user2()
	{
			return $this->belongsTo('App\User', 'id_user2', 'id');
	}
	
	/**
	 * Get the skill of the user1 of the transaction.
     *
	 */
	public function skill1()
	{
			return $this->belongsTo('App\Skill', 'id_skill1', 'id');
	}
			
	/**
	 * Get the skill of the user2 of the transaction.
     *
	 */
	public function skill2()
	{
			return $this->belongsTo('App\Skill', 'id_skill2', 'id');
	}
			
	/**
	 * Get the messages of the transaction.
     *
	 */
	public function messages()
	{
			return $this->hasMany('App\Message', 'id_transaction', 'id');
	}
			
}
