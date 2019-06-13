<?php

namespace HelloVoisins\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
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
		//
	}
	
	public function form()
	{
		//
	}
	
	public function updateForm($n)
	{
		//
	}
	
	public function update($n)
	{
		//
	}
}
