<?php

namespace HelloVoisins\Http\Controllers;

use Illuminate\Http\Request;

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
	
    public function list(){
		return view ('user_list');
				
	}

	public function read($n){
			return view ('user_read');	
	}
	public function index()
    {
        $user = User::all();
        return view('users', ['user' => $user ]);
    }
	
}
