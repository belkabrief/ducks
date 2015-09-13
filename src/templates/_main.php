<main>
	<div class="container">
		<div class="banner"></div>
		<div class="row clearfix">
			<!-- боковое меню -->
			<?php include_once '_menu.php'?>
			
			<div class="column column9">
				<div class="catalog">
					<div class="row clearfix">
					<!-- элементы каталога -->
					<?php include_once '_catalog_list.php'?>
					</div>
					<!-- пагинация -->
					<?php //include_once '_pagination.php'?>
				</div>
			</div>
		</div>
	</div>
</main>