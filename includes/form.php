<form action="#" method="post">
	<?php foreach ($cols as $index => $col) { ?>
		<label for="<?php echo $colsDb[$index]; ?>"><?php echo $col; ?></label>
		<input type="text" id="<?php echo $colsDb[$index]; ?>"
		       value="<?php if ($row) echo $row[$index]; ?>"
		       name="<?php echo $colsDb[$index]; ?>">
	<?php } ?>
	<input type="hidden" value="<?php echo $cdOld; ?>" name="cd">
	<input type="submit" value="&#128190;" name="crud" title="Salvar">
</form>