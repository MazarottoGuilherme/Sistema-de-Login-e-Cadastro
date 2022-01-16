<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$connect = mysqli_connect("127.0.0.1","root","") or die("Não foi possivel se conectar ao servidor");
	$db = mysqli_select_db($connect, "RedeSocial") or die("Não foi possivel entrar no servidor");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login e Cadastro</title>
</head>
<body>

</body>
</html>
