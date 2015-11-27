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
	<link rel="icon" type="image/png" href="img/favicon.ico" />

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
							<a href="#"></a><img id="imgb" src="produtos/bola.jpg" >
							<h2>Bola de E.V.A </h2>
							<p>Produto feito com materiais sintéticos</p>
						</div>

						<div class="col-sm-4" >
							<a href="#"></a><img id="imgb" src="produtos/bolas eva.jpg" >
							<h2>Bola de E.V.A </h2>
							<p>Produto feito com materiais sintéticos</p>
						</div>

						<div class="col-sm-4" >
							<a href="#"></a><img id="imgb" src="produtos/bolas personalizadas.jpg" >
							<h2>Bola de E.V.A Personalizada</h2>
							<p>Produto feito com materiais sintéticos</p>
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
						<div id="disqus_thread"></div>
						<script>
						/**
						* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
						* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
						*/
						
						var disqus_config = function () {
						this.page.url = leinsmanncomercial.pe.hu/bolaseva.php; // Replace PAGE_URL with your page's canonical URL variable
						this.page.identifier = 'bolaseva3'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
						};
						
						(function() { // DON'T EDIT BELOW THIS LINE
							var d = document, s = d.createElement('script');

							s.src = '//leisnmann.disqus.com/embed.js';

							s.setAttribute('data-timestamp', +new Date());
							(d.head || d.body).appendChild(s);
						})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

				</div>
			</div>
		</div>
	</div>


	<script id="dsq-count-scr" src="//leisnmann.disqus.com/count.js" async></script>
	<?php include 'rodape.php'; ?>
</div>
</body>
</html>