<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Usermodel;

class LoginController extends Controller
{
    /**
	 * description 
	 */
	public function index()
	{
		return view('auth.login');
		//~ return "ini halaman login";
	}
	
	/**
	 * description 
	 */
	public function postLogin(Request $request)
	{
		return $request->all();
	}
}
