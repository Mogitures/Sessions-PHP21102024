<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body style="background-color:#333; color: white;">

	<?php 

		session_start();

		$_SESSION['nome'] = "Administrador";

		//session_unset(); //Excluir variáveis e manter a sessão.

		//Elimina toda a sessão:
		//session_destroy();

	?>

	<h3>Sessão de Usuário</h3>
	Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>
	<p>SID desta sessão é: <?php echo session_id(); ?>

</body>
</html>