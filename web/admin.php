<?php
	$src_path = __DIR__ . '/../src/';
	include_once $src_path . '/templates/_header.php';
	include_once $src_path . '/templates/_top_menu.php';
?>

<main>
	<div class="container">
		<div class="banner"></div>
		<div class="row clearfix">
			
			<div class="column column9">
				<div class="catalog">
					<div class="row clearfix">
						<div class="head_cont">Выберите действие</div>
						<div style="width:127%;">
							<a class="adm_btn" href="adm.php?to_do=add_item">Добавить товар</a>
							<a class="adm_btn" href="adm.php?to_do=edit_item">Редактировать товар</a>
							<a class="adm_btn" href="adm.php?to_do=del_item">Удалить товар</a>
							<a class="adm_btn" href="adm.php?to_do=add_category">Добавить категорию</a>
							<a class="adm_btn" href="adm.php?to_do=edit_category">Редактировать категорию</a>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php
	include_once $src_path . '/templates/_footer.php';
?>