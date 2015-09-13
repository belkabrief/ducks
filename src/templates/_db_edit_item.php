<main>
	<div class="container">
		<div class="banner"></div>
		<div class="row clearfix">
			<!-- боковое меню -->
			<?php include_once '_menu.php'?>
			
			<div class="column column9">
				<div class="catalog">
					<div class="row clearfix">
					<!-- форма для добавления товара в базу -->
					<div class="head_cont">Редактирование товара в базе данных</div>
					<form method="post">
						<label>
							<p>ID товара в базе</p>
							<input name = "id_elem" type = "text" value = "" />
						</label>
						<?php include_once "_db_item_form_fields.php" ?>
						<div class="wr_subm">
							<input type="submit" value="Изменить" />
						</div>
					</form>
					
					<div class="wr_result_mess">
						<?php show_result_edit($connection);?>
					</div>
					<div>
						<?php show_table($connection);?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>