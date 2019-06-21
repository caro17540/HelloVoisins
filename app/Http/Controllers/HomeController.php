<?php

namespace HelloVoisins\Http\Controllers;

use Illuminate\Http\Request;
use HelloVoisins\Http\Controllers\Controller;
use HelloVoisins\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count = User::all()->count();
        return view('home', ['user_count' => $count ]);
    }
}
