<?php
$html = "";

<label for="pcode">Product Code:</label> 
				<input type="text" name="pcode" id="pcode">
				
				<label for="quant">Quantity:</label> 
				<input type="text" name="quant" id="quant">
while($row){
	$html .= "<div data-role = 'collapsible'>";
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
 
 /*
	$more = TRUE;
	$i = 1;
	while($more){
		if ((isset($_POST['code'.$i])) && ($_POST[code.$i] != "")){
			do something;
		} 
		else {
			$more = FALSE;
		}
		$i++;
	}
	if ()
 */
?>		