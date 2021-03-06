<?php

namespace HelloVoisins\Http\Controllers;

use Illuminate\Http\Request;
use HelloVoisins\Transaction;

class TransactionController extends Controller
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
		$mestransactions = Transaction::all();
	
		return view('transactions_list', ['transactions' => $mestransactions] );
	}
	
	public function read($n)
	{
		//
	}

	/**
     * Show the the new transaction created.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_user , $_GET["skilltitle"])
    {
        return view('transaction_edit');
    }

}

	