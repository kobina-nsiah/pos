<?php
if(isset($_REQUEST['pcode'])){
	include("../classes/product.php");
	$obj = new product();
				
	$pcode=$_REQUEST['pcode'];
	$name = $_REQUEST['name'];
	$sp = $_REQUEST['sprice'];
	$cp = $_REQUEST['cprice'];
	$stock = $_REQUEST['quantity'];
	
	$obj->add_product($pcode, $name, $sp, $cp, $stock);	
}

//echo "http://cs.ashesi.edu.gh/~csashesi/class2016/obed-nsiah/mobileweb/pos/desktop/addstock.html";
//header(Location: ../desktop/addstock.html);	
?>		