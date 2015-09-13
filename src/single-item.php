<?php 
	include_once __DIR__ . '/templates/_header.php';
	include_once __DIR__ . '/templates/_top_menu.php';
	
	if (!empty($_GET['id']) && is_numeric($_GET['id'])){
		$id = $_GET['id'];
		
		$statement = $connection->prepare('SELECT * FROM `products` WHERE id = :id');
		$statement->execute(['id'=>$id]);
		$product = $statement->fetch(PDO::FETCH_ASSOC);
		
		include_once __DIR__ . '/templates/_single-item.php';
		
		if (!$product){
			die("Такой утки не обнаружено");
		} 
	} else {
		echo 'Такого товара нет.';
	}

	include_once __DIR__ . '/templates/_footer.php';
?>
