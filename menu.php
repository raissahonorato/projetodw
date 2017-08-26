<?php
session_start();
ob_start();

if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){
	echo ("<script> window.location.href = '/login.php';</script>");
}else{
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SAN-IFPB</title>
	<link rel="icon" href="img\favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style media="screen">
      .menu{
        font-family: 'Fjalla One', sans-serif;
        color: #66b562;
        font-size:
	text-alight: center;
      }
</style>
</head>
<body>
	<h1 class="menu">Menu Principal</h1>

		<ul id="listaMenuAdm" data-role="listview" data-inset="true">
		<li><a href="statussms.php">Verificar Status do envio</a></li>
		<li><a href="historicosms.php">Histórico de mensagens</a></li>
		<li><a href="login.php">Sair</a></li>
		
	</ul>
	<p>&nbsp;</p>
	<form method="post" name="formlogin" id="formlogin" action="exec.php?op=sms">
	  <table width="600" border="0" cellspacing="5" cellpadding="0" align="center">
	    <tbody>
	      <tr>
	        <td width="170">Código de Área</td>
	        <td width="415"><input type="number" name="codigo" id="codigo" size="10" maxlength="2"> 
	        (com 2 digitos)</td>
          </tr>
	      <tr>
	        <td><p>Número de Destino</p></td>
	        <td><input type="number" name="numero" id="numero" size="20" maxlength="9"></td>
          </tr>
	      <tr>
	        <td valign="top">Mensagem</td>
	        <td><textarea name="mensagem" id="mensagem" cols="40" rows="10"></textarea></td>
          </tr>
	      <tr>
	        <td><input type="hidden" id="usuario" name="usuario" value="<?php echo ($_SESSION['iduser']);?>"></td>
	        <td>&nbsp;</td>
          </tr>
	      <tr>
	        <td><input type="submit" value="Enviar"></td>
	        <td>&nbsp;</td>
          </tr>
        </tbody>
      </table>
		
	</form>
</body>
</html>
<?php
}
?>
