<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
	 * description 
	 */
	public function index()
	{
		return view('profile');
	}
}
