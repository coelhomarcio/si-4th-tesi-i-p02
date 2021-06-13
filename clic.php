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

			$row = false;

			if (isset($_POST["cd_Cliente"])) {
				$cd = $_POST["cd_Cliente"];
				$nm = $_POST["nm_Cliente"];
				$cpf = $_POST["cd_ClienteCpf"];
				$query = "insert into Cliente values ('$cd', '$nm', '$cpf')";
				$db = new mysqli($host, $user, $pass, $db, $port);
				if ($db->query($query)) {
					$db->commit();
					echo "<p><span>&#9989;</span><span> <span>$nm</span> cadastrado com sucesso!</span></p>";
				}
				else {
					$db->rollback();
					echo "<p><span>&#128169;</span> <span>Ops! Algo deu errado...</span></p>";
				}
				$db->close();
			}

			include_once "includes/form.php";
		?>
	</main>

<?php
	include_once "includes/footer.php";
	include_once "includes/foot.php";
?>