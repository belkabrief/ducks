<?php
	$file = __DIR__ . "/data/products.csv";

	if (!file_exists($file)) {
		die("We don't have data file");
	}

	if(($fp = fopen($file, 'r+')) === false) {
		die("Error while opening file");
	}

	$products = [];

	$i = 0;
	while (($data = fgetcsv($fp, 1000, ';')) !== false) {
		if ($i > 0) {
			$products[$data[0]] = $data;
		}
		$i++;
	}
	
	fclose($fp);
	
	//���������� ��������� �� �������� (���������)
	$per_page = 2;
	
	//����� �������� (���������)
	if (isset($_GET['p'])){
		$p = $_GET['p'];
		if ($p < 1){
			$p = 1;
		}
	} else {
		$p = 1;
	}
	
	//����������, ����� �������� ����� ���������
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	} else {
		$page = 'main';
	}
	
	switch ($page){
		case 'main':
			include_once "main.php";
			break;
		case 'catalog':
			include_once "catalog.php";
			break;
		case 'single-item':
			include_once "single-item.php";
			break;
		case 'add_foto':
			include_once "add_foto.php";
			break;
		case 'edit_item':
			include_once "edit_item.php";
			break;
		default: 
			echo "<h1>Ooops, 404</h1>";
			break;
	}
		
?>