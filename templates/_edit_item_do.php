<?php	
	include_once '_libFunc.php';
	$t_id = $_POST['tek_id'];
	$products = [];
	$file = __DIR__ . "/../data/products.csv";
	
	itemsReadFile($products);
	echo "id " . $t_id . "<br/>";
	
	$products[$t_id][1] = $_POST['t_title'];
	$products[$t_id][2] = $_POST['t_descr'];
	$products[$t_id][3] = $_POST['t_price'];
	$products[$t_id][4] = $_POST['t_foto'];
	
	if (itemsWriteFile($products, $file)){
		echo "Товар с id=" . $t_id . " успешно изменён.<br/>";
	} else {
		echo "oops...";
	}
?>