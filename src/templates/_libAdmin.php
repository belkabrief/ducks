<?php
	//добавление товара в базу
	function show_result_add($connection){
		if (isset($_POST['title_elem'])){
			$t_title = $_POST['title_elem'];
			
			$statement = $connection->prepare("INSERT INTO `products`(`title`, `description`, `price`) VALUES (:title,:descr,:price)");
			$statement->bindParam(':title', $t_title, PDO::PARAM_STR, 100);
			$statement->bindParam(':descr', $_POST['descr_elem'], PDO::PARAM_STR, 100);
			$statement->bindParam(':price', $_POST['price_elem'], PDO::PARAM_STR, 10);
			$statement->execute();
			
			echo "Товар '" . $t_title . "' успешно добавлен.";
		} else {
			echo "Укажите название товара";
		}
	}
	
	//добавление раздела в базу
	function show_result_add_category($connection){
		if (isset($_POST['title_cat'])){
			$t_title = $_POST['title_cat'];
			
			$statement = $connection->prepare("INSERT INTO `category`(`title`, `description`) VALUES (:title,:descr)");
			$statement->bindParam(':title', $t_title, PDO::PARAM_STR, 100);
			$statement->bindParam(':descr', $_POST['descr_cat'], PDO::PARAM_STR, 100);
			$statement->execute();
			
			echo "Раздел '" . $t_title . "' успешно добавлен.";
		} else {
			echo "Укажите название раздела";
		}
	}
	
	//удаление товара из базы
	function show_result_delete($connection){
		if (isset($_POST['id_elem'])){
			$t_id = $_POST['id_elem'];
			
			if (!check_item_in_base($connection, $t_id)){
				echo "Товара с id='" . $t_id ."' нет в базе.";
			} else {
				$statement = $connection->prepare("DELETE FROM `products` WHERE `id` = :id");
				$statement->bindParam(':id', $t_id, PDO::PARAM_STR, 100);
				$statement->execute();
				echo "Товар с id='" . $t_id . "' успешно удалён.";
			}
		} else {
			echo "Укажите id товара для удаления";
		}
	}
	
	//редактирование товара
	function show_result_edit($connection){
		if (isset($_POST['id_elem'])){
			$t_id = $_POST['id_elem'];
			
			if (!check_item_in_base($connection, $t_id)){
				echo "Товара с id='" . $t_id ."' нет в базе.";
			} else {
				$statement = $connection->prepare("UPDATE `products` SET `title`=:title,`description`=:descr,`price`=:price WHERE id=:id");
			
				$statement->bindParam(':id', $t_id, PDO::PARAM_INT);
				$statement->bindParam(':title', $_POST['title_elem'], PDO::PARAM_STR, 100);
				$statement->bindParam(':descr', $_POST['descr_elem'], PDO::PARAM_STR, 100);
				$statement->bindParam(':price', $_POST['price_elem'], PDO::PARAM_STR, 10);
				$statement->execute();
				
				echo "Товар с id='" . $t_id . "' успешно изменён.";
			}
		} else {
			echo "Укажите id товара для редактирования";
		}
	}
	
	//редактирование раздела
	function show_result_edit_category($connection){
		if (isset($_POST['id_cat'])){
			$t_id = $_POST['id_cat'];
			
			if (!check_category_in_base($connection, $t_id)){
				echo "Раздела с id='" . $t_id ."' нет в базе.";
			} else {
				$statement = $connection->prepare("UPDATE `category` SET `title`=:title,`description`=:descr WHERE id=:id");
			
				$statement->bindParam(':id', $t_id, PDO::PARAM_INT);
				$statement->bindParam(':title', $_POST['title_cat'], PDO::PARAM_STR, 100);
				$statement->bindParam(':descr', $_POST['descr_cat'], PDO::PARAM_STR, 100);
				$statement->execute();
				
				echo "Раздел с id='" . $t_id . "' успешно изменён.";
			}
		} else {
			echo "Укажите id раздела для редактирования";
		}
	}
	
	//проверка наличия товара в базе
	function check_item_in_base($connection, $t_id){
		$stmt_check = $connection->prepare("SELECT * FROM `products` WHERE `id` = :id");
		$stmt_check->bindParam(':id', $t_id, PDO::PARAM_STR, 100);
		$stmt_check->execute();
		return $stmt_check->fetch();
	}
	
	//проверка наличия товара в базе
	function check_category_in_base($connection, $t_id){
		$stmt_check = $connection->prepare("SELECT * FROM `category` WHERE `id` = :id");
		$stmt_check->bindParam(':id', $t_id, PDO::PARAM_STR, 100);
		$stmt_check->execute();
		return $stmt_check->fetch();
	}
	
	//вывод всех товаров из базы
	function show_table($connection){
		echo "Товары в базе Products<br/>";
		$statement = $connection->prepare("SELECT * FROM `products`");
		$statement->execute();
		$statement->setFetchMode(PDO::FETCH_ASSOC);  
		echo "<table class='prod_tab'>
		<thead><td>Id</td><td>Title</td><td>Description</td><td>Price</td><td>Foto</td></thead>
		<tbody>";
		while ($row = $statement->fetch()) {
			echo "<tr><td>" . $row['id'] . "</td><td>" . $row['title'] . "</td><td>" . $row['description'] . "</td><td>" . $row['price'] . "</td><td>" . $row['foto'] . "</tr>";
		}
		echo "</tbody></table>";
	}
	
	//вывод всех разделов каталога из базы
	function show_table_category($connection){
		echo "Разделы в базе Category<br/>";
		$statement = $connection->prepare("SELECT * FROM `category`");
		$statement->execute();
		$statement->setFetchMode(PDO::FETCH_ASSOC);  
		echo "<table class='prod_tab'>
		<thead><td>Id</td><td>Title</td><td>Description</td></thead>
		<tbody>";
		while ($row = $statement->fetch()) {
			echo "<tr><td>" . $row['id'] . "</td><td>" . $row['title'] . "</td><td>" . $row['description'] . "</td></tr>";
		}
		echo "</tbody></table>";
	}
?>