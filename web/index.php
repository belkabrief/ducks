<?php
	$src_path = __DIR__ . '/../src/';
	
	include_once $src_path . 'utilities/db.php';
	
	$categories = get_categories($connection);
	
	//количество элементов на страницу (пагинация)
	$per_page = 2;
	
	//номер страницы (пагинация)
	if (isset($_GET['p'])){
		$p = $_GET['p'];
		if ($p < 1){
			$p = 1;
		}
	} else {
		$p = 1;
	}
	
	//$categories = get_categories($connection);
	//try catch - prepare (вставка товара по заполненным данным POST)
	//если post пустой, то отображ форму добавления
	
	//определяем, какую страницу сайта загрузить
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	} else {
		$page = 'main';
	}
	
	switch ($page){
		case 'main':
			include_once $src_path . "main.php";
			break;
		case 'catalog':
			include_once $src_path . "catalog.php";
			break;
		case 'single-item':
			include_once $src_path . "single-item.php";
			break;
		case 'add_foto':
			include_once $src_path . "add_foto.php";
			break;
		case 'edit_item':
			include_once $src_path . "edit_item.php";
			break;
		default: 
			echo "<h1>Ooops, 404</h1>";
			break;
	}
		
?>