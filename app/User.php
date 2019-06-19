<?php

namespace HelloVoisins;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login', 'email', 'password', 'firstname', 'lastname', 'description', 'role', 'street', 'zipcode', 'city',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	public function messagesSender(){
		
		return $this->hasMany('HelloVoisins\Message','id_sender');
		
	}
	
	public function messagesReceiver(){
		
		return $this->hasMany('HelloVoisins\Message','id_receiver');
		
	}
	
	public function transactions1(){
		
		return $this->hasMany('HelloVoisins\Message','id_user1');
		
	}
	
	public function transactions2(){
		
		return $this->hasMany('HelloVoisins\Message','id_user2');
		
	}
	
	public function skills(){
		
		return $this->belongsToMany('HelloVoisins\Skill','user_skill','id_user','id_skill');
		
	}
	
	
}
