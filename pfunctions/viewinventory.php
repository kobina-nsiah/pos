<?php

include("../classes/product.php");
$obj = new product();

$row = $obj->get_all_products();
$html = "";
while($row){
	$html .= "<div id = 'home1' data-role = 'collapsible'>";
	$html .= "<h1>{$row['name']}</h1>";
	$html .= "<ul id = 'theList' data-role='listview'>";
	$html .= "<li><a href='#'>Product Code: {$row['code']}</a></li>";
	$html .= "<li><a href='#'>Product Name: {$row['name']}</a></li>";
	$html .= "<li><a href='#'>Selling Price : GHC {$row['selling_price']}</a></li>";
	$html .= "<li><a href='#'>Cost Price : GHC {$row['cost_price']}</a></li>";
	$html .= "<li><a href='#'>Quantity in Stock : {$row['stock_level']}</a></li></ul>";
	$html .= "</div>";
	
	$row=$obj->fetch();
}
 echo utf8_encode ($html);
?>		