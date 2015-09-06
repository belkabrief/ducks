<div class = "pagination">
	<span>Страница: </span>
	<?php
		$num_pg = round(count($products) / $per_page) + 1;
		for ($i = 1; $i < $num_pg; $i++){
			if ($i == $p){
				echo "<a class = 'act_paginat' href = '?p=" .$i . "'>" . $i . "</a>";
			} else {
				echo "<a href = '?p=" .$i . "'>" . $i . "</a>";
			}
		}
	?>
</div>