<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //~ return view('home');
        return view('beranda');
    }
    
    /**
	 * description 
	 */
	public function inbox()
	{
		return view('inbox');
	}
	
    /**
	 * description 
	 */
	public function outbox()
	{
		return view('outbox');
	}
	
	/**
	 * description 
	 */
	public function archived()
	{
		return view('archived');
	}
}
