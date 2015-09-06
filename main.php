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
				<div class="catalog">
					<div class="row clearfix">
					<!-- элементы каталога -->
					<?php include_once __DIR__ . '/templates/_catalog_list.php'?>
					</div>
					<!-- пагинация -->
					<?php include_once __DIR__ . '/templates/_pagination.php'?>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include_once __DIR__ . '/templates/_footer.php'?>
</body>