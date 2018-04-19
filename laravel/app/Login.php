<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    
    /**
	 * description 
	 */
	public function getUsernameBy($username, $passthru)
	{
		try {
			$rows = \DB::select("
				SELECT a.uId AS id,
					a.uNip AS nip, 
					a.uRealName AS nama,
					a.uName AS username,
					a.uPass AS password,
					a.idUnit AS id_unit,
					a.lastLogin AS last_login,
					a.lastLogout AS last_logout,
					a.uActive AS aktif,
					a.uRegister AS register,
					a.who AS who,
					a.time AS TIME
				FROM user_data a
				WHERE     a.uName = ?
					  AND a.uPass = ?
			", [$username, $passthru]);
			
			if(count($rows) >= 0) {
				return "success";
			} else {
				throw new \Exception("failed");
			}

		} catch(\Exception $e){
			return $e;
		}
	}
	
	/**
	 * description 
	 */
	public function getUserByPassword($username, $passthru)
	{
		try {
			$rows = \DB::select("
				SELECT a.uId AS id,
					a.uNip AS nip, 
					a.uRealName AS nama,
					a.uName AS username,
					a.uPass AS password,
					a.idUnit AS id_unit,
					a.lastLogin AS last_login,
					a.lastLogout AS last_logout,
					a.uActive AS aktif,
					a.uRegister AS register,
					a.who AS who,
					a.time AS TIME
				FROM user_data a
				WHERE     a.uName = ?
					  AND a.uPass = ?
			", [$username, $passthru]);
			
			if(count($rows) >= 0) {
				return "success";
			} else {
				throw new \Exception("failed");
			}
			
		} catch() {
			return $e;
		}
	}
	
	/**
	 * description 
	 */
	public function getUserActive($username, $passthru)
	{
		try {
			$rows = \DB::select("
				SELECT a.UID AS id,
					   a.uNip AS nip,
					   a.uRealName AS nama,
					   a.uName AS username,
					   a.uPass AS password,
					   a.idUnit AS id_unit,
					   a.lastLogin AS last_login,
					   a.lastLogout AS last_logout,
					   a.uActive AS aktif,
					   a.uRegister AS register,
					   a.who AS who,
					   a.time AS time,
					   d.*
				  FROM    user_data a
					   LEFT JOIN
						  (SELECT b.idUnit AS kd_unit,
								  c.jbtnNama AS nm_unit,
								  c.jbtn AS nm_jabatan,
								  c.eselon,
								  c.tipe,
								  c.jbtnRank AS grade
							 FROM    pbn_ref.ref_unit b
								  LEFT JOIN
									 pbn_ref.ref_jabatan c
								  ON b.jbtnId = c.jbtnId) d
					   ON a.idUnit = d.kd_unit
				 WHERE     a.uName = ?
					   AND a.uPass = ?
					   AND a.uActive = 'y'
			", [$username, $passthru]);
			
			if(count($rows) >= 0) {
				return $rows[0];
			} else {
				throw new \Exception("failed");
			}
			
		} catch(\Exception $e){
			return $e;
		}
	}
}
