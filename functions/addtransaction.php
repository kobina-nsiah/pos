<?php
include("../classes/product.php");
include("../classes/transaction_products.php");
include("../classes/transaction.php");
include("../classes/buyer.php");
$objProduct = new product();
$objTrans = new transaction();
$objBuyer = new buyer();
$objTransp = new transaction_products();

$name = $_REQUEST['bname'];
$num = $_REQUEST['bnum'];
$date = date("Y-m-d");
$time = date("h:i:sa");

if (isset($num)){
	
	$row = $objBuyer->get_buyer($num);
	
	if ($row == null){
		$objBuyer->add_buyer($num, $name, 1);	
	}
	else {
		//do discount stuff
	}
	
$more = TRUE;
	$i = 0;
	$totalcost = 0;

	while($more){
		if ((isset($_REQUEST['pcode'.$i])) && ($_REQUEST['pcode'.$i] != "")){
				//get selling price of product
				$row = $objProduct->get_product($_REQUEST['pcode'.$i]);
				$sp = $row['selling_price'];
				//add to transaction products
				$objTransp->add_transaction_product($_REQUEST['pcode'.$i], $_REQUEST['quant'.$i], $date, $time, $num, "obed.nsiah");
				//reduce product quantity
				$objProduct->decrease_stock_level($_REQUEST['pcode'.$i], $_REQUEST['quant'.$i]);
				
				$totalcost += ($_REQUEST['quant'.$i] * $sp);
			} 
		else {
			$more = FALSE;
		}
			$i++;
	}
	
	$objTrans->add_transaction($date, $time, $num, "obed.nsiah", $totalcost);
	if ($totalcost > 500){
		//send sms about 10% discount;
	}
	//header("Location: ../desktop/transaction.html");
}
?>		