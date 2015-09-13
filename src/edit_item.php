<?php include_once __DIR__ . '/templates/_header.php'?>
<body>
<?php include_once __DIR__ . '/templates/_top_menu.php'?>
<main>
	<div class="container">
		<div class="banner"></div>
		<div class="row clearfix">
			<!-- боковое меню -->
			<?php include_once __DIR__ . '/templates/_menu.php'?>
			
			<div class="column column9">
				<div>Редактирование товара</div>
				<div class="wr_edit_form">
					<form method = "post" enctype="multipart/form-data">
						<label>
							<p>ID</p>
							<input name = "id_elem" type = "text" value = "" />
						</label>
						
						<div class = "wr_subm">
							<input type = "submit" value = "Показать инфо по товару" />
						</div>
					</form>
				</div>
				
				<!-- Форма редактирования товара -->
				<?php 
				if (isset($_POST['id_elem'])){
					$t_id = $_POST['id_elem'];
				
					if (array_key_exists($t_id, $products)){
						include_once __DIR__ . '/templates/_edit_item_form.php';
					} else {
						echo "Товара с id = '" . $t_id . "' нет в каталоге";
					}
				}
				
				if (isset($_POST['tek_id'])){
					include_once __DIR__ . '/templates/_edit_item_do.php';
				}

				?>
				
			</div>
		</div>
	</div>
</main>
<?php include_once __DIR__ . '/templates/_footer.php'?>
</body>