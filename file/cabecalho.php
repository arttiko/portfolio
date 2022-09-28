<!-- Barra de navegação -->
<nav class="navbar navbar-expand-lg navbar-fixed-top bg-light justify-content-center">
	<div class="container">
		<a class="navbar-brand" href="#"><img src="assets/pic/logo.svg" width="100" height="100" class="d-inline-block align-top img-responsive" style="width: 180px; margin-top: -.9em;"></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav justify-content-center">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="#">Planos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Novidades</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Produtos</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Eventos
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">Inscrições</a></li>
						<li><a class="dropdown-item" href="#">Galeria de Fotos</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Institucional
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">Hitória DLC Natal</a></li>
						<li><a class="dropdown-item" href="#">História CDL Jovem</a></li>
						<li><a class="dropdown-item" href="#">Diretoria CDL Natal</a></li>
						<li><a class="dropdown-item" href="#">Diretoria CDL Jovem</a></li>
						<li><a class="dropdown-item" href="#">Imprensa</a></li>
						<li><a class="dropdown-item" href="#">Revistas</a></li>
						<li><a class="dropdown-item" href="#">Artigos</a></li>
						<li><a class="dropdown-item" href="#">Eventos Frequentes</a></li>
						<li><a class="dropdown-item" href="#">Feriados 2022</a></li>
						<li><a class="dropdown-item" href="#">Rede Mulher de valor</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Associados</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Atendimentos
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">Fale conosco</a></li>
						<li><a class="dropdown-item" href="#">Ouvidoria</a></li>
						<li><a class="dropdown-item" href="#">Seja nosso parceiro</a></li>
					</ul>
				</li>
				<!-- botão do modal de login -->
				<a href="#" id="bt-inic" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Área do associado</a>

				<!-- Modal -->
				<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="ModalLabel">Entrar</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form>
									<div class="mb-3">
										<label for="InputEmail1" class="form-label">E-mail</label>
										<input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
									</div>
									<div class="mb-3">
										<label for="InputPassword1" class="form-label">Senha</label>
										<input type="password" class="form-control" id="InputPassword1">
									</div>
									<div class="mb-3 form-check">
										<input type="checkbox" class="form-check-input" id="Check1">
										<label class="form-check-label" for="Check1">Permanecer logado</label>
									</div>
									
								</form>
							</div>
							<hr>
							<div id="load" style="display: none;">
								<img src="assets/icon/load.svg" style="width: 30px; height: 30px;" >
							</div>
							<div id="btn-acesso">
								<div  class="container d-grid gap-2" style="margin-bottom: 5%;">
									
									<button id="login" type="submit" class="btn btn-primary btn-block">Acessar</button>
									<button id="recuperar" class="btn btn-outline-secondary btn-block" data-bs-target="#modalRecuperar" data-bs-toggle="modal" data-bs-dismiss="modal">Recuperar Senha</button>
									<button id="primeiro" class="btn btn-outline-secondary btn-block" data-bs-target="#modalPrimeiroAcesso" data-bs-toggle="modal" data-bs-dismiss="modal">Primeiro Acesso</button>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal de Recuperação-->
				<div class="modal fade" id="modalRecuperar" aria-hidden="true" aria-labelledby="modalRecuperarLabel2" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="modalRecuperarLabel2">Recuperar Senha</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<div class="mb-3">
									<label for="InputEmail1" class="form-label">E-mail</label>
									<input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
								</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-primary btn-block" data-bs-target="#loginModal" data-bs-toggle="modal" data-bs-dismiss="modal">Voltar</button>
								<button type="submit" class="btn btn-primary btn-block">Recuperar</button>
							</div>
						</div>
					</div>
				</div>
				<!-- modal Primeiro acesso -->
				<div class="modal fade" id="modalPrimeiroAcesso" aria-hidden="true" aria-labelledby="modalPrimeiroLabel2" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="modalPrimeiroLabel2">Primeiro Acesso</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<div class="mb-3">
									<label for="InputEmail1" class="form-label">E-mail</label>
									<input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
								</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-primary" data-bs-target="#loginModal" data-bs-toggle="modal" data-bs-dismiss="modal">Voltar</button>
								<button type="submit" class="btn btn-primary btn-block">Recuperar</button>
							</div>
						</div>
					</div>
				</div>
			</ul>
		</div>
	</div>
</nav>

<!-- Slide -->
<section>
	<div id="slide" class="swiper mySwiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide text-center" >
				<img class="img-slide-g" src="assets/pic/slide/car1.jpg" alt="">
				<img class="img-slide-m" src="assets/pic/slide/car11.jpg" alt="">
			</div>
			<div class="swiper-slide text-center" >
				<img class="img-slide-g" src="assets/pic/slide/car2.jpg" alt="">
				<img class="img-slide-m" src="assets/pic/slide/car22.jpg" alt="">
			</div>
			<div class="swiper-slide text-center" >
				<img class="img-slide-g" src="assets/pic/slide/car3.jpg" alt="">
				<img class="img-slide-m" src="assets/pic/slide/car33.jpg" alt="">
			</div>
		</div>
	</div>
</section>

<!-- Acesso -->
<section id="caixa-acesso">
	<div class="container">
		<div  class="row text-justify">
			<div class="col-md-6 col-lg-6 col-xl-3 animate__animated animate__fadeInUp tex"><a href="#" class="texto-link">
				<div class="card h-100 acesso">
					<h5>Certificado Digital</h5>
					<p>Garanta a confidencialidade de suas informações pessoais com o Certificado Digital da CDL Natal</p>			
				</div></a>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-3 animate__animated animate__fadeInUp"><a href="#" class="texto-link">
				<div class="card h-100 acesso">
					<h5>SPC Brasil</h5>
					<p>Consulte o perfil dos seus clientes para garantir a realização de um bom negócio ou realize negaticação de seu documento.</p>
				</div></a>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-3 animate__animated animate__fadeInUp"><a href="#" class="texto-link">
				<div class="card h-100 acesso">
					<h5>Concilia Card</h5>
					<p>Conferimos as suas vendas por meio de cartões de crédito e débito para garantir o recebimento de todas as transações.</p>
				</div></a>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-3 animate__animated animate__fadeInUp"><a href="#" class="texto-link">
				<div class="card h-100 acesso">
					<h5>Locação de Auditório</h5>
					<p>Disponibilizamos diversas salas e espaços amplos bem equipadis para a realização de seu evento.</p>
				</div></a>
			</div>
		</div>
	</div>
</section>