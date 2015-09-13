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
					<div class="head_cont">Добавление раздела в базу данных</div>
					<form method="post">
						<?php include_once "_db_category_form_fields.php" ?>
						<div class="wr_subm">
							<input type="submit" value="Сохранить" />
						</div>
					</form>
					
					<div class="wr_result_mess">
						<?php show_result_add_category($connection);?>
					</div>
					<div>
						<?php show_table_category($connection);?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>