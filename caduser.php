<?php
session_start();
ob_start();

if(!isset($_SESSION['iduser'])){
	header("/exec.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	    <meta charset="UTF-8
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SAN-IFPB</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1>Cadastro de Usuário</h1>
		<p>&nbsp;</p>
	<p>&nbsp;</p>
	<form method="post" name="formlogin" id="formlogin" action="exec.php?op=caduser">
	  <table width="600" border="0" cellspacing="5" cellpadding="0" align="center">
	    <tbody>
	      <tr>
	        <td width="88">Nome:</td>
	        <td width="497"><input type="text" name="nome" id="nome" size="40"></td>
          </tr>
	      <tr>
	        <td><p>Login:</p></td>
	        <td><input type="text" name="login" id="login" size="40"></td>
          </tr>
	      <tr>
	        <td>Senha</td>
	        <td><input type="password" name="senha" id="senha" size="40"></td>
          </tr>
	      <tr>
	        <td>Tipo de usuário</td>
	        <td>
       		 </tr>
	      <tr>
	        <td><input type="submit" value="Cadastrar"></td>
	        <td>&nbsp;</td>
          </tr>
        </tbody>
      </table>
		
	</form>
</body>
</html>
