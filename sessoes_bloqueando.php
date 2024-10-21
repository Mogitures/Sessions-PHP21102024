<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bloqueando páginas por sessões</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css.css">

	<?php 

		session_start();

		$_SESSION['nome'] = $_POST['nome'];

		$_SESSION['senha'] = $_POST['senha'];

		date_default_timezone_set("America/Sao_Paulo")

	 ?>

</head>
<body>

	<b>Funcionário: </b> <?php echo $_SESSION['nome'] ?>, logado com sucesso.<br>
	<b>Data de conexão: </b> <?php echo date("d/m/y") ?><br>
	<b>Hora de conexão: </b> <?php echo date("H:i:s") ?><br>

	<a href="sessoes_verifica_sessao.php">Área de administrador</a>

</body>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</html>