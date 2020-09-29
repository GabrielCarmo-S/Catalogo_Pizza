
<!DOCTYPE html>

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<link href="<?php echo base_url("public/css/style1.css"); ?>" rel="stylesheet">

	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("public/img/favicon.png"); ?>">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<title>Perien - Pizzaria</title>
</head>

<body>

	<!--Cabeçalho-->
	<nav class="navbar navbar-expand-lg menu fixed-top">
		<div class="container">
			
			<a class="navbar-brand titulo" href="#">Pizzaria</a>

			<button class="navbar-toggler" type="button" id="sfc" data-toggle="offcanvas" aria-expanded="false">
				<span class="navbar-toggler-icon"><i class="fas fa-sliders-h" id="sfc1"></i></span>
				<span class="navbar-toggler-icon"><i class="fas fa-times" id="sfc2"></i></span>
			</button>

			<div class="collapse navbar-collapse p-3 p-lg-0 mt-5 mt-lg-0 d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end mobileMenu">		
				<ul class="navbar-nav"> 
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fas fa-home"></i>Home</a>
					</li>  
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fas fa-question-circle"></i>Sobre nós</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" type="button" data-toggle="modal" data-target="#contact"><i class="fas fa-envelope"></i>Contato</a>
					</li>
				</ul> 
			</div>
		</div>
	</nav>

	<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="post">
					<div class="card">
						<div class="card-header p-0">
							<div class="header text-white text-center py-2">
								<h3><i class="fa fa-envelope"></i> Contate-Nos</h3>
								<p class="m-0">Teremos prazer em ajudá-lo</p>
							</div>
						</div>
						<div class="card-body p-3">
							<div class="form-group">
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fa fa-user text-info"></i></div>
									</div>
									<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome ou apelido" required>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
									</div>
									<input type="email" class="form-control" id="nombre" name="email" placeholder="exemplo@gmail.com" required>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
									</div>
									<textarea class="form-control" placeholder="Enviamos sua mensagem" required></textarea>
								</div>
							</div>
							<div class="text-center">
								<input type="submit" value="Enviar" class="btn btn-info btn-block rounded-0 py-2">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div class="jumbotron-fluid">
		<div class="image-central">
			<h1 class="mb-3">Perien</h1>
			<h3 class="text-center">ESPECIALIDADES ITALIANAS</h3>
			<h5 class="mt-3">Pizzas boas | Bom vinho</h5>
		</div>
	</div>

	<div class="jumbotron jumbotron-fluid servicos">
		<div class="slider owl-carousel">
			<div class="card text-center">
				<a><i class="fas fa-truck"></i>Entraga Grátis</a>
			</div>		
			<div class="card text-center">
				<a><i class="fas fa-phone"></i>Suporte Online</a>
			</div>
			<div class="card text-center">
				<a><i class="fas fa-hand-holding-usd"></i>Garantia De Devolução</a>
			</div>
		</div>
	</div>


	<div class="jumbotron jumbotron-fluid welcome mb-0">
		<div class="welcome-content">
			<div class="welcome-txt"> 
				<h3>Bem Vindo</h3>
				<h4>Reconhecido pelas boas pizzas.</h4>
				<h5>Vestibulum neque enim, hendrerit sagittis nisi sit amet, feugiat rutrum arcu. Nam maximus magna eu mi pulvinar, gravida tincidunt tortor euismod. Sed iaculis justo eros, eu molestie magna molestie ut. Morbi arcu ligula. </h5>
				<button class="btn btn-wel">Mais sobre nós<i class="fas fa-arrow-right"></i></button>
			</div>
			<div class="welcome-img"></div>
		</div>
	</div>

	<div class="container">
		<h2 class="text-center mb-5 mt-5">Selecione as Pizzas</h2>
		<div class="card cardapio mb-5">
			<div class="card-deck text-center cardapio-slidder owl-carousel">
				<div class="card">
					<a href=""><img class="card-img" src="<?php echo base_url("public/img/pizza30.png"); ?>"></a>
					<div class="card-body">
						<p class="card-text">ALIQUAM QUAERAT</p>
						<h5>25$</h5>
					</div>
				</div>
				<div class="card">
					<a href=""><img class="card-img" src="<?php echo base_url("public/img/pizza30.png"); ?>"></a>
					<div class="card-body">
						<p class="card-text">ALIQUAM QUAERAT</p>
						<h5>25$</h5>
					</div>
				</div>
				<div class="card">
					<a href=""><img class="card-img" src="<?php echo base_url("public/img/pizza30.png"); ?>"></a>
					<div class="card-body">
						<p class="card-text">ALIQUAM QUAERAT</p>
						<h5>25$</h5>
					</div>
				</div>
				<div class="card">
					<a href=""><img class="card-img" src="<?php echo base_url("public/img/pizza30.png"); ?>"></a>
					<div class="card-body">
						<p class="card-text">ALIQUAM QUAERAT</p>
						<h5>25$</h5>
					</div>
				</div>
			</div>
			<div class="card-deck text-center mt-4 cardapio-slidder owl-carousel">
				<div class="card">
					<a href=""><img class="card-img" src="<?php echo base_url("public/img/pizza30.png"); ?>"></a>
					<div class="card-body">
						<p class="card-text">ALIQUAM QUAERAT</p>
						<h5>25$</h5>
					</div>
				</div>
				<div class="card">
					<a href=""><img class="card-img" src="<?php echo base_url("public/img/pizza30.png"); ?>"></a>
					<div class="card-body">
						<p class="card-text">ALIQUAM QUAERAT</p>
						<h5>25$</h5>
					</div>
				</div>
				<div class="card">
					<a href=""><img class="card-img" src="<?php echo base_url("public/img/pizza30.png"); ?>"></a>
					<div class="card-body">
						<p class="card-text">ALIQUAM QUAERAT</p>
						<h5>25$</h5>
					</div>
				</div>
				<div class="card">
					<a href=""><img class="card-img" src="<?php echo base_url("public/img/pizza30.png"); ?>"></a>
					<div class="card-body">
						<p class="card-text">ALIQUAM QUAERAT</p>
						<h5>25$</h5>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="jumbotron jumbotron-fluid noticias mb-0">
		<div class="container noticias-d">
			<div class="noticias-img mb-5">
				<img class="noticias-image" src="<?php echo base_url("public/img/vinho.jpg"); ?>">
			</div>
			<div class="noticias-txt mt-4 text-center">
				<i class="fas fa-wine-glass-alt"></i>
				<h5>Toda quarta-feira</h5>
				<h2>Happy Hour!</h2>
				<h3 class="mt-3">Metade do preço nas garrafas de vinho e seis deliciosos lanches por R$9</h3>
				<button class="btn btn-noticias mt-3">Mais Noticias</button>
			</div>
		</div>
	</div>

	<div class="jumbotron jumbotron-fluid testemunhos-inicio mb-0">
		<div class="container">
			<h2 class="text-center mb-4">O QUE AS PESSOAS DIZEM</h2>
			<div class="row">
				<div class="testemunhos-slidder owl-carousel">
					<div class="testemunhos">
						<i class="fas fa-quote-left"></i>
						<p class="descricao">Nam eget tempor massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam euismod libero molestie libero placerat, sed maximus sem tincidunt. </p>

						<div class="testemunhos-conteudo">
							<div class="pic">
								<img src="<?php echo base_url("public/img/girl.jpg"); ?>">
							</div>
							<h3 class="title">Marcia</h3>
						</div>
					</div>
					<div class="testemunhos">
						<i class="fas fa-quote-left"></i>
						<p class="descricao">Nam eget tempor massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam euismod libero molestie libero placerat, sed maximus sem tincidunt. </p>

						<div class="testemunhos-conteudo">
							<div class="pic">
								<img src="<?php echo base_url("public/img/girl.jpg"); ?>">
							</div>
							<h3 class="title">Ana</h3>
						</div>
					</div>
					<div class="testemunhos">
						<i class="fas fa-quote-left"></i>
						<p class="descricao">Nam eget tempor massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam euismod libero molestie libero placerat, sed maximus sem tincidunt. </p>

						<div class="testemunhos-conteudo">
							<div class="pic">
								<img src="<?php echo base_url("public/img/girl.jpg"); ?>">
							</div>
							<h3 class="title">Julia</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="jumbotron jumbotron-fluid rodape">
		<ul class="lista-rodape">
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="fas fa-home"></i>Home</a>
			</li>  
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="fas fa-question-circle"></i>Sobre nós</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"type="button" data-toggle="modal" data-target="#contact"><i class="fas fa-envelope"></i>Contato</a>
			</li>
		</ul>
		<div class="social-media mb-3">
			<div class="button-media">
				<i class="fab fa-facebook"></i>

			</div>
			<div class="button-media">
				<i class="fab fa-instagram"></i>
				
			</div>
			<div class="button-media">
				<i class="fab fa-twitter"></i>
			</div>
			<div class="button-media">
				<i class="fab fa-github"></i>
				
			</div>	
		</div>	
		<p class="copyrights">&copy; 2020 Gabriel Carmo</p>
	</div>

	<div>
		<a href="https://api.whatsapp.com/send?phone=#############" target="_blank">
			<img  class="whatsapp" src="https://images.tcdn.com.br/static_inst/integracao/imagens/whatsapp.png" />
		</a>
	</div>

	<div class="overlay"></div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

	<script src="<?php echo base_url("public/js/style1.js"); ?>"></script>



</body>
</html>














