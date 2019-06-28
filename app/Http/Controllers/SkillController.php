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
		$skills = Skill::orderBy('skill.title', 'asc')->get();
		return view('skills_list', ['skills'=>$skills]);
	}
	
	/**
     * Show the form for creating a new skill.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skill_create');
    }

	/**
     * Create a new skill.
     *
     * @param  Request $r
     * @return \HelloVoisins\Skills
     */
	public function insert(Request $r)
	{
		$skill = Skill::create([
			'title' => $r->title,
		]);
		$skill->save();
		//return view('skills_list');
		return redirect('skills');
	}
	
	public function edit($id)
	{
		$skill = Skill::findOrFail($id);
		return view('skill_edit', ['skill'=>$skill]);
	}
	
	public function update(Request $r, $id)
	{
		$skill = Skill::findOrFail($id)->update([
			'title' => $r->title
		]);
		return redirect('skills');
	}

	/**
     * Delete a skill.
     *
     * @param  $id
     * @return \HelloVoisins\skills
     */
	public function delete($id)
	{
		$skill = Skill::findOrFail($id)->delete();
		return redirect('skills');
	}
}
