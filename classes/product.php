<?php

/**
 * author: Obed Kobina Nsiah
 * date: September 17, 2015
 */
	
include_once("includedb.php");
	
class product extends adb
{
	//Constructor method
	function product() {
		
	}
	
	function add_product($code, $name, $selling_price, $cost_price, $stock_level) {
		$str_query = "insert into mw_pos_product set code = '$code', name = '$name', cost_price = '$cost_price', 
					selling_price = '$selling_price', stock_level = '$stock_level'";
			
		return $this->query($str_query);
	}
	
	function get_product($code) {
		$str_query = "select * from mw_pos_product where code = '$code'";
			
		if(!$this->query($str_query)) {
			return false;
		}
			
		return $this->fetch();
	}
		
	
	function get_all_products() {
		$str_query = "select * from mw_pos_product";
			
		if(!$this->query($str_query)) {
			return false;
		}
			
		return $this->fetch();
	}
	
	function update_selling_price($code, $selling_price) {
		$str_query = "update mw_pos_product set selling_price = $selling_price where code = $code";
			
		return $this->query($str_query);
	}
		
	function update_cost_price($code, $cost_price) {
		$str_query = "update mw_pos_product set cost_price = $cost_price where code = $code";
			
		return $this->query($str_query);
	}
	
	function increase_stock_level($code, $stock_level) {
		$str_query = "update mw_pos_product set stock_level = stock_level + $stock_level where code = $code";
			
		return $this->query($str_query);
	}

	function decrease_stock_level($code, $stock_level) {
		$str_query = "update mw_pos_product set stock_level = stock_level - $stock_level where code = $code";
			
		return $this->query($str_query);
	}		
}
?>