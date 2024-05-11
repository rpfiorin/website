<!-- Arquivo PHP responsavel pela alteracao de conteudo via QueryString -->
<?php
	// Formas de capturar parametros: request, get(usado aqui) ou post
	$paginaResultado = '';
	$titulo = 'Portfólio';
	$menuAtivo = '';

	if (isset($_GET['pg'])) {

	// Variavel que recebe parametro da url
	$pagina = $_GET['pg'];

		if ($pagina == 'home') {
			$paginaResultado = 'pages/home.php';
			$menuAtivo = 'home';
		}
		else if ($pagina == 'projetos') {
			$paginaResultado = 'pages/projetos.php';
			$menuAtivo = 'projetos';
		}
		else if ($pagina == 'contato') {
			$paginaResultado = 'pages/contato.php';
			$menuAtivo = 'contato';
		}
		// Retorna a home se nao for nenhuma das opcoes
		else {
			$paginaResultado = 'pages/home.php';
			$menuAtivo = 'home';
		}
	}
	else {
			$paginaResultado = 'pages/home.php';
			$menuAtivo = 'home';
	}
?>
