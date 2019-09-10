<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<!-- Meta tag obrigatória -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Yasmim Morais de Vasconcelos">
	<title>Visualizar Produto - Associação dos Empresários do Bairro do Alecrim</title>

	<!-- Link para a folha de estilo -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	<!-- Favicon  -->
	<link rel="shortcut icon" href="assets/img/favicon_aeba.png">
	
	<!-- Links das fontes: Roboto e Open Sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap" rel="stylesheet">
</head>
<body>
	<!-- Breadcrumb -->
	<section>
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="#">Página Inicial</a></li>
		    <li class="breadcrumb-item"><a href="#">Produtos & Serviços</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Visualizar Produto</li>
		  </ol>
		</nav>
	</section>

			<!-- Informações sobre o produto selecionado -->
			<div class="col-lg-8 mx-auto  mt-4">
				<div class="card  border">
				  <div class="row no-gutters ">
				    <div class="">
				    <!-- Carrossel de imagens do produto -->
				     <div id="carouselProduto" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block"  style="width: 450px; height: 450px;" src="assets/img/produto.jpg" alt="Primeiro Slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block" style="width: 450px; height: 450px;" src="assets/img/produto.jpg" alt="Segundo Slide">
						    </div>
						  </div>
						  <!-- Controles -->
						  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Anterior</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Próximo</span>
						  </a>
						</div>
				    </div>

					<!-- Sobre o produto -->
				    <div class="col-md-5">
				      <div class="card-body">
				      	<!-- Nome da empresa -->
				        <a href="#"><h5 class="title-card-empresa">Nome do Produto</h5></a>
				        <!-- Categoria da empresa -->
				        <a href="#">Categoria do ramo<br></a><br>
				        <!-- Descrição do produto em listagem (até 10) -->
				        <p class="text-flow">Descrição:
					        <ul>
					        	<li>Característica do produto</li>
					        	<li>Característica do produto</li>
					        	<li>Característica do produto</li>
					        	<li>Característica do produto</li>
					        </ul>
				    	</p>
				        <!-- Endereço e link para o mapa -->
				        <br>
				        <b>Vendido por:</b> <a href="#">NOME DA EMPRESA</a><br>	
						<b>Telefone:</b> <a href="#">(84) 9 9999-9999</a>
						<!-- Ir para empresa no mapa -->
						<a href="eita"><button type="submit" class="btn btn-l-green pl-4 pr-4 float-lg-left mt-5 mb-2">Localizar empresa no mapa</button></a>
				      </div>
				    </div>
				  </div>
				</div>
			</div>	
		</div>
	</section>


	<!-- Você também pode se interessar por: --> 
	<section class="container">
		<div class="row">
			<div class="col-lg-9 pt-4 mx-auto mt-3">
				<h2 class="title pt-3 pb-1">Você também pode se interessar por:</h2>
				<div class="row-title mb-3"></div>
			</div>	
		</div>

		<div class="row">
			<div class="col-lg-9 mx-auto">
					<!-- Produtos ofertados pela empresa -->
					<div class="row">
						<div class="card m-3" style="width: 12rem;">
						<!-- Imagem do produto -->
						  <img class="card-img-top" src="assets/img/produto.jpg" alt="Imagem de capa do card">
						  <div class="card-body">
						  	<!-- Nome do produto -->
						    <a href="" class="card-title-noticia">Título do card</a>
						    <!-- Categoria do produto -->
						    <a href="#">Categoria do ramo<br></a>
						  </div>
						</div>

						<div class="card m-3" style="width: 12rem;">
						<!-- Imagem do produto -->
						  <img class="card-img-top" src="assets/img/produto.jpg" alt="Imagem de capa do card">
						  <div class="card-body">
						  	<!-- Nome do produto -->
						    <a href="" class="card-title-noticia">Título do card</a>
						    <!-- Categoria do produto -->
						    <a href="#">Categoria do ramo<br></a>
						  </div>
						</div>

						<div class="card m-3" style="width: 12rem;">
						<!-- Imagem do produto -->
						  <img class="card-img-top" src="assets/img/produto.jpg" alt="Imagem de capa do card">
						  <div class="card-body">
						  	<!-- Nome do produto -->
						    <a href="" class="card-title-noticia">Título do card</a>
						    <!-- Categoria do produto -->
						    <a href="#">Categoria do ramo<br></a>
						  </div>
						</div>

					</div>
				</div>

	</section>
	
	<!-- Plugins -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>