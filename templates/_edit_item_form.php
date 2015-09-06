<form class="edit-elem-form" name="edit-form" method="post">
	<input name="tek_id" type="hidden" value="<?=$t_id;?>"/>
	<label>
		<p>title</p>
		<input name="t_title" type="text" value="<?=$products[$t_id][1];?>" />
	</label><br/>
	<label>
		<p>description</p>
		<input name="t_descr" type="text" value="<?=$products[$t_id][2];?>" />
	</label><br/>
	<label>
		<p>price</p>
		<input name="t_price" type="text" value="<?=$products[$t_id][3];?>" />
	</label><br/>
	<label>
		<p>foto</p>
		<input name="t_foto" type="text" value="<?=$products[$t_id][4];?>" />
	</label><br/>
	<div class = "wr_subm">
		<input type="submit" value="Сохранить" />
	</div>
</form>