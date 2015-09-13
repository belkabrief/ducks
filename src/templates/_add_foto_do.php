<?php
	include_once '_libFunc.php';
	$t_id = $_POST['id_elem'];
	if (isset($t_id)) {
		if (array_key_exists($t_id, $products)){
			$uploaddir = './tmp_pics/';
			$uploadfile = $uploaddir . basename($_FILES['pic_elem']['name']);
			if (move_uploaded_file($_FILES['pic_elem']['tmp_name'], $uploadfile)) {
				echo "Картинка успешно загружена\n";
				$products[$t_id][4] = $uploaddir . $_FILES['pic_elem']['name'];
				//var_dump($products);
				//Запись в файл обновлённого списка товаров
				itemsWriteFile($products, $file);
			} else {
				echo "Не удалось загрузить картинку\n";
			}
		} else {
			echo "Товара с id = '" . $t_id . "' нет в каталоге";
		}
	}
	
?>