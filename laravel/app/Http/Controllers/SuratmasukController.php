<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suratmasuk;

class SuratmasukController extends Controller
{
    /**
	 * description 
	 */
	public function index()
	{
		$rows = Suratmasuk::all();
		
		return $rows;
	}
	
	/**
	 * description 
	 */
	public function create(Request $request)
	{
		try {
			
			$data = [
				'kk' => '',
				'hash' => sha1(''),
				'date' => $request->input('tglsurat'),
				'from' => $request->input('dari'),
				'ref' => $request->input('kepada'),
				'type' => $request->input('dari'),
				'subject' => $request->input('perihal'),
				'cc' => $request->input('perihal'),
				'attach' => $request->input('lampiran'),
				'attachType' => $request->input('perihal'),
				'kualifikasi' => $request->input('kualifikasi'),
				'klasifikasi' => $request->input('klasifikasi'),
				'mkNum' => $request->input('klasifikasi'),
				'mkVal' => $request->input('klasifikasi'),
				'unit' => $request->input('klasifikasi'),
				'idFile' => $request->input('klasifikasi'),
				'active' => $request->input('klasifikasi'),
				'who' => $request->input('klasifikasi'),
				'time' => $request->input('klasifikasi'),
				'ip' => $request->input('klasifikasi'),
			];
			
		} catch(\Exception $e){
			return $e;
		}
	}
	
	/**
	 * description 
	 */
	public function update(Request $request)
	{
		try {
			
		} catch(\Exception $e){
			return $e;
		}
	}
}
