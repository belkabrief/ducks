<div class="item-block column column4">
	<a href="single-item.php" class="item" title="<?=$product['title'];?>">
		<?php
			if ($product['foto'] != ''){
				$foto = "../" . $product['foto'];
			} else {
				$foto = 'img/item.jpeg';
			}
		?>
		<img src="<?=$foto;?>" alt="уточка">
	</a>			
	<a href="index.php?page=single-item&id=<?=$product['id'];?>" class="btn-basket">В Корзину</a>
</div>