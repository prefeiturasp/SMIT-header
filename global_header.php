<?php 
	$color = isset($_GET["color"]) ? $_GET["color"] : "";
?>

<!DOCTYPE html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		CSS -->
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	</head>
	<body>
		<header class="container-flex <?php echo($color);?>">
			<div id="logos" class="container-flex" >
				<div class="col chi-logo">
						<img src="assets/img/logo_CHI_<?php echo($color); ?>.png" alt="Logo skyline São Paulo Cidade Inteligente e Humana">
				</div>
				<div class="col">
					<img src="assets/img/logo_secretaria_<?php echo($color); ?>.png" alt="Logo brasão Prefeitura de São Paulo, Secretaria de Inovação e Tecnologia.">
				</div>
				
			</div>
			<div class="dropdown">
				<a id="explore-btn" href="#" class="dropbtn" data-toggle="colapse" data-hover="dropdown">Explore▼</a>
			</div>
			<nav id="dropdownmenu">
					<a href="https://www.prefeitura.sp.gov.br/cidade/secretarias/inovacao/">Secretaria Municipal de Inovação e Tecnologia</a>
					<a href="https://011lab.prefeitura.sp.gov.br">(011).Lab</a>
					<a href="https://copicola.prefeitura.sp.gov.br/">CopiCola</a>
					<a href="https://premiasampa.prefeitura.sp.gov.br/">Premia Sampa</a>
			</nav> 
		</header>
		<script src="assets/js/script.js"></script>
	</body>
</html>