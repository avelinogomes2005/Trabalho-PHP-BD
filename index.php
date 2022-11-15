<!DOCTYPE html>
<html lang="en">

<head>

	<?php include_once 'header.php'; ?>
	<title>INÍCIO</title>
</head>

<style>
	.imagem-fundo {
		position: absolute;
		width: 100%;
		height: 100;
	}
</style>

<body>
	<div><img src="imagens/IMG1.png" style="width: 100vw; height: 100vh" class="imagem-fundo"></div>
	<nav style="width: 100%;" class="navbar navbar-expand-lg">
		<div class="container-fluid" style="display: flex; flex-direction:row;">
			<div style="display: flex; flex-direction:row;">
				<a class="navbar-brand" href="#"><img src="imagens/LOGO.png" style="width:auto; height:3em;"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#" style="font-size:2em; color: white;font-weight: 600;">TELA DE INÍCIO</a>
						</li>
					</ul>
				</div>
			</div>
			<div style="display:flex; flex-direction: row; height:fit-content; justify-content:space-evenly; width: fit-content">
				<a href="funcionario_login.php"><button class="btn btn-outline-success" type="submit" style="font-weight: 800;">FUNCIONÁRIO</button></a>
				<a href="cliente_login.php"><button class="btn btn-outline-success" type="submit" style="font-weight: 800;">CLIENTE</button></a>
				
			</div>

		</div>
	</nav>

	<div class="logos">
		<div class="row ">
			<div class="col servicos">
				<div class="">
					<img src="imagens/dollar.svg" style="height:1.7em;width:auto;">
					<br>
					Crédito
				</div>
			</div>
			<div class="col servicos">
				<div class="">
					<img src="imagens/bar-chart-line-fill.svg" style="height:1.7em;width:auto;">
					<br>
					Investimento
				</div>
			</div>
			<div class="col servicos">
				<div class="">
					<img src="imagens/telephone-fill.svg" style="height:1.7em;width:auto;">
					<br>
					Serviço 24H
				</div>
			</div>
		</div>

	</div>

	<script src="bootstrap.bundle.min.js"></script>


</body>

</html>
