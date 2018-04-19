<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DropdownController extends Controller
{
    /**
	 * description 
	 */
	public function UkerByUsername()
	{
		$idUnit = '1121101505008';
		
		$rows = \App\Unitkerja::where('idUnit', 'like', $idUnit.'%')->get();
		//~ $rows = DB::connection('pbn_ref')->select("
			//~ select * from ref_unit where idUnit = ".$idUnit."
		//~ ");
		$html_out = '<option value="" style="display:none;">Pilih</option>';
		foreach($rows as $row) {
			$html_out .= '<option value="'.$row->idUnit.'">'.$row->idUnit.' '.strlen($row->idUnit).'</option>';
		}
		//~ $html_out .= '<option value="2">Dua</option>';
		return $html_out;
	}
	
	/**
	 * description 
	 */
	public function tes()
	{
		$html_out = '<option value="1">Satu</option>';
		$html_out .= '<option value="2">Dua</option>';
		$html_out .= '<option value="3">Tiga</option>';
		
		return $html_out;
	}
}
