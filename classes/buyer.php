<?php

/**
 * author: Obed Kobina Nsiah
 * date: September 17, 2015
 */
	
include_once("includedb.php");
	
class buyer extends adb
{
	//Constructor method
	function buyer() {
		
	}
	
	function add_buyer($number, $name, $discount) {
		$str_query = "insert into mw_pos_buyer set phone_number = '$number', name = '$name', discount = '$discount'";
			
		return $this->query($str_query);
	}
	
	function get_buyer($number) {
		$str_query = "select * from mw_pos_buyer where phone_number = '$number'";
			
		if(!$this->query($str_query)) {
			return false;
		}
			
		return $this->fetch();
	}
		
	
	function get_all_buyers() {
		$str_query = "select * from mw_pos_buyer";
			
		if(!$this->query($str_query)) {
			return false;
		}
			
		return $this->fetch();
	}
	
	function update_discount($number, $discount) {
		$str_query = "update mw_pos_buyer set discount = $discount where phone_number = $number";
			
		return $this->query($str_query);
	}
}
?>