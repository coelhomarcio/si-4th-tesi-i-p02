<?php
	$host = "";
	$user = "";
	$pass = "";
	$db = "";
	$port = "";
?>

<header>
	<div>
		<img src="logo/logo.png" alt="Logo ACME" title="Logo ACME">
		<h1>ACME Artigos esportivos</h1>
	</div>
	<nav>
		<ul>
			<li><a class="<?php if ($route == "home") echo "active"; ?>" href="index.php">Home</a></li>
			<li><a class="<?php if ($route == "cliente") echo "active"; ?>" href="cliente.php">Cliente</a></li>
			<li><a class="<?php if ($route == "produtos") echo "active"; ?>" href="produtos.php">Produtos</a></li>
			<li><a class="<?php if ($route == "carrinho") echo "active"; ?>" href="carrinho.php">Carrinho</a></li>
		</ul>
	</nav>
</header>