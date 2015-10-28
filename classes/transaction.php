<?php

/**
 * author: Obed Kobina Nsiah
 * date: September 17, 2015
 */
	
include_once("includedb.php");
	
class transaction extends adb
{
	//Constructor method
	function transaction() {
		
	}
	
	function add_transaction($date, $time, $buyer_number, $teller_username, $cost) {
		$str_query = "insert into mw_pos_transaction set date = '$date', time = '$time', buyer_number = $buyer_number, teller_username = '$teller_username', 
					cost = '$cost'";
			
		return $this->query($str_query);
	}
}
?>