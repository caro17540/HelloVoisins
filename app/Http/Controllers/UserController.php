<?php

namespace HelloVoisins\Http\Controllers;

use Illuminate\Http\Request;
use HelloVoisins\User;
use HelloVoisins\Skill;
use HelloVoisins\Repositories\UserRepository;

class UserController extends Controller
{
    protected $userRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $userRepository, User $user)
    {
        $this->middleware('auth');
        $this->userRepository=$userRepository;
        $this->user=$user;
	}
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::all();
    }

    /**
     * Récupère :
     *            - la liste des users avec leurs skills.
     *            - la liste des skills
     *
     * @return \Illuminate\Http\Response
     */
    public function listWithSkills(Request $request)
    {
        if ($request->filled("skillTitle")) {
            $users = UserRepository::getWithSkillsForSkill($request->input("skillTitle"));
        }
        else {
            $users = UserRepository::queryWithSkills();
        }
        $skills = Skill::orderBy('skill.title', 'asc')->get();
        return view('user_list', ['users' => $users , 'skills' => $skills ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $id = (int)$user_id;
        $users = User::findOrFail($id)->with('skills')->withCount(['skills'])->get();
        $id = $id - 1 ;
        $user = $users[$id];
        return view ('user_show', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
