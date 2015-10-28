<?php

/**
 * author: Obed Kobina Nsiah
 * date: September 17, 2015
 */
	
include_once("includedb.php");
	
class teller extends adb
{
	//Constructor method
	function teller() {
		
	}
	
	function add_teller($username, $password, $fn, $ln, $phone_number) {
		$str_query = "insert into mw_pos_teller set username = '$username', password = MD5('$password'), first_name = '$fn', 
					last_name = '$ln', phone_number = '$phone_number'";
			
		return $this->query($str_query);
	}
	
	function get_teller($username) {
		$str_query = "select * from mw_pos_teller where username = '$username'";
			
		if(!$this->query($str_query)) {
			return false;
		}
			
		return $this->fetch();
	}
		
	
	function get_all_tellers() {
		$str_query = "select * from mw_pos_teller";
			
		if(!$this->query($str_query)) {
			return false;
		}
			
		return $this->fetch();
	}
}
?>