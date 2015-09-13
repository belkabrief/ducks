<?php
	$src_path = __DIR__ . '/../src/';
	
	include_once $src_path . 'utilities/db.php';
	
	$categories = get_categories($connection);
	
	if (isset($_GET['to_do'])){
		$to_do = $_GET['to_do'];
	} else {
		$to_do = 'add_item';
	}
	
	
	switch ($to_do){
		case 'add_item':
			include_once $src_path . "db_add_item.php";
			break;
		case 'edit_item':
			include_once $src_path . "db_edit_item.php";
			break;
		case 'del_item':
			include_once $src_path . "db_delete_item.php";
			break;
		case 'add_category':
			include_once $src_path . "db_add_category.php";
			break;
		case 'edit_category':
			include_once $src_path . "db_edit_category.php";
			break;
		default: 
			echo "<h1>Ooops, 404</h1>";
			break;
	}
		
?>

