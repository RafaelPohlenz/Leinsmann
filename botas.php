<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>

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
	<?php include 'fundo.php';?>
	<div class="container">
		<?php include 'menu.php';?>

		<div class="row">

			<div class="col-sm-2">
				<div class="panel panel-default">
					<div class="panel-heading">Categoriais</div>
					<div class="panel-body">
						<a href="botas.php"> Botas</a><br>
						<a href="bolaseva.php"> Bolas de E.V.A</a><br>
						<a href="chinelos.php"> Chinelos de lã</a><br>
						<a href="pantufa.php"> Pantufas</a><br>
						
					</div>
				</div>
			</div>
				<div class="col-sm-10">
					<div class="panel panel-default">
						<!-- 	ATENDIMENTO -->
						<div class="panel-heading">Fotos</div>
						<div class="panel-body">

							<div class="col-sm-4" >
								<a href="#"></a><img id="imgb" src="produtos/bota.jpg" >
								<h2>Bota </h2>
								<p>Produto feito com materiais de lã</p>
							</div>
							
						</div>
					</div>
				</div>




			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default">
						<!-- 	ATENDIMENTO -->
						<div class="panel-heading">Comentários</div>
						<div class="panel-body">

						</div>
					</div>
				</div>
			</div>


			<?php include 'rodape.php'; ?>
		</div>
	</body>
	</html>