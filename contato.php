<!DOCTYPE html>
<html>
<head>
	<title>Contato</title>

	<meta charset="utf-8"/>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


	<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>

	<div class="container">

		<?php include 'menu.php' ?>

		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<!-- 	Contato-->
					<div class="panel-heading">Contato</div>
					<div class="panel-body">
						<form role="form">
							<div class="form-group">
								<label for="Name">Nome ou Empresa:</label>
								<input placeholder="Nome ou Empresa:" type="text" class="form-control" id="nome" required>
							</div>
							<div class="form-group">
								<label for="email">Email address:</label>
								<input placeholder="exemplo@exemplo.com" type="email" class="form-control" id="email" required>
							</div>
							<div class="form-group">								<label  for="Mensagem">Mensagem:</label>
								<textarea placeholder="Mensagem" type="text" class="form-control" id="mensagem" required></textarea>
							</div>
							
							<button type="submit" class="btn btn-default" onclick="validaForm()">Enviar</button>
						</form>
					</div>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<!-- 	Contato-->
					<div class="panel-heading">Outros meios de contato com a empresa:</div>
					<div class="panel-body">
					Telefone: (49)9903-1638<br><br>
					Email: Iccomercial@yahoo.com.br



					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<!-- 	Contato-->
					<div class="panel-heading">Endereço</div>
					<div class="panel-body">
					Rua Brásilia,1111 -Sala 81 - B. São Cristóvão - Caçador - SC- 89.500-000

					</div>
				</div>
			</div>
		</div>
					<?php include 'rodape.php' ?>

				</div>
			</body>
			</html>