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

	<legend>
		<h2>Introduccion a PHP | Ciclos | Pares e impares</h2>
	</legend>

	<div class="container">
		<div class="container-fluid">
			<p class="resultado">
				<?php
					for ($i=1; $i <= 100; $i++) { 
                        echo $i%2==0 ? "El numero $i es par.<br>":"El numero $i es impar<br>";
                    }
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