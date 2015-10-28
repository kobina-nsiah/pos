<?php
if(isset($_REQUEST['pcode'])){
	include("../classes/product.php");
	$obj = new product();
		
	$pcode=$_REQUEST['pcode'];
	
	$name = $_REQUEST['name'];
	
	if (isset($_REQUEST['sprice'])){
		$sp = $_REQUEST['sprice'];
		$obj->update_selling_price($pcode,$sp);	
	}
	
	if (isset($_REQUEST['cprice'])){
		$cp = $_REQUEST['cprice'];
		$obj->update_cost_price($pcode,$cp);	
	}
	
	if (isset($_REQUEST['quantity'])){
		$q = $_REQUEST['quantity'];
		$obj->increase_stock_level($pcode,$q);
	}
	
}
//header("Location: ../desktop/update_existing.html");	
?>		