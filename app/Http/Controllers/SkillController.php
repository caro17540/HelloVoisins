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
	
	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skill_create');
    }

	public function insert()
	{
		return view('skill_create');
	}
	
	public function edit($n)
	{
		//
	}
	
	public function update($n)
	{
		//
	}
}
