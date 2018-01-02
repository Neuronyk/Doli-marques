<?php

/**
 * Define Common function to access calendar items
 * And format it in vCalendar
 * */


class MarquesLib
{
	
	private $db;
	
	private $user;
	
	private $langs;
	
	function __construct($user, $db, $langs)
	{
		$this->user 	= $user;
		$this->db 		= $db;
		$this->langs 	= $langs;
	}
	
	/**
	 * fera qqc
	 * 
	 * @param int calendar user id
	 * @return string
	 */

	public function qqc($calid, $oid=false, $ouri=false)
	{
		// TODO : do some
		$qqc = 'SELECT qqc' FROM 'xxx'
		
		return $qqc;
		
	}