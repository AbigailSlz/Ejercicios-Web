<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Introduccion a PHP</title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../../Estilo/estilos.css">

	<link rel="stylesheet" href="../../plugins/css/style.css">
	<link rel="stylesheet" href="../../plugins/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="../../plugins/sweetalert2-master/dist/sweetalert2.css">
</head>
<body>

<!-- Inicio link especial flotante con parametros direccionados con JS -->
	<a class='flotante atras' href='#' 
		onclick="
		mensaje
		(
		'../index.php',
		'Menu PHP',
		'Esta pagina contiene el menu donde se encuentran todos los ejercicios PHP'
		);">
		<i class="fa fa-chevron-left" aria-hidden="true"></i>
	</a>
<!-- Fin link especial flotante con parametros direccionados con JS -->


	<legend>
		<h2>Introduccion a PHP | impresion en pantalla</h2>
	</legend>

	<div class="container">
		<div class="container-fluid">
			<p class="resultado">
				<?php
					//Impresion en pantalla
					echo "Hola Mundo";
				?>
			</p>
		</div>
	</div>

	<div class="container">
		<a href="../index.php" title="Regresar al menu principal" class="btn btn-primary pull-right btn-lg">Menú Inicial</a>
	</div>

	<script src="../../plugins/js/funciones.js"></script>
	<script src="../../plugins/sweetalert2-master/dist/sweetalert2.js"></script>
</body>
</html>