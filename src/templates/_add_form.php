<!-- Запись товара в категорию по выбранному значению select(id категории) -->
<form action="add.php" method="post">
	<input type="text" name="title" value="" placeholder="title"/>
	<textarea name="description"></textarea>
	<input type="text" name="price" value="" placeholder="title"/>
	<select name="category">
		<?php foreach ($categories as $category){
			echo "<option>". $category['id'] ."</option>";
		}
		?>
	</select>
	<input type="submit" value="Отправить" />
	
</form>