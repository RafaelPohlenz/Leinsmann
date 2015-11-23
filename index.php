<!DOCTYPE html>
<html>
<head>
	<title>Leinsmann Comercial</title>
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
			<div class="col-sm-12">

				<!-- carousel -->
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">

						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">

						<img  class="img-responsive" src="produtos/bolas eva.jpg" >
							<div class="carousel-caption">
							<a href="bolaseva.php">
								<h3>Bola E.V.A</h3></a>
								
							</div>
						</div>

						<div class="item">
							<img class="img-responsive" src="produtos/bota.jpg">
							<div class="carousel-caption">
								<a href="botas.php">
								<h3>Bota</h3></a>

							</div>
						</div>

						<div class="item">
							<img class="img-responsive" src="produtos/pantufa.jpg">
							<div class="carousel-caption">
							<a href="pantufa.php">
								<h3>Chinelo</h3></a>

							</div>
						</div>

					</div>
					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			</div>

		</div>	

		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<!-- ... painel todo aqui ... -->
					<p>
						Somos uma empresa que esta no mercado a 8 anos trabalhando com a
						produção de chinelos de lã, botas, pantufas adulto e infantil
						além de bolas de E.V.A personalizadas.
					</p>
				</div>
			</div>


		</div>

		<?php include 'rodape.php'; ?>


	</div>


</body>
</html>