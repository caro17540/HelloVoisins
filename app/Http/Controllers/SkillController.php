<?php

namespace HelloVoisins\Http\Controllers;

use Illuminate\Http\Request;
use HelloVoisins\Skill;

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
		$skills=Skill::all();
		return view('skills_list', ['skills'=>$skills]);
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
