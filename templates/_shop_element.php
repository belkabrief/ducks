<div class="item-block column column4">
	<a href="single-item.php" class="item" title="<?=$product[1];?>">
		<?php
			if ($product[4] != ''){
				$foto = $product[4];
			} else {
				$foto = 'img/item.jpeg';
			}
		?>
		<img src="<?=$foto;?>" alt="уточка">
	</a>			
	<a href="index.php?page=single-item&id=<?=$product[0];?>" class="btn-basket">В Корзину</a>
</div>