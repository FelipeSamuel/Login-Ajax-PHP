<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Teste com Ajax</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-3.1.0.js"></script>
	<script type="text/javascript" src="ajax.js"></script>
</head>
<body>
<div class="feed">Mensagem aqui</div>
<div class="container">
	<div class="header">
		<h1 class="header__title">Login</h1>
	</div>
	<div class="content">
	<form method="post" action="#" id="login">
		<input type="text" name="usuario" placeholder="Usuário" id="usuario" required="required">
		<br>
		<input type="password" name="senha" placeholder="Senha" id="senha" required="required">
		<br>
		<input type="submit" name="entrar" value="Entrar" id="entrar">
		<br>
	</form>
	</div>
</div>
</body>
</html>