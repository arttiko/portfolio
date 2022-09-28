<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portfolio</title>

	<?php include_once('file/head.php'); ?>	<!-- Styles -->
	
</head>
<body>

	<?php include_once('file/cabecalho.php'); ?> <!-- navbar, slideshow -->

	<!-- Cards -->
	<div id="carta" class="container">
		<div class="row text-center">
		<div class="col-md-12 col-lg-6">
		<img class="img-fluid animate__animated animate__fadeInLeft" src="assets/pic/cards/banner_1.jpg" style="width: 100%; height: auto;">
		</div>
		<div class="col-md-12 col-lg-6">
		<img class="img-fluid animate__animated animate__fadeInRight" src="assets/pic/cards/banner_2.jpg" style="width: 100%; height: auto;">
		</div>
		</div>
	</div>

	<?php include_once('file/noticias.php') ?> <!-- Noticias -->
	
	<!-- Redes Sociais -->
	<section>
		<div class="container">
			<div class="row">
				<div>
					<br><hr><br>
				</div>
				<div class="text-center">
					<h3>Acompanhe-nos nas Redes Sociais e saiba mais sobre nossas ações</h3>
					<br>
					<a href="#" class="btn btn-outline-secondary btn-lg" style="border-radius: 30px;">Instagram</a>
					<a href="#" class="btn btn-outline-secondary btn-lg" style="border-radius: 30px;">Facebook</a>
				</div>
			</div>
		</div>
	</section>
	<br>

	<!-- Mapa do Site -->
	<section id="titulo-mapa" style="background-image: url(assets/pic/ponte.jpg);">
		<div class="container">
			<div class="row">
					<div class="col-sm-12 col-lg-6">
						<h2>Benefícios de ser associado CDL Natal</h2>
						<ul>
							<li>Eventos presenciais e online com temas atuais</li>
							<li>Muito networking entre os associados locais e do país</li>
							<li>Visitas técnicas a empresas que são Cases de Sucesso pelo país</li>
							<li>Acesso a descontos em eventos de parceiros</li>
							<li>Desconto na emissão de Certificados Digitais</li>
							<li>Desconto na locação de salas e auditório</li>
							<li>E muito mais!</li>
						</ul>	
						<div class="row">
							<div class="col-6"><a href="#" class="btn btn-outline-light btn-block btn-lg" style="width: 100%; height: 100%; border-width: 2px; border-radius: 15px; font-weight: 500;">Quero me associar</a></div>
							<div class="col-6"><a href="#" class="btn btn-outline-light btn-block btn-lg" style="width: 100%; height: 100%; border-width: 2px; border-radius: 15px; font-weight: 500;">Conhecer associados</a></div>
						</div>	
					</div>
					<div id="img-brasil" class="col-lg-6">
						<img src="assets/pic/brasil.png" class="img-fluid" >
					</div>
			</div>
			<div class="container text-center">
				<div class="row">
					<div class="col-lg-12 col-xl-4" style="margin-top: 5%;"><img src="assets/pic/cards/minibanner-1.jpg" alt=""></div>
					<div class="col-lg-12 col-xl-4" style="margin-top: 5%;"><img src="assets/pic/cards/minibanner-2.jpg" alt=""></div>
					<div class="col-lg-12 col-xl-4" style="margin-top: 5%;"><img src="assets/pic/cards/minibanner-3.jpg" alt=""></div>
				</div>
			</div>
			<br>
			<br>
		</div>
	</section>

	<?php include_once('file/rodape.php'); ?> <!-- footer ou rodape -->










	<!-- chamando os Javascript -->
	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
	<!-- Icones -->
	<script src="https://kit.fontawesome.com/536688a403.js" crossorigin="anonymous"></script>
	<!-- Bootstrap Js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<!-- js customizado -->
	<script src="assets/site/js/main.js" defer></script>
	<!-- Jquerry -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!-- Fim dos Javascript -->


</body>
</html>