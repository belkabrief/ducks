<?php
	//с какого индекса товара выводим каталог 
	$first_item = $per_page * ($p - 1) + 1;
	//до какого индекса товара выводим каталог 
	$last_item = $per_page * $p + 1;
	
	if ($first_item  > count($products)){
		echo "Такой страницы нет<br/>";
	} else {
		for($i = $first_item; $i < $last_item; $i++) {
			if (isset($products[$i])){
				$product = $products[$i];
				include '_shop_element.php';
			}
		}
	}
	
?>