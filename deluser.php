<?php
session_start();
ob_start();

require("crud.class.php");
require_once("config.php");
$bd = new BDClass;

if(!isset($_SESSION['iduser'])){
	header("/deluser.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Gateway SMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1>Gateway SMS - Deletar  Usuário</h1>
	<p><a href="menu.php">Menu Principal</a></p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<?php
		$resultado = $bd->listaOrdenada("usuarios", "nome", "ASC");
		$quantidade = count($resultado);
	
		if($quantidade > 0 ){
			for($i=0; $i < $quantidade; $i++){
				echo ($resultado[$i]['nome']);
				echo (" - ");
				echo ("<a href='exec.php?op=deluser&id=".$resultado[$i]['id_user']."'>Excluir</a>");
				echo ("<p>");
			}
		}
	?>
</body>
</html>
