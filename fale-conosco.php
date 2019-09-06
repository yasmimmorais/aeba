<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tag obrigatória -->
	<meta charset="UTF-8">
	<title>AEBA - Associação dos Empresários do Bairro do Alecrim</title>

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
		    <li class="breadcrumb-item active" aria-current="page">Fale Conosco</li>
		  </ol>
		</nav>
	</section>

	<!-- Formulário da sessão Fale Conosco -->
	<section class="container">
		<div class="row">
			<!-- Título da sessão -->
			<div class="col-sm-12 p-lg-4 p-sm-2 p-md-4">
				<h2 class="title pt-3 pb-1">Fale Conosco</h2>
				<div class="row-title mb-1"></div>
			</div>
		</div>

		<!-- Texto esquerdo em relação ao formulário -->
		<div class="row">
			<div class="col-lg-6 col-sm-12 pr-lg-4 p-sm-4"><br>
				<div class="title-green mt-sm-2">Podemos te ajudar com algo ou deseja se tornar um associado? </div>
				<div class="text-flow">
					<br>
					<p class="text-flow">Envie-nos uma mensagem por meio deste formulário ou, se preferir, para o email aeba.alecrim@email.com ou whatsapp (84) 9 8121 - 4551.</p> 
					<br>
				</div>
			</div>

		<!-- Formulário direito em relação ao texto -->
		<div class="col-lg-6 col-sm-12">
			<form>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				    <!-- Nome Completo	 -->
				      <label class="text-flow for="inputNome">Nome Completo*</label>
				      <input type="text" class="form-control" id="inputNome" placeholder="Seu Nome Completo">
				    </div>
				    <div class="form-group col-md-6">
				    <!-- E-mail -->
				      <label class="text-flow for="inputEmail">E-mail*</label>
				      <input type="email" class="form-control" id="inputEmail" placeholder="seuemail@exemplo.com">
				    </div>
				  </div>
				   <div class="form-row">
				    <div class="form-group col-md-6">
				    <!-- Telefone -->
				      <label class="text-flow for="inputTelefone">Telefone*</label>
				      <input type="text" class="form-control" id="inputTelefone" placeholder="(XX) X XXXX-XXXX">
				    </div>
				    <div class="form-group col-md-6">
				    <!-- Assunto -->
				      <label class="text-flow for="inputAssunto">Assunto*</label>
				      <input type="text" class="form-control" id="inputAssunto" placeholder="Título da Mensagem">
				    </div>
				  </div>
				    <div class="form-group">
					   <label class="text-flow for="textAreaMensagem">Mensagem*</label>
					   <textarea class="form-control" id="textAreaMensagem" rows="3"></textarea>
					</div>

  				<button type="submit" class="btn btn-l-green pl-4 pr-4 float-lg-right mt-3">Enviar</button>
			</form>
			</div>

		</div>

	</section>
	
</body>
</html>