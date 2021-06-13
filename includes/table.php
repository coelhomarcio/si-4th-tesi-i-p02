<table>
	<thead>
		<tr>
			<?php foreach ($cols as $col)
				echo "<th><a>$col</a></th>";
			?>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
			while ($row = $res->fetch_assoc()) {
				echo "<tr>";
				foreach ($colsDb as $colDb)
					echo "<td>$row[$colDb]</td>";
				?>
				<td>
					<form action="cliu.php" method="post">
						<input type="hidden" value="<?php echo $row[$colsDb[0]]; ?>" name="cd">
						<input type="submit" value="&#128221;" title="Editar">
					</form>
					<form action="clid.php" method="post">
						<input type="hidden" value="<?php echo $row[$colsDb[0]]; ?>" name="cd">
						<input type="submit" value="&#128465;" title="Excluir">
					</form>
				</td>
				<?php
				echo "</tr>";
			}
		?>
	</tbody>
</table>