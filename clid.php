<?php
	$route = "cliente";
	$c = "clic.php";
	$r = "clir.php";
	$colsDb = [
		"cd_Cliente", "nm_Cliente", "cd_ClienteCpf"
	];
	$cols = [
		"Código", "Nome", "CPF"
	];
	include_once "includes/head.php";
	include_once "includes/header.php";
?>

	<main>
		<h2>Cliente</h2>
		<?php
			include_once "includes/menu.php";

			$cd = $_POST["cd"];
			$query = "select nm_Cliente from Cliente where cd_Cliente = $cd";
			$db = new mysqli($host, $user, $pass, $db, $port);
			if ($nm = $db->query($query)->fetch_row()[0])
				$db->commit();
			else
				$db->rollback();
			$query = "delete from Cliente where cd_Cliente = $cd";
			if ($db->query($query)) {
				$db->commit();
				echo "<p><span>&#9989;</span><span> <span>$nm</span> excluído com sucesso!</span></p>";
			}
			else {
				$db->rollback();
				echo "<p><span>&#128169;</span> <span>Ops! Algo deu errado...</span></p>";
			}
			$query = "select * from Cliente order by cd_Cliente";
			if ($res = $db->query($query)) {
				$db->commit();
				include_once "includes/table.php";
			}
			else {
				$db->rollback();
				echo "<p><span>&#128169;</span> <span>Ops! Algo deu errado...</span></p>";
			}
			$db->close();
		?>
	</main>

<?php
	include_once "includes/footer.php";
	include_once "includes/foot.php";
?>