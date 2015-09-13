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
					<div class="head_cont">Удаление товара из базы данных</div>
					<form method="post">
						<label>
							<p>ID товара в базе</p>
							<input name = "id_elem" type = "text" value = "" />
						</label>
						<div class="wr_subm">
							<input type="submit" value="Удалить" />
						</div>
					</form>
					
					<div class="wr_result_mess">
						<?php show_result_delete($connection);?>
					</div>
					<div>
						<?php show_table($connection);?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>