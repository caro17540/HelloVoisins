<?php

namespace HelloVoisins\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
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

        public function form()
        {
                return view('account_form');
        }

        public function update()
        {
                return view('account_update');
        }

        public function delete()
        {
                return view('account_delete');
        }
}
