<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página

<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form method="post" action="valida.php">
<p>Login:
<input type="text" name="usuario" maxlength="50" />
</p>
<p>Senha:
<input type="password" name="senha" maxlength="50" />
</p>
<p>
<input type="submit" name="Submit" value="Entrar">
</p>
<p ahref="">Esqueceu sua senha?</p>
</form>
</body>
</html>
