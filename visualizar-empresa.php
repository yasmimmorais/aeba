<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<!-- Meta tag obrigatória -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Yasmim Morais de Vasconcelos">
	<title>Visualizar Empresa - Associação dos Empresários do Bairro do Alecrim</title>

	<!-- Link para a folha de estilo -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	<!-- Favicon  -->
	<link rel="shortcut icon" href="assets/img/favicon_aeba.png">
	
	<!-- Links das fontes: Roboto e Open Sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap" rel="stylesheet">
</head>
<body>
	<!-- Breadcrumb -->
	<section style="background-color: #e9ecef;">
		<div class="container max-width" style="max-width: 900px;">
			<div aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Página Inicial</a></li>
		    	<li class="breadcrumb-item"><a href="#">Produtos & Serviços</a></li>
		    	<li class="breadcrumb-item active" aria-current="page">Visualizar Empresa</li>
			  </ol>
			</div>			
		</div>
	</section>

	<!-- Título da sessão Notícias --> 
	<section class="container">
		<div class="row">
			<div class="col-lg-12 pt-4 mx-auto">
				<h2 class="title pt-3 pb-1">Produtos & Serviços</h2>
				<div class="row-title mb-3"></div>
			</div>
		</div>
	</section>

	<!-- Barra de pesquisa e lista de categorias & Informações sobre a empresa selecionada -->
	<section class="container">
		<div class="row">
			<div class="col-lg-4">
				<!-- Barra de pesquisa -->
				<div class="input-group mb-3 text-center">
					<input type="text" class="form-control" placeholder="Sua busca" aria-label="Sua busca" aria-describedby="button-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary bg-success text-light border-0 mr-md-5" type="button" id="button-addon2">Pesquisar</button>
					</div>
				</div>

				<!-- Dropdown para o mobile -->
				<div class="dropdown d-block">
				  <a class="drop mb-3 btn btn-secondary dropdown-toggle" style="background-color: #01cb62; border:0;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Categorias
				  </a>

				  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				    <a class="dropdown-item" href="#">Action</a>
				    <a class="dropdown-item" href="#">Another action</a>
				    <a class="dropdown-item" href="#">Something else here</a>
				  </div>
				</div>

				<!-- Lista de Categorias dos Produtos & Serviços -->
				<div class="list-group mr-lg-5 border-secondary">
					  <a href="#" class="list-group-item list-group-item-action active-green">
					    Cras justo odio
					  </a>
					  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
					  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
					  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
					  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
					  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
					  <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
					</div>
				</div>
				
				<!-- Informações sobre a empresa selecionada -->
				<div class="col-lg-8 mx-auto">
					<div class="card mb-3 border-0">
					  <div class="row no-gutters ">
					    <div class="col-md-4 col-sm-5">
					    <!-- Logo da empresa -->
					      <img class="mb-0" src="assets/img/logo-empresa.png" style="width: 100%;" class="" alt="Imagem da Notícia">
					    </div>
					    <div class="col-md-8 col-sm-7">
					      <div class="card-body pt-lg-3 pl-lg-3 pl-sm-0 pr-sm-0">
					      	<!-- Nome da empresa -->
					        <a href="#"><h5 class="title-card-empresa">Nome da empresa</h5></a>
					        <!-- Categoria da empresa -->
					        <a href="#">Categoria do ramo</a>	
					        <!-- Endereço e link para o mapa -->
					        <br>
					        <b>Endereço:</b> <a href="#">RUA DAS AMOREIRAS - 342, LAGOA NOVA - RN</a><br>	
							<b>Telefone:</b> <a href="#">(84) 9 9999-9999</a>
					      </div>
					    </div>
					  </div>
					</div>
					
					<h2 class="title-md-v-empresa pt-3 pb-1">Produtos & Serviços</h2>
					<div class="row-title mb-3"></div>


					<!-- Produtos ofertados pela empresa -->
					<div class="row">
						<div class="card m-3 col-md-3 p-0">
						<!-- Imagem do produto -->
						  <img class="img-fluid" src="assets/img/produto.jpg" alt="Imagem de capa do card">
						  <div class="card-body">
						  	<!-- Nome do produto -->
						    <a href="" class="card-title-noticia">Título do card</a><br>
						    <!-- Categoria do produto -->
						    <a href="#">Categoria do ramo<br></a>
						  </div>
						</div>

						<div class="card m-3 col-md-3 p-0">
						<!-- Imagem do produto -->
						  <img class="img-fluid" src="assets/img/produto.jpg" alt="Imagem de capa do card">
						  <div class="card-body">
						  	<!-- Nome do produto -->
						    <a href="" class="card-title-noticia">Título do card</a><br>
						    <!-- Categoria do produto -->
						    <a href="#">Categoria do ramo<br></a>
						  </div>
						</div>

						<div class="card m-3 col-md-3 p-0">
						<!-- Imagem do produto -->
						  <img class="img-fluid" src="assets/img/produto.jpg" alt="Imagem de capa do card">
						  <div class="card-body">
						  	<!-- Nome do produto -->
						    <a href="" class="card-title-noticia">Título do card</a><br>
						    <!-- Categoria do produto -->
						    <a href="#">Categoria do ramo<br></a>
						  </div>
						</div>

						<div class="card m-3 col-md-3 p-0">
						<!-- Imagem do produto -->
						  <img class="img-fluid" src="assets/img/produto.jpg" alt="Imagem de capa do card">
						  <div class="card-body">
						  	<!-- Nome do produto -->
						    <a href="" class="card-title-noticia">Título do card</a><br>
						    <!-- Categoria do produto -->
						    <a href="#">Categoria do ramo<br></a>
						  </div>
						</div>

					</div>
				</div>
	</section>

	<!-- Paginação -->
	<section class="container mt-5">
		<div class="row">
			<div class="offset-lg-4 col">
			<nav aria-label="...">
			  <ul class="pagination">
			    <li class="page-item disabled">
			      <span class="page-link">Anterior</span>
			    </li>

			    <li class="page-item" aria-current="page">
			      <span class="page-link active-green">
			        1
			        <span class="sr-only">(current)</span>
			      </span>
			    </li>

			    <li class="page-item"><a class="page-link" href="#">2</a></li>

			    <li class="page-item"><a class="page-link" href="#">3</a></li>

			    <li class="page-item">
			      <a class="page-link" href="#">Próximo</a>
			    </li>
			  </ul>
			</nav>
			</div>
		</div>
	</section>

	<!-- Plugins -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>