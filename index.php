<?php
    // Inclui arquivo programado
	include('includes/querystring.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<!-- Deixa compativel com IE/Edge -->
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Da zoom em smartphone -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Carrega icone -->
	<link rel="shortcut icon" href="img/favicon.ico" />
    <!-- Importa css -->
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
    <!-- Concatena titulo por QueryString -->
	<title><?php echo $titulo; ?></title>
</head>
<body>
	<div id="tudo">
		<div id="topo">
			<a href="index.php">Rafael Pellegatti Fiorin</a>
		</div>
		<div id="menu1">
			<ul>
                <!-- Trabalha com a condicao ativa no querystring.php -->
				<li class="
				<?php 
					if($menuAtivo == '' || $menuAtivo == 'home') {
						echo 'active'; // atribui ativacao e atribuicao inicial
					}
				?>
				">
					<a href="index.php?pg=home" title="Início">Home</a>
				</li>
				<li class="
				<?php 
					if($menuAtivo == 'projetos') {
						echo 'active'; // atribui ativacao
					}
				?>
				">
					<a href="index.php?pg=projetos" title="Projetos">Meus projetos</a>
				</li>
				<li class="
				<?php 
					if($menuAtivo == 'contato') {
						echo 'active'; // atribui ativacao
					}
				?>
				">
					<a href="index.php?pg=contato" title="Contatar">Contato</a>
				</li>
			</ul>
			<!--	
			<div id="menu2">
				<ul>
					<li class="
					<?php 
						if($menuAtivo == 'contato') {
							echo 'active'; //atribui ativacao
						}
					?>
					">
						<a href="index.php?pg=contato" title="Contatar">Contato</a>
					</li>
				</ul>
			</div>
			-->
		</div>
		<div id="conteudo">
		<?php
			// Inclui pagina apos selecionar opcao do menu
			include($paginaResultado);
		?>
		</div>
		<br/>
		<div id="rodape">
            <!-- Concatena imprimindo ano corrente -->
			&copy; rpfiorin <?php echo date('Y'); ?>
		</div>
	</div>
</body>
	<!-- Chama o arquivo JavaScript -->
	<script type="text/javascript" src="public/js/slider.js"></script>
</html>