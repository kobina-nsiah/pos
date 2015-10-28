<?php

/**
 * author: Obed Kobina Nsiah
 * date: September 17, 2015
 */
	
include_once("includedb.php");
	
class transaction_products extends adb
{
	//Constructor method
	function transaction_products() {
		
	}
	
	function add_transaction_product($product_code, $product_quantity, $date, $time, $buyer_number, $teller_username) {
		$str_query = "insert into mw_pos_transaction_products set product_code = $product_code, product_quantity = $product_quantity, 
					date = '$date', time = '$time', teller_username = '$teller_username', buyer_number = '$buyer_number'";
			
		return $this->query($str_query);
	}
}
?>