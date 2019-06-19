<?php

namespace HelloVoisins\Http\Controllers;

use Illuminate\Http\Request;
use HelloVoisins\User;
use HelloVoisins\Skill;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
	}
	
    public function list()
    {
        $users = User::all();
        $skills = Skill::all();
        return view('user_list', ['users' => $users , 'skills' => $skills ]);
       
    }

    public function filter()
    {
		$users = User::all();
        return view('user_list', ['users' => $users ]);
				
	}

	public function read($n){
			return view ('user_read');	
	}
}
