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
				<div>Добавление фото для товара</div>
				<div class="wr_edit_form">
					<form method = "post" enctype="multipart/form-data">
						<label>
							<p>ID</p>
							<input name = "id_elem" type = "text" value = "" />
						</label>
						
						<label>
							<p>Картинка для товара</p>
							<input name = "pic_elem" type = "file" value = "" />
						</label>
						<div class = "wr_subm">
							<input type = "submit" value = "Добавить" />
						</div>
					</form>
				</div>
				
				<!-- Скрипт добаления фото товара -->
				<?php include_once __DIR__ . '/templates/_add_foto_do.php'?>
				
			</div>
		</div>
	</div>
</main>
<?php include_once __DIR__ . '/templates/_footer.php'?>
</body>