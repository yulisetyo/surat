<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Login;

class AuthenticationController extends Controller
{
	/**
	 * description 
	 */
	public function login()
	{
		return view('login');
	}
	
	/**
	 * description 
	 */
	public function token()
	{
		return csrf_token();
	}
	
	/**
	 * description 
	 */
	public function postLogin(Request $request)
	{
		$username = $request->input('username'); //ferdino
		$password = sha1($request->input('password')); //0529fe25d682b630a9f8693d2c09d5a200a36cfa
		try {
			$userByName = Login::getUserBy($username);
			if($userByName == "success") {
				
				$userByPass = Login::getUserByPassword($username, $password);
				
				if($userByPass == "success") {
					
					$userData = Login::getUserActive($username, $password);
					
					if(count($userData) >= 1) {
						
						session([
							'is_logged_in' => true,
							'userid' => $userData->id,
							'nip' => $userData->nip,
							'username' => $userData->username,
							'password' => $userData->password,
							'nama' => $userData->nama,
							'kd_unit' => $userData->id_unit,
							'who' => $userData->who,
							'register' => $userData->register,
							'nm_unit' => $userData->nm_unit,
							'nm_jabatan' => $userData->nm_jabatan,
							'eselon' => $userData->eselon,
							'tipe' => $userData->tipe,
							'grade' => $userData->grade,
						]);
						
						$data = [
							'userid' => $userData->id,
							'username' => $userData->username,
							'nip' => $userData->nip,
							'nama' => $userData->nama,
							'kd_unit' => $userData->id_unit,
							'who' => $userData->who,
							'register' => $userData->register,
							'nm_unit' => $userData->nm_unit,
							'nm_jabatan' => $userData->nm_jabatan,
							'eselon' => $userData->eselon,
							'tipe' => $userData->tipe,
							'grade' => $userData->grade,
						];
						
						return redirect("/home", $data);
						
					} else {
						throw new \Exception("User not active");	
					}
				} else {
					throw new \Exception("Incorrect password");
				}
			} else {
				throw new \Exception("User not found");
			}
		} catch(\Exception $e) {
			return $e;
		}
	}
}
