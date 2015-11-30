<?php

		//pega as variaveis por POST
		$nome      = $_POST["nome"];
		$site     = "site";
		$email   = $_POST["email"];
		$fone  = "fone";
		$assunto   = "assunto";
		$mensagem  = $_POST["mensagem"];

		global $email; //função para validar a variável $email no script todo

		$data      = date("d/m/y");                     //função para pegar a data de envio do e-mail
		$ip        = $_SERVER['REMOTE_ADDR'];           //função para pegar o ip do usuário
		$navegador = $_SERVER['HTTP_USER_AGENT'];       //função para pegar o navegador do visitante
		$hora      = date("H:i");                       //para pegar a hora com a função date

		//aqui envia o e-mail para você
		mail ("leismannComercial@gmail.com",                       //email aonde o php vai enviar os dados do form
			"$assunto",
			"Nome: $nome\nData: $data\nIp: $ip\nNavegador: $navegador\nHora: $hora\nSite: $site\nE-mail: $email\nTelefone: $fone\n\nMensagem: $mensagem",
			"From: $email"
			);

		//aqui são as configurações para enviar o e-mail para o visitante
		$site   = "leismannComercial@gmail.com";                    //o e-mail que aparecerá na caixa postal do visitante
		$titulo = "Retorno";                  //titulo da mensagem enviada para o visitante
		$msg    = "$nome, obrigado por entrar em contato conosco, em breve entraremos em contato";

		//aqui envia o e-mail de auto-resposta para o visitante
		mail("$email",
			"$titulo",
			"$msg",
			"From: $site"
			);

			?>

	


<!DOCTYPE html>
<html>
<head>
	<title>Empresa</title>

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
			<div class="col-sm-12">
				<div class="panel panel-default">
				<!-- 	ATENDIMENTO -->
					<div class="panel-heading">Sucesso:</div>
						<div class="panel-body"><br>
				

					<p><?= $nome ?>, sua mensagem foi enviada com sucesso!</p>
						<p>Estaremos retornando em breve.</p>

						</div>
				</div>
			</div>
		</div>

		<?php include 'rodape.php'; ?>




</div>



</body>
</html>